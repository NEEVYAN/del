<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'link.php' ?>

    
<style>
    form{
        margin: 10%;
    }
    </style>


</head>


<body>


<a href="table.php" class="btn btn-primary m-3">Show Table</a>
<form method="post"> 
  <div class="form-row">

  <?php
  include 'connection.php';
  $id = $_GET['id'];
  $showquery = "select * from users where ID = {$id}";
  $showdata = mysqli_query($con,$showquery);
  $arrdata = mysqli_fetch_array($showdata);
  ?>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" value="<?php echo $arrdata['name'] ?>" class="form-control" id="inputEmail4" placeholder="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?php echo $arrdata['email'] ?>" class="form-control" id="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Mobile</label>
    <input type="phone" name="mobile" class="form-control" value="<?php echo $arrdata['mobile'] ?>" id="inputAddress" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Occupation</label>
    <input type="text" name ="occupation" value="<?php echo $arrdata['Occupation'] ?>" class="form-control" id="inputAddress2" placeholder="Occupation">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Refer</label>
      <input type="text" name="refer" class="form-control" value="<?php echo $arrdata['Refer'] ?>" id="inputCity" placeholder="refer">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" name="gender" value="<?php echo $arrdata['gender'] ?>" class="form-control">
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
  <button type="submit" name="submit" class="btn btn-primary m-3">UPDATE</button>

    </div>
  </div>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    $idupdate = $_GET['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $occupation=$_POST['occupation'];
    $refer=$_POST['refer'];
    $gender=$_POST['gender'];

    // $insertquery = "insert into users(name,email,mobile,Occupation,Refer,Gender) values('$name','$email','$mobile','$occupation','$refer','$gender')";

    $updateQuery = "update users set ID=$idupdate,name='$name',email='$email',mobile='$mobile',Occupation='$occupation',Refer='$refer',Gender='$gender' where ID = {$idupdate} ";

    $res = mysqli_query($con,$updateQuery);
    if($res)
    {
      header("Location:table.php");
      ?>
      <script>
        alert("data updated successfully");
      </script>
      <?php
    }
    else{
      ?>
      <script>
         alert("data not updated");
        </script>
      <?php
        header("Location:table.php");
    }
  }
?>