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

    $sql="INSERT INTO `law_post` (`post_id`, `title`, `court`, `Case_type`, `month`, `judgement_date`, `published_date`, `post`) VALUES (NULL, '$title', '$court', '$case_type', '$month', '$judgement_date', current_timestamp(), '$post_user')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "successful";
    }
    else{echo"record not inserted<br>error...".mysqli_error($conn);}
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
        <form action="/lawtop/admin/add_post.php" method="post">

            <div class="mb-3">
                <label for="title">TITLE</label>
                <input type="text" id="title" name="title" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="court">court</label>
                <input type="text" id="court" name="court" placeholder="court">
            </div>
            <div class="mb-3">
                <label for="case_type">case_type</label>
                <input type="text" id="case_type" name="case_type" placeholder="case_type">
            </div>
            <div class="mb-3">
                <label for="month">month</label>
                <input type="text" id="month"  name="month" placeholder="month">
            </div>

            <div class="py-3 pt-5">
                <label for="judgement_date">judegement date</label>
                <input type="date" class="inp" id="judgement_date" name="judgement_date" placeholder="judgement_date">
            </div>


            <div class="mb-3">
                <label for="post_user" class="form-label">your post</label>
                <textarea class="form-control" id="post_user" name="post_user"></textarea>
            </div>

            <div class="text-center py-2 pt-4">
                <button type="submit" class="btn1">PUBLISHED</button>
            </div>

        </form>
    </div>

    </div>
    </div>

    </section>

</body>

</html>