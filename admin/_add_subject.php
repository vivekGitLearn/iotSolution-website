<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: /lawtop/loginform.php");
  exit;
}

?>
<!doctype html>

<head>

  <title>add subject</title>
</head>

<body>

  //connect to the database

  <?php include '_dbconnect.php' ?>

  <?php
  //variable for data table
  if ($_SERVER['REQUEST_METHOD'] == 'POST') 
  {

    $book_name = $_POST['b_name'];
    // $book_id = $_POST['b_id'];
    // $book_no = $_POST['b_no'];
    // $book_author = $_POST['b_aut'];
    $book_desc = $_POST['b_desc'];
    // $book_cat = $_POST['b_cat'];
    $image = $_FILES['image']['name'];
    $allowd_extension = array('png', 'jpg', 'jpeg');
    $file_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $file_extension;
    //set query
echo $book_name;
echo $book_desc;
echo $filename;
    if (!in_array($file_extension, $allowd_extension)) {
      $_SESSION['status'] = "you are allowd with only jpg,png,jpeg image";
      // header("location: /lawtop/admin/_admin_library.php");
      // exit(0);
    } else {
      // $sql = "INSERT INTO `book_detail` (`book_name`, `book_id`, `no_of_book`, `author`, `description`, `category`) VALUES ('$book_name', '$book_id', '$book_no', '$book_author', '$book_desc', '$book_cat')";
      $sql = "INSERT INTO `library_subject` (`subject_code`, `subject`, `description`, `creation date`,`image`) VALUES (NULL, '$book_name', '$book_desc', current_timestamp(),'$filename')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], 'lib_image/' . $filename);
        echo "successful";
      } else {
        echo "record not inserted<br>error..." . mysqli_error($conn);
      }


      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>  subject' . $book_name.  ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
    }
  } ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Document</title>
  </head>

  <body>
    <?php include 'admin_nav.php' ?>


    <div class="container">
      <h3 class="text-center">add subject details</h3>
      <form action="/lawtop/admin/_add_subject.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="b_name">subject name</lebel>
            <input type="text" class="form-control" name="b_name" id="b_name">
        </div>

        <!-- <div class="col-md-6">
          <label for="b_no">no of book</label>
          <input type="number" class="form-control" name="b_no" id="b_no">
        </div> -->
        <!-- <div class="col-md-6">
          <label for="b_aut">author</label>
          <input type="text" class="form-control" name="b_aut" id="b_aut">
        </div> -->
        <div class="col-md-6">
          <label for="b_desc">description</label>
          <input type="text" class="form-control" name="b_desc" id="b_desc">
        </div>

        <div class="image">
          <div class="btn btn-mdb-color btn-rounded float-left">
            <span class="img">Image</span>
            <input type="file" name="image">
          </div>
        </div>
        <!-- <div class="col-md-6">
          <label for="b_cat">category</label>
          <input type="text" class="form-control" name="b_cat" id="b_cat">
          <div class="col-md-6"> -->
        <button type="submit">submit</button>
        </action>
      </form>
    </div>

  </body>

  </html>