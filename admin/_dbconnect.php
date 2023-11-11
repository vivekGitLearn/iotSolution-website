<?php
$server ="localhost";
$username = "root";
$pass="";
$database ="lawtop";

$conn = mysqli_connect($server,$username,$pass,$database);
if($conn){
  //  echo "success";

}
else{
    die("error".mysqli_connect_error());
}
?>