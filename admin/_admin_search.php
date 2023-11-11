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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>LawTop</title>
</head>
<style>

</style>

<body>
<?php include 'admin_nav.php' ?>
    <div class="m-auto max-width-1 m-y-2"></div>
    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="home-articles m-auto max-width-1 font2">
        <h2>Search Result for  <?php echo $_GET['query'] ?></h2>
        <!-- <div class="year-box adjust-year">
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
        <!-- </div> --> 

        <?php
    include '_dbconnect.php';
    ?>
    <?php
    $noresults=true;
    $query = $_GET["query"];
    $sql = "SELECT * FROM law_post WHERE MATCH (title, keywords,Case_type,court) against('$query')";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    $noresults=false;
        $POST_id_show = $row['post_id'];
        // echo $row['title'];


        echo ' <div class="home-article more-post ">
            <div class="home-article-img font1">
            <img src="img/'.$row['image'].'"
            alt="article">
            </div>
            <div class="home-article-content font1">
                <a id="' . $POST_id_show . '" href="blogpost.php?post_id_pass=' . $POST_id_show . '">
                    <h3>' . $row['title'] . '</h3>
                </a>
                <div><span>Author Name: lawtop community</div>
                court: ' . $row['court'] . ' | ' . $row['Case_type'] . '</span>
                <div><span>date: ' . $row['judgement_date'] . ' post id= '. $POST_id_show.' </span></div>
            </div>
        </div>
        </div>
        <div class="m-auto max-width-1 m-y-2"></div>
        </div>
        ';
        
    }
    if ($noresults){
        echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No Results Found</p>
                    <p class="lead"> Suggestions: <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords. </li></ul>
                    </p>
                </div>
             </div>';
    }        


    ?>



        <!-- <div class="home-article">
            <div class="home-article-img font1">
                <img src="img/vecteezy_man-writes-a-product-order-for-a-customer-at-home-office_1241399.jpg"
                    alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="/blogpost.html">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>
                </a>
                <div><span>Author Name | court</span></div>
                <div><span>date</span></div>
            </div>
        </div>
        <div class="m-auto max-width-1 m-y-2"></div> -->





        <div class="footer max-width-2 m-auto">

            <p>contact: 9949911971 whatsapps</p>

        </div>

</body>

</html>