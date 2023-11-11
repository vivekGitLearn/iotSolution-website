<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: /lawtop/loginform.php");
  exit;
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  include "_dbconnect.php";
    $subject_code = $_POST['subject_code'];
    $topic_name = $_POST['topic_name'];
    $description = $_POST['description'];
    

     // File upload handling
     $targetDir = "library/";
     $fileName = $_FILES['pdf_file']['name'];
     $targetFilePath = $targetDir . $fileName;
 
     // Check if the file is a PDF (you can add more checks as needed)
     $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
     if ($fileType !== "pdf") {
         echo "Only PDF files are allowed.";
         exit;
     }
 
     else{
      $sql="INSERT INTO `topic_list` (`topic_ID`, `subject_code`, `topic_name`, `main_topic`, `sub_topic`, `description`, `date`, `location`) 
      VALUES (NULL, '$subject_code', '$topic_name', '0', '1', '$description', current_timestamp(), '$fileName')";
        $result=mysqli_query($conn,$sql);
        if($result){
          move_uploaded_file($_FILES['pdf_file']['tmp_name'], $targetFilePath);
          echo "successful";
    }
    else{echo"record not inserted<br>error...".mysqli_error($conn);}

        }
    }
    //  // Move the uploaded file to the target directory
    //  if (!move_uploaded_file($_FILES['pdf_file']['tmp_name'], $targetFilePath)) {
    //      echo "Error uploading the file.";
    //      exit;
    //  }
    // Process the form data and handle the uploaded PDF file
    // ... Your code here ...

?>
<!doctype html>

<head>

  <title>add subject</title>
</head>

<body>

  //connect to the database

  <?php include '_dbconnect.php' ?>

 
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

      <?php 
      $subject_id=$_GET['subject_id'];
      ?>
      <form action="/lawtop/admin/_add_topic.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="subject_code" value="<?php echo $subject_id;?>">
        <label for="topic_name">Topic Name:</label>
        <input type="text" name="topic_name" id="topic_name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea><br>

        <label for="pdf_file">Attach PDF:</label>
        <input type="file" name="pdf_file" id="pdf_file" required><br>

        <input type="submit" name="submit" value="Submit Topic">

        </action>
      </form>
    </div>

  </body>

  </html>