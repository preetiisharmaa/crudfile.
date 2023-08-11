<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form action="" method="post">

    

    <!-- Course:<select>

    <?php

       $conn = mysqli_connect("localhost","root","","student") or die("not coonect");
       $query = "SELECT * FROM course";
       $result = mysqli_query($conn,$query) or die("faild to load");

       while($row=mysqli_fetch_assoc($result)){
    ?>
                 
        <option value="<?php echo $row["cid"]; ?>"> <?php echo $row["course"]; ?> </option>
 
    <?php }  ?>    
          
    </select> -->


    City: <select>
        <?php
        $con = mysqli_connect("localhost","root","","city")or die("not coonect");
        $query ="SELECT * FROM bhardwaj";
        $result = mysqli_query($con,$query) or die("faild to load");
        while($row=mysqli_fetch_assoc($result)){
      ?>
      <option vlaue="<?php echo $row["cid"];?>"> <?php echo $row["city"];?></option>
      <?php }?>
      



    </select>



    </form>






</body>
</html>