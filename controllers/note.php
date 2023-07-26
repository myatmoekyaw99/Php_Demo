<?php
$config = require ('config.php');

$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id",[
    'id' => $_GET['id']])->findOrFail();

    // dd($note);
$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);
    //     abort(Response::FORBIDDEN);
    // }
    

$heading = "Note";

require "views/note.view.php";