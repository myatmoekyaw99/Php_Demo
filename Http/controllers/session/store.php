<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

//valid the form inputs

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$singIn = (new Authenticator())->attempt($attributes['email'], $attributes['password']);

if(! $singIn){

    $form->error('email','No matching account found for that email address!')
     ->throw();
}

redirect('/');
