
<?php
session_start();

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION['email'])) {
    echo "error in sending";
    header("Location: signup.php"); // Redirect to the login page if not authenticated
    exit();
}
?>

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

<a href="signout.php" class="btn btn-primary m-3" id="logoutBtn">Logout</a>



<a href="table.php" class="btn btn-primary m-3">Show Table</a>
<form method="post"> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Mobile</label>
    <input type="phone" name="mobile" class="form-control" id="inputAddress" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Occupation</label>
    <input type="text" name ="occupation" class="form-control" id="inputAddress2" placeholder="Occupation">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Refer</label>
      <input type="text" name="refer" class="form-control" id="inputCity" placeholder="refer">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" name="gender" class="form-control">
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
  <button type="submit" name="submit" class="btn btn-primary m-3">Register</button>

    </div>
  </div>
</form>
</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $occupation=$_POST['occupation'];
    $refer=$_POST['refer'];
    $gender=$_POST['gender'];

    $insertquery = "insert into users(name,email,mobile,Occupation,Refer,Gender) values('$name','$email','$mobile','$occupation','$refer','$gender')";
     
    $res = mysqli_query($con,$insertquery);
    if($res)
    {
      ?>
      <script>
        alert("data inserted successfully");
      </script>
      <?php
    }
    else{
      ?>
      <script>
         alert("data not inserted");
        </script>
      <?php
    }
  }
?>