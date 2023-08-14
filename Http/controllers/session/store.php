<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Http\Forms\LoginForm;


$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

//valid the form inputs
$form = new LoginForm();

if($form->validate($email, $password)){

    if((new Authenticator())->attempt($email, $password)){
    
       redirect('/');
    }

    $form->error('email','No matching account found for that email address!');
     
}

Session::flash('errors', $form->errors());

Session::flash('old', [
    'email' => $_POST['email']
]);

redirect('/login');

// return view('session/create.view.php',[
//     'errors' => $form->errors(),
// ]);
