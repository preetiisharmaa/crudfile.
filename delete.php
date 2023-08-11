<?php

$stud_id = $_GET["id"];

$conn = mysqli_connect("localhost","root","","prabhakar")or die("not coonect");
$query ="DELETE FROM student WHERE id = '{$stud_id}'";
$result = mysqli_query($conn,$query) or die("faild to load");


// header("Location: https//localhost/crud/index.php");
mysqli_close($conn);

?>