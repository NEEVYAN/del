<?php
include 'connection.php';

$id = $_GET['id'];

$deleteQuery = "DELETE FROM users where ID = $id ";

$query = mysqli_query($con,$deleteQuery);

if($query)
{
  ?>
    <script>
        alert('Successfully deleted');
        </script>
  <?php

}
else{
    ?>
    <script>
        alert('Something went wrong');
        </script>
  <?php
}

header('location:table.php');
