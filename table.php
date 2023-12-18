<?php
include 'connection.php'; 
echo '<br/>';


// echo $res[2]; surf in column of single row

// while($res = mysqli_fetch_array($query))
// {
//     echo $res['name'].'<br/>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php' ?>
</head>
<body>
    

<div class="table-responsive-sm p-3">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">OCCUPATION</th>
      <th scope="col">REFER</th>
      <th scope="col">GENDER</th>
      <th scope="col" colspan="2">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>


  <?php 
  $select_query= "select * from users";
  $query = mysqli_query($con,$select_query);
  // $num = mysqli_num_rows($query);
  // echo $num;
  
  while ($res = mysqli_fetch_array($query)){
  ?>
    <tr>
      <td><?php echo $res['ID']?></td>
      <td><?php echo $res['name']?></td>
      <td><?php echo $res['email']?></td>
      <td><?php echo $res['mobile']?></td>
      <td><?php echo $res['Occupation']?></td>
      <td><?php echo $res['Refer']?></td>
      <td><?php echo $res['Gender']?></td>
      <!-- add tooltip if you want  -->
      <td><button style="background-color:blue; color:white"><a href="update.php?id=<?php echo $res['ID']; ?>">EDIT</a></button></td>
      <td><button style="background-color:red; color:white"><a href="delete.php?id=<?php echo $res['ID']; ?>">DELETE</a></button></td>
    </tr>

    <?php
  }
  ?>

   
  </tbody>
</table>
</div>

</body>
</html>
