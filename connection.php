<?php
$username = "root";
$pass ="";
$server ="localhost";
$db = "register";


$con = mysqli_connect($server,$username,$pass,$db);
if($con)
{


   ?>
      <!-- <script>
        alert("connection successuful");
        </script> -->
    <?php
    echo "connetion successful";
}
else 
{
    echo "connetion failed";
    die("no connection");
}

