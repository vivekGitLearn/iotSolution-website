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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
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

        .ref_overview,
        .tut_overview {
            display: none;
            margin-left: 10px;
            background-color: #ddd;
            line-height: 1.8em;
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
    </style>
    <title>library</title>
</head>

<body>
    <?php include 'admin_nav.php' ?>
    <?php include '_dbconnect.php' ?>
    <div class='Lt3-card-2 topnav notranslate' id='topnav'>
        <div style="overflow:auto;">
            <div class="Lt3-bar Lt3-left" style="width:100%;overflow:hidden;height:44px">
                <a class="Lt3-bar-item Lt3-button" href='_add_subject.php' style="padding-left:18px!important;padding-right:18px!important;">add subjects</a>

                <?php
                $sql = "SELECT * FROM `library_subject`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $subject_id = $row['subject_code'];
                    $name = $row['subject'];
                    echo '
                <a class="Lt3-bar-item Lt3-button" id="' . $subject_id . '" href="_admin_library.php?sub_id_pass=' . $subject_id . '&name_sub=' . $name . '&location_pdf=document.pdf' . $name . '">' . $name . '</a>';
                }
                ?>

            </div>
        </div>
    </div>
    </div>
    <?php
    $location = $_GET['location_pdf'];
    $sub_id = $_GET['sub_id_pass'];
    $sub_name = $_GET['name_sub'];
    $sql = "SELECT * FROM `topic_list` WHERE subject_code=$sub_id";
    $result = mysqli_query($conn, $sql);

    echo '
    <div class="Lt3-sidebar Lt3-collapse" id="sidenav" style="top: 118px; padding-top: 150px; display: none;">
        <div id="leftmenuinner" style="padding-top: 118px;">
            <div id="leftmenuinnerinner" style="overflow-y: scroll;">

              
                
                <h2 class="left"><span class="left_h2">' . $sub_name . '</span></h2>';
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<a target="_top" id="' . $row['topic_ID'] . '"  href="library.php?sub_id_pass=' . $row['topic_ID'] . '&sub_id_pass=' . $sub_id . '&name_sub=' . $sub_name . '&location_pdf=' . $row['location'] . '" class="active">' . $row['topic_name'] . '</a><br>';
    }
    ?>
    <a target="_top" href="html_intro.asp">HTML Introduction</a>
    <br>

    <a target="_top" href="html_editors.asp"><?php echo $location;?></a>
    <a target="_top" href="html_basic.asp">HTML Basic</a>
    <br>
    <a target="_top" href="_add_topic.php?subject_id=<?php echo $sub_id;?>">add topic</a>
"
    
    <br><br>
    </div>
    </div>
    </div>
    <div class="w3-main w3-light-grey" id="belowtopnav" style="margin-left: 220px; padding-top: 0px;">
        <div class="w3-row w3-white">
            <div class="w3-col l10 m12" id="main">
                <div id="mainLeaderboard" style="overflow:hidden;">
                    <!-- MainLeaderboard-->

                    <div id="div-gpt-ad-1422003450156-2" data-google-query-id="CN6q3Oz3xvoCFTq_SwUdhTEDoA">

                        <div id="google_ads_iframe_/16833175/MainLeaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/16833175/MainLeaderboard_0" name="google_ads_iframe_/16833175/MainLeaderboard_0" title="3rd party ad content" width="970" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="1"></iframe></div>
                    </div>

                </div>
                <h1>HTML<span class="color_h1"> Tutorial</span></h1>
                <div class="w3-clear nextprev">
                    <a class="w3-left w3-btn" href="/default.asp">❮ Home</a>
                    <a class="w3-right w3-btn" href="html_intro.asp">Next ❯</a>
                </div>

                <div class="w3-panel w3-info intro">
                    <p>HTML is the standard markup language for Web pages.</p>
                    <p>With HTML you can create your own Website.</p>
                    <p>HTML is easy to learn - You will enjoy it!</p>
                </div>
                <hr>

                <br>
                <div class="w3-clear nextprev">
                    <a class="w3-left w3-btn" href="/default.asp">❮ Home</a>
                    <a class="w3-right w3-btn" href="html_intro.asp">Next ❯</a>
                </div>

            </div>


        </div>

</body>

</html>