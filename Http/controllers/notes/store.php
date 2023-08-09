<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

// $validator = new Validator();
if(! Validator::string($_POST['body'], 1, 1000)){
    $errors['body'] = 'Description that have less than 1000 characters are required!';
}

// if(strlen($_POST['body']) > 1000){
//     $errors['body'] = 'The description should be under 1000 characters!';
// }

if(! empty($errors['body'])){
    view("notes/create.view.php",[
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}else{
    
$db->query("insert into notes(body,user_id) values(:body, :user_id)",[
    'body' => $_POST['body'],
    'user_id' => 1,
    ]);

header('Location: /notes');
exit();
}