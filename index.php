<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="savedata.php" method="post">

      Name:<input type="text" name="name">
      <br>
      <br>
      Email:<input type="text" name="email">
      <br>
      <br>
      Phone:<input type="number" name="phone">
      <br>
      <br>
      <input type="submit">

    </form>
     <table>

          <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>PHONE</th>
              <th>

                         ACTION


              </th>

          </tr>

        <?php
          $con = mysqli_connect("localhost","root","","student")or die("not coonect");
          $query ="SELECT * FROM child";
          $result = mysqli_query($con,$query) or die("faild to load");
          while($row=mysqli_fetch_assoc($result)){
        ?>         


          <tr>
            <td><?php echo $row["id"];   ?></td>
            <td><?php echo $row["name"];   ?></td>
            <td><?php echo $row["email"];   ?></td>
            <td><?php echo $row["phone"];   ?></td>
            <td>
                      
              <a href="">edit</a>
              <a href="">delete</a>

            </td>
          </tr>


          <?php 

            } 

          // header("Location: Https//localhost/crud/index.php");
          mysqli_close($con);  
              
          ?>
     </table>



</body>
</html>