<?php

require base_path('Core/Validator.php');

$config = require base_path('config.php');

$db = new Database($config['database']);

// $heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    // $validator = new Validator();

   
    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'Description that have less than 1000 characters are required!';
    }

    // if(strlen($_POST['body']) > 1000){
    //     $errors['body'] = 'The description should be under 1000 characters!';
    // }

    if(empty($errors['body'])){
        $db->query("insert into notes(body,user_id) values(:body, :user_id)",[
            'body' => $_POST['body'],
            'user_id' => 1,
            ]);
    }
   
}

view("notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
]);