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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin Dashboard(<?php echo $_SESSION['username']?>)</title>
    
</head>

<body>
<?php include 'admin_nav.php' ?>
<h1>Hello, <?php echo $_SESSION['username'];?>!</h1>
    

    <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/lawtop/admin/admin_dashboard.php">dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/lawtop/admin/add_post.php">add post</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="/lawtop/admin/edit_post.php">edit post</a>
  </li>
</ul>
  <li class="nav-item">
    <a class="nav-link" href="/lawtop/admin/delete_post.php">Delete Post</a>
  </li> -->
</ul>

</body>

</html>