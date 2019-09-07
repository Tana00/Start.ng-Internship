<?php
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];
$formcontent="\n \n From: $name ($email) \n Title:  $title \n Message: $message"; 

$fp = fopen('contactform.txt', 'a');
fwrite($fp, $formcontent);
fclose($fp);


echo "Thank You! $name <a href='index.html' style='text-decoration:none;color:#ff0099; margin: auto;'> Return Home </a>";
?>