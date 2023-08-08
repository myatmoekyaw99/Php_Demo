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

if(! Validator::string($password)){
    $errors['password'] = 'Please enter the validate password!';
}

if(! empty($errors)){
    return view('session/create.view.php',[
        'errors' => $errors,
    ]);
}

//check match the credentials

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->find();

if($user){

    if(password_verify($password, $user['password'])){
        login($user);
        
        header('location: /');
        exit();
    }   
}

return view('session/create.view.php',[
    'errors' => [
        'email' => 'No matching account found for that email address!',
    ]
]);