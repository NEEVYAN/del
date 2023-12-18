<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <?php include 'link.php'?>

</head>
<body>

<div class="login-wrap my-4">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		
        <div class="login-form">
        <form method="post">
        <div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
        </form>




        <form method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="name" type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="cpassword" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name="email" type="text" class="input" required>
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>

        </form>





		</div>
	</div>
</div>

</body>
</html>


<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpassword']); 



    
    if($cpass != $pass)
    {
        echo "<h2> password mismatch</h2>";
    }
    else{
        $strpass = password_hash($pass,PASSWORD_BCRYPT);
        $emailquery = "select * from signup where email = '$email'";
        $queryCheck = mysqli_query($con,$emailquery);
        $emailCount = mysqli_num_rows($queryCheck);
        if($emailCount>0)
        {
          echo "email already exists";
        }
        else{
          $insertquery = "insert into signup(name,email,password) values('$name','$email','$strpass')";
          $res = mysqli_query($con,$insertquery);
          if($res)
          {
            ?>
            <script>
              alert("user registerd successfully");
            </script>
            <?php
          }
          else{
            ?>
            <script>
               alert("user not registered inserted");
              </script>
            <?php
          }
        }
    }
  }

  if(isset($_POST['login']))
  {
      $email=$_POST['email'];
      $pass=$_POST['password'];



      $getpass = "select password from signup where email='{$email}'";
      $query = mysqli_query($con,$getpass);
      if($query)
      {
        $row = mysqli_fetch_assoc($query);
        $hash = $row['password'];

         $passcheck = password_verify($pass, $hash);
         if($passcheck)
         {
           $_SESSION['email']=$email;
           ?>
           <script>
             alert("login successfully");
            location.replace("Home.php");
           </script>
           <?php
         }
         else{
           ?>
           <script>
              alert("login failed");
             </script>
           <?php
         }
       }

      }
?>