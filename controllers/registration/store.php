<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

//valid the form inputs
$errors = [];

if(! Validator::email($email)){
    $errors['email'] = 'Please enter the valid email!';
}

if(! Validator::string($password, 7, 255)){
    $errors['password'] = 'Please enter at least 7 character and no more than 255 character!';
}

if(! empty($errors)){
    return view('registration/create.view.php',[
        'errors' => $errors,
    ]);
}

//check the account already exist in the database

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->find();

if($user){
//if true, redirect login page & return an error message
    header('location: /');
    exit();

}else {
//if false ,create new account in database and then log the use in , and redirect 
    $db->query('INSERT INTO users(password,email) VALUES(:password, :email)', [
        'email' => $email,
        'password' => password_hash($password,PASSWORD_BCRYPT),
    ]);

    //mark that the user has logged in
    login($user);

    header('location: /');
    exit();

}
