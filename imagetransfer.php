<?php
if(isset($_FILES['fileToUplode'])){
    $errror =array();
    $file_name = $_FILES['fileToUplode']['name'];
    $file_size = $_FILES['fileToUplode']['size'];
    $file_tmp = $_FILES['fileToUplode']['tmp_name'];
    $file_type = $_FILES['fileToUplode']['type'];
    $file_ext = end(explode('.',$file_name));
    $extension =array("jpeg","png","jpg");
    if(in_array($file_ext,$extension)=== false)
    {
        $errror[]= "This extension file not allowed , plese chooes, JPG or PNG files";
    }
    if ($file_size >2097152){
        $errror[]="file size must be 2mb or lower ";
    }
    if(empty($errror)==true){
        move_uploaded_file($_FILES['fileToUplode']['tmp_name'],"uploade/".$file_name);
    }else{
        print_r($errror);
    }
}


$conn = mysqli_connect("localhost","root","","prabhakar")or die("not coonect");
$query ="INSERT INTO image(fileToUplode) VALUES('{$file_name}')";
$result = mysqli_query($conn,$query) or die("faild to load");

mysqli_close($conn);
?>