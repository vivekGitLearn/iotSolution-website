<?php
include "dbconnect.php";
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: /lawtop/loginform.php");
  exit;
}


?>

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
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
  <?php include 'admin_nav.php';?>
<table class="table" border="green" >
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">subject_id</th>
          <th scope="col">id</th>
          <th scope="col">author</th>
          <th scope="col">description</th>
          <th scope="col">category</th>
          <th scope="col">available</th>
 
        </tr>
      </thead>
      <tbody>
<?php 
$uid=$_SESSION['username'];
$sno=0;
          $sql = "SELECT * FROM `book_detail`";
          $result = mysqli_query($conn, $sql);
        
          
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['book_name'] . "</td>
            <td>". $row['book_id'] . "</td>
            <td>". $row['author'] . "</td>
            <td>". $row['description'] . "</td>
            <td>". $row['category'] . "</td>
            <td>". $row['no_of_book'] . "</td>
                      </tr>";}
                      ?>
</body>
</html>