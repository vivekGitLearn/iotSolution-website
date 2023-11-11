<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style_foot.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lib.css">

    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="https://kit.fontawesome.com/93df7150d5.js" crossorigin="anonymous"></script>

    <style>
    /* .left-side {
            height: 400px;
            width: 20%;
            border: solid 1px black;

        }

        .right-side {
            height: 400px;
            width: 300;
            border: solid 1px black;

        } */



    .flex-container {
        display: flex;
        /* background-color: blue; */

    }

    .flex-container>aside {
        background-color: blue;
        margin: auto;
        /* background-color: blue; */
    }

    .left_menubar {
        height: 100%;
        width: 100%;
        background-color: #E7E9EB;
        overflow-y: scroll;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .topnav {
        position: relative;
        z-index: 2;
        font-size: 17px;
        background-color: #282A35;
        color: #f1f1f1;
        width: 100%;
        padding: 0;
        letter-spacing: 1px;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .Lt3-card,
    .Lt3-card-2 {
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .topnav a {
        padding: 10px 15px 9px 15px !important;
        text-decoration: none;
    }

    .topnav .Lt3-bar a:hover,
    .topnav .Lt3-bar a:focus {
        background-color: #000000 !important;
        color: #ffffff !important;
        text-decoration: none;
    }

    .topnav .Lt3-bar a.active {
        background-color: #04AA6D !important;
        color: #ffffff;
    }

    .topnav a.topnav-icons {
        background-color: #282A35;
    }

    a.topnav-icons {
        width: 52px !important;
        font-size: 20px !important;
        padding-top: 11px !important;
        padding-bottom: 13px !important;
    }

    a.topnav-icons.fa-home {
        font-size: 22px !important
    }

    a.topnav-icons.fa-menu {
        font-size: 22px !important
    }

    a.topnav-localicons {
        font-size: 20px !important;
        padding-top: 6px !important;
        padding-bottom: 12px !important;
    }

    .Lt3-bar .Lt3-button {
        white-space: normal
    }

    .Lt3-bar .Lt3-bar-item {
        padding: 8px 16px;
        float: left;
        width: auto;
        border: none;
        display: block;
        outline: 0
    }

    .Lt3-left {
        float: left !important
    }

    .Lt3-right {
        float: right !important
    }

    .Lt3-sidebar {
        height: 100%;
        width: 200px;
        background-color: #fff;
        position: fixed !important;
        z-index: 1;
        overflow: auto;
    }

    #leftmenuinner {
        position: fixed;
        top: 25px;
        padding-top: 118px;
        padding-bottom: 0;
        height: 100%;
        width: 220px;
        background-color: transparent;
    }


    #leftmenuinnerinner {
        height: 100%;
        width: 100%;
        background-color: #E7E9EB;
        overflow-y: scroll;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .Lt3-sidebar {
        height: 100%;
        width: 200px;
        background-color: #fff;
        position: fixed !important;
        z-index: 1;
        overflow: auto;
    }


    .w3-container:after,
    .w3-container:before,
    .w3-panel:after,
    .w3-panel:before,
    .w3-row:after,
    .w3-row:before,
    .w3-row-padding:after,
    .w3-row-padding:before,
    .w3-cell-row:before,
    .w3-cell-row:after,
    .w3-clear:after,
    .w3-clear:before,
    .w3-bar:before,
    .w3-bar:after {
        content: "";
        display: table;
        clear: both;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .w3-container:after,
    .w3-container:before,
    .w3-panel:after,
    .w3-panel:before,
    .w3-row:after,
    .w3-row:before,
    .w3-row-padding:after,
    .w3-row-padding:before,
    .w3-cell-row:before,
    .w3-cell-row:after,
    .w3-clear:after,
    .w3-clear:before,
    .w3-bar:before,
    .w3-bar:after {
        content: "";
        display: table;
        clear: both;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .w3-clear:after,
    .w3-clear:before,
    .w3-bar:before,
    .w3-bar:after {
        content: "";
        display: table;
        clear: both;
    }

    .Lt3-sidebar.Lt3-collapse {
        display: block !important;
    }

    #sidenav h2 {
        font-size: 21px;
        padding-left: 16px;
        margin: -4px 0 4px 0;
        width: 204px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Segoe UI", Arial, sans-serif;
        font-weight: 400;
        margin: 10px 0;
    }

    a {
        text-decoration: none;
    }

    .w3-main {
        transition: margin-left 0s;
    }


    .w3-light-grey,
    .w3-hover-light-grey:hover,
    .w3-light-gray,
    .w3-hover-light-gray:hover {
        color: #000 !important;
        background-color: #f1f1f1 !important;
    }

    .w3-white,
    .w3-hover-white:hover {
        color: #000 !important;
        background-color: #fff !important;
    }

    .pdfbox {
        height: fit-content;
    }
    </style>

    <title>library</title>
</head>

<body>
    <?php include 'admin_nav.php' ?>
    <?php include '_dbconnect.php' ?>

    <div class='Lt3-card-2 topnav notranslate' id='topnav'>
        <div style="overflow:auto;">
            <div class="Lt3-bar Lt3-left" style="width:100%;overflow:hidden;height:44px">
                <a href='javascript:void(0);'
                    class='topnav-icons fa fa-menu Lt3-hide-large Lt3-left Lt3-bar-item Lt3-button'
                    onclick='open_menu()' title='Menu'></a>
                <a href='/default.asp' class='topnav-icons fa fa-home Lt3-left Lt3-bar-item Lt3-button'
                    title='Home'></a>

                <?php
                $sql = "SELECT * FROM `library_subject`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $subject_id = $row['subject_code'];
                    $name = $row['subject'];
                    echo '
                <a class="Lt3-bar-item Lt3-button" id="' . $subject_id . '" href="library.php?sub_id_pass=' . $subject_id . '&name_sub=' . $name . '">' . $name . '</a>';
                }
                ?>

            </div>
        </div>
    </div>
    </div>


    <h2>Latest Books</h2>
    <div class="lib-articles m-auto max-width-1 font2">
        <?php
        $sql = "SELECT * FROM `library_subject`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $POST_id_show = $row['subject_code'];
            $subject_id = $row['subject_code'];
            $name = $row['subject'];
            echo '<a href="_admin_library.php?sub_id_pass=' . $subject_id . '&name_sub=' . $name . '&location_pdf=' .'document.pdf'. '"><div class="lib-article">
            <div class="lib-article-img font1">
            <img src="lib_image/' . $row['image'] . '"
            alt="article">
            </div>
            <div class="lib-article-content font1">
            
               
                <div><span>date: ' . $row['subject'] . ' </span></div>
            </div>
        </div></a>
        <div class="m-auto max-width-1 m-y-2"></div>';
        }
        ?>
    </div>
    </div>
    <div>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="/default.asp">❮ Home</a>
        <a class="w3-right w3-btn" href="html_intro.asp">Next ❯</a>
    </div>

    </div>


    </div>
    </div>
    </div>

</body>

</html>