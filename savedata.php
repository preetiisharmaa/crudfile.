<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];




$conn = mysqli_connect("localhost","root","","prabhakar")or die("not coonect");
$query ="INSERT INTO student(name,email,phone) VALUES('{$name}','{$email}','{$phone}')";
$result = mysqli_query($conn,$query) or die("faild to load");




mysqli_close($conn);

?>