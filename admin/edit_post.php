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
    <link rel="stylesheet" href="add_post.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php include 'admin_nav.php' ?>
    <?php include '_dbconnect.php'?>
    <div class="max-width-1 m-auto">
        <hr>
    </div>


    <!-- <div class="post-img">
        <img src="img/vecteezy_the-beautiful-red-dragonfly-perched-on-the-leaves-for-the_6504390_341.jpeg" alt=""
            srcset="">
    </div> -->
    <?php

  $id=$_GET['post_id_pass'];
  echo $id;
   $sql="SELECT * FROM `law_post` WHERE post_id=$id";
    $result =mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $title=$row['title'];
        $court=$row['court'];
        $case_type=$row['Case_type'];
        $jud_date=$row['judgement_date'];
        $selected_post=$row['post'];
        $month=$row['month'];
        $keyword=$row['keywords'];
    }
   ?>
    <div class="post-cont">
        <h1 class="p">edit Post </h1>
        <form class="container" action="/lawtop/admin/edit_post_done.php" method="post">

            <div class="title">
                <label for="post_id">Post id</label>
                <input  type="number" value='<?php echo $id;?>' class="til" name="post_id" placeholder="post id">
            </div>
            <div class="title">
                <label for="title">Title</label>
                <input type="text" value='<?php echo $title;?>' class="til" name="title" placeholder="Title">
            </div>
            <div class="court">
                <label for="court">Court</label>
                <input type="text" value='<?php echo $court;?>' class="cou" name="court" placeholder="Court">
            </div>
            <div class="case">
                <label for="case_type">Case_type</label>
                <input type="text" value='<?php echo $case_type;?>' class="casetype" name="case_type"
                    placeholder="Case_type">
            </div>
            <div class="month">
                <label for="month">Month</label>
                <input type="text" value='<?php echo $month;?>' class="mon" name="month" placeholder="Month">
            </div>


            <div class="month">
                <label for="keyword">keyword</label>
                <input type="text" value='<?php echo $keyword;?>' class="keyword" name="keyword" placeholder="keyword">
            </div>

            <div class="jude">
                <label for="judgement_date">Judegement date</label>
                <input type="date" value='<?php echo $jud_date;?>' class="inp" name="judgement_date"
                    placeholder="Judgement_date">
            </div>


            <div class="image">
                <div class="btn btn-mdb-color btn-rounded float-left">
                    <span class="img">Image</span>
                    <input type="file">
                </div>
            </div>


            <div class="post">
                <label for="post_user" class="form-label">Your post</label>
                <textarea type="text" name="post_user"
                 class="form-control" name="post_user"><?php echo $selected_post; ?></textarea>
            </div>

            <div class="text-center py-2 pt-4">
                <button type="submit" class="btn btn-success">edit</button>
            </div>

        </form>
    </div>

    </div>
    </div>

    </section>



</body>

</html>