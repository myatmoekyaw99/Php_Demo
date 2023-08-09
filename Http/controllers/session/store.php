<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
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

return view('session/create.view.php',[
    'errors' => $form->errors(),
]);
