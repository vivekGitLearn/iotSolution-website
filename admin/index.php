<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: /lawtop/loginform.php");
    exit;
}
?>
<?php include '_dbconnect.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <title>LawTop</title>
</head>
<style>

</style>

<body>
    
    <?php include 'admin_nav.php' ?>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto max-width-1 m-y-2"></div>

    <div class="content max-width-1 m-auto">
        <div class="content-left">
            <h1>law related blog</h1>
            <p>
                LawTOP is an organization established in November 2020 with the aim of helping law students to excel in
                the respective field. LawTOP runs a Law student group having college student and competitive exam
                student , to stay updated with the contemporary socio-legal arenas of society.

                LawTOP was initially an idea of a law student who established the organisation so that the coming
                generation of the law students would not have the hardships that she faced.

                LawTOP conducts Webinars, Competitions and Workshops regularly for the constant development of the
                students who would actually want to learn about and explore the different arenas of law. To equip the
                students with the proper knowledge and expertise around the legal subjects., LawTOP offers Certificate
                Courses to the students in collaboration with the legal professionals who are already into practice and
                have significant experience with the subjects.
            </p>
        </div>
        <div class="content-right"><img src="img/lawtop_logo.jpeg" alt="lawtop"></div>
    </div>
    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="home-articles m-auto max-width-1 font2">
        <h2>Featured article</h2>
        <div class="year-box adjust-year">
            <h3>year</h3>
            <div>
                <input type="radio" name="year" id="">2020
            </div>
            <div>
                <input type="radio" name="year" id="">2021
            </div>
            <div>
                <input type="radio" name="year" id="">2022
            </div>
            <!-- <div><input type="radio" name="" id="year">2022</div> -->
        </div>

        <!-- fetch all category -->
        <?php $sql="SELECT * FROM `law_post`";
        $result=mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result)){
            $POST_id_show=$row['post_id'];
            // echo $row['post_id'];
            // echo $row['title'];


          echo ' <div class="home-article">
            <div class="home-article-img font1">
            <img src="img/'.$row['image'].'"
            alt="article">
            </div>
            <div class="home-article-content font1">
                <a id="'.$POST_id_show.'"href="_admin_blogpost.php?post_id_pass='.$POST_id_show.'">
                    <h3>'.$row['title'].'</h3>
                </a>
                <div><span>Author Name: lawtop community</div>
                court: '.$row['court'].' | '.$row['Case_type'].'</span>
                <div><span>date: '.$row['judgement_date'].' |   id: '.$row['post_id'].' </span></div>
            </div>
            <div class="home-article-content font1">
            <a href="edit_post.php?post_id_pass='.$POST_id_show.'"><button>edit</button></a> 
            <a href="delete_post.php?post_id_pass='.$POST_id_show.'"><button>delete</button></a> 
     </div>

        </div>
        <div class="m-auto max-width-1 m-y-2"></div>';

        }
        
        ?>

        <!-- use for loop to get post -->

<!-- 
        <div class="home-article">
            <div class="home-article-img font1">
                <img src="img/vecteezy_man-writes-a-product-order-for-a-customer-at-home-office_1241399.jpg"
                    alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="users/blogpost.html">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>
                </a>
                <span>Author Name | court</span>
                <span>date</span>
            </div>
            <div class="home-article-content font1">
               <a href="http://"><button>edit</button></a> 
               <a href="http://"><button>delete</button></a> 
        </div>
        <div class="m-auto max-width-1 m-y-2"></div>
 -->

       
<!-- 

        <div class="footer max-width-2 m-auto">

            <p>contact: 9949911971 whatsapps</p>

        </div>

</body>

</html>