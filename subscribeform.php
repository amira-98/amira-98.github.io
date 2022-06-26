<?php


$to = "amira98chebbi@gmail.com";
$subject = "Contact Form";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$headers = "From: ".$email . "name: ".$name;
mail($to,$subject,$message,$headers);






?>