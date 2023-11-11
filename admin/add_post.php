<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: /lawtop/loginform.php");
    exit;
}
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "_dbconnect.php";
    $title=$_POST["title"];
    $court=$_POST["court"];
    $case_type=$_POST["case_type"];
    $month=$_POST["month"];
    $judgement_date=$_POST["judgement_date"];
    $post_user=$_POST["post_user"];
    $keyword=$_POST["keyword"];
    $image=$_FILES['image']['name'];
    $allowd_extension=array('png','jpg','jpeg');
    $file_extension= pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$file_extension;


    if(!in_array($file_extension,$allowd_extension)){
        $_SESSION['status']="you are allowd with only jpg,png,jpeg image";
        header("location: /lawtop/admin/add_post.php");
        exit(0);
    }
else{
    $sql="INSERT INTO `law_post` (`post_id`, `title`, `court`, `Case_type`, `month`, `judgement_date`, `published_date`, `post`, `keywords`,`image`) 
    VALUES (NULL, '$title', '$court', '$case_type', '$month', '$judgement_date', current_timestamp(), '$post_user', '$keyword','$filename')";
    $result=mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$filename);
        echo "successful";
    }
    else{echo"record not inserted<br>error...".mysqli_error($conn);}
 }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_post.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/loginstyle.css"> -->
    <script src="https://kit.fontawesome.com/93df7150d5.js" crossorigin="anonymous"></script>

    <title>Add blog</title>
</head>

<body>
    <?php include 'admin_nav.php' ?>
    <h1>Hello, <?php echo $_SESSION['username'];?>!</h1>

    <div class="post-cont">
        <h1 class="p">Add Post </h1>
        <form class="container" action="/lawtop/admin/add_post.php" method="post"
        enctype="multipart/form-data">

            <div class="title">
                <label for="title">Title</label>
                <input type="text" class="til" name="title" placeholder="Title">
            </div>
            <div class="court">
                <label for="court">Court</label>
                <input type="text" class="cou" name="court" placeholder="Court">
            </div>
            <div class="case">
                <label for="case_type">Case_type</label>
                <input type="text" class="casetype" name="case_type" placeholder="Case_type">
            </div>
            <div class="month">
                <label for="month">Month</label>
                <input type="text" class="mon" name="month" placeholder="Month">
            </div>


            <div class="month">
                <label for="keyword">keyword</label>
                <input type="text" class="keyword" name="keyword" placeholder="keyword">
            </div>

            <div class="jude">
                <label for="judgement_date">Judegement date</label>
                <input type="date" class="inp" name="judgement_date" placeholder="Judgement_date">
            </div>


            <div class="image">
                <div class="btn btn-mdb-color btn-rounded float-left">
                    <span class="img">Image</span>
                    <input type="file" name="image">
                </div>
            </div>


            <div class="post">
                <label for="post_user" class="form-label">Your post</label>
                <textarea class="form-control" name="post_user"></textarea>
            </div>

            <div class="text-center py-2 pt-4">
                <button type="submit" class="btn btn-success">PUBLISH</button>
            </div>

        </form>
    </div>

    </div>
    </div>

    </section>

</body>

</html>