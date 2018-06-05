<?php
include("../../config.php");

if(isset($_POST['name']) && isset($_POST['username'])) {

  $name = $_POST['name'];
  $username = $_POST['username'];
  $dateee = date("Y-m-d");


  $query = mysqli_query($con,"INSERT INTO playlists (name, owner, dateCreated) VALUES('$name', '$username', '$dateee')");

}

else{
  echo "Name or username parameters not passed into file";
}


 ?>
