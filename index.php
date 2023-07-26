<?php
require 'functions.php';
require 'Response.php';
require 'Database.php';
require 'routers.php';

// class Person{
//     public $name;
//     public $age;
//     public function breathe(){
//         echo $this->name." is Breathing"; 
//     }
// }
// $person = new Person();
// $person->name = "Jon Doe";
// $person->age = 30;  
// dd("$person");
//$person->breathe();

//connect to our MySQL database.

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$posts = $db->query($query,['id'=> $id])->fetchAll();

// dd($posts);
foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
}
