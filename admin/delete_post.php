<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: /lawtop/loginform.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
<?php include 'admin_nav.php'; 
include "_dbconnect.php";
$id=$_GET['post_id_pass'];
$sql="DELETE FROM `law_post` WHERE `law_post`.`post_id` = $id";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "deleted successful";
}
else
{
  echo "record not inserted<br>error...".mysqli_error($conn);
}
?>
</body>
</html>