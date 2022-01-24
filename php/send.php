<?php
$destination= "manuel14mds@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$subjet = $_POST["subjet"];
$message = $_POST["message"];
$comentarios = $_POST["comentarios"];

$content = "Name: "  . $name . "\nEmail: "  . $email ."\nsubject: " . $subjet . "\nMessage: " . $message;
    
mail($destination,"contacto",$content);
?>

