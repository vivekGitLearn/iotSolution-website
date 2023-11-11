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
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>LawTop</title>
</head>
<style>

</style>

<body>
<?php include 'admin_nav.php' ?>
<?php include '_dbconnect.php'?>
    <div class="max-width-1 m-auto">
        <hr>
    </div>


    <div class="post-img">
        <img src="img/vecteezy_the-beautiful-red-dragonfly-perched-on-the-leaves-for-the_6504390_341.jpeg" alt=""
            srcset="">
    </div>
    <?php
$id=$_GET['post_id_pass'];
   $sql="SELECT * FROM `law_post` WHERE post_id=$id";
    $result =mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $title=$row['title'];
        $court=$row['court'];
        $case_type=$row['Case_type'];
        $jud_date=$row['judgement_date'];
        $selected_post=$row['post'];
        $month=$row['month'];
    }

   echo '
   <div class="blog-post-content max-width-1 m-auto m-y-2">
        <div class="content-left">
            <h1 class="font1">'.$title.'</h1>

            <div class="blogpost-meta">
                <div class="author-info">
                    <div>By vivek kumar</div>
                    <div>'.$jud_date.' | '.$month.'</div>
                    <div>'.$court.' | '.$case_type.'  </div>
                </div>

                <div class="social">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M20 5.34c-.67.41-1.4.7-2.18.87a3.45 3.45 0 0 0-5.02-.1 3.49 3.49 0 0 0-1.02 2.47c0 .28.03.54.07.8a9.91 9.91 0 0 1-7.17-3.66 3.9 3.9 0 0 0-.5 1.74 3.6 3.6 0 0 0 1.56 2.92 3.36 3.36 0 0 1-1.55-.44V10c0 1.67 1.2 3.08 2.8 3.42-.3.06-.6.1-.94.12l-.62-.06a3.5 3.5 0 0 0 3.24 2.43 7.34 7.34 0 0 1-4.36 1.49l-.81-.05a9.96 9.96 0 0 0 5.36 1.56c6.4 0 9.91-5.32 9.9-9.9v-.5c.69-.49 1.28-1.1 1.74-1.81-.63.3-1.3.48-2 .56A3.33 3.33 0 0 0 20 5.33"
                            fill="#A8A8A8"></path>
                    </svg>
                    <span class="cj hi dx hj"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.75 12.04c0-4.3-3.47-7.79-7.75-7.79a7.77 7.77 0 0 0-5.9 12.84 7.77 7.77 0 0 0 4.69 2.63v-5.49h-1.9v-2.2h1.9v-1.62c0-1.88 1.14-2.9 2.8-2.9.8 0 1.49.06 1.69.08v1.97h-1.15c-.91 0-1.1.43-1.1 1.07v1.4h2.17l-.28 2.2h-1.88v5.52a7.77 7.77 0 0 0 6.7-7.71"
                                fill="#A8A8A8"></path>
                        </svg></span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M19.75 5.39v13.22a1.14 1.14 0 0 1-1.14 1.14H5.39a1.14 1.14 0 0 1-1.14-1.14V5.39a1.14 1.14 0 0 1 1.14-1.14h13.22a1.14 1.14 0 0 1 1.14 1.14zM8.81 10.18H6.53v7.3H8.8v-7.3zM9 7.67a1.31 1.31 0 0 0-1.3-1.32h-.04a1.32 1.32 0 0 0 0 2.64A1.31 1.31 0 0 0 9 7.71v-.04zm8.46 5.37c0-2.2-1.4-3.05-2.78-3.05a2.6 2.6 0 0 0-2.3 1.18h-.07v-1h-2.14v7.3h2.28V13.6a1.51 1.51 0 0 1 1.36-1.63h.09c.72 0 1.26.45 1.26 1.6v3.91h2.28l.02-4.43z"
                            fill="#A8A8A8"></path>
                    </svg>
                </div>
            </div>

            <p class="font1">
              '.$selected_post.'
            </p>

        </div>
    </div>
    <div class="max-width-1 m-auto">
        <hr>
    </div>';
?>
    <div class="home-articles m-auto max-width-1 font2">
        <h2>People who read this also read </h2>
       

            
        <?php $sql="SELECT * FROM `law_post` WHERE court='$court' or Case_type='$case_type'";
        $result=mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result))

        {

            $POST_id_show=$row['post_id'];
            // echo $row['title'];


          echo ' <div class="row">
           <div class="home-article more-post">
            <div class="home-article-img font1">
            <img src="img/'.$row['image'].'"
            alt="article">
            </div>
            <div class="home-article-content font1">
                <a id="'.$POST_id_show.'" href="_admin_blogpost.php?post_id_pass='.$POST_id_show.'">
                    <h3>'.$row['title'].'</h3>
                </a>
                <div><span>Author Name: lawtop community</div>
                court: '.$row['court'].' | '.$row['Case_type'].'</span>
                <div><span>date: '.$row['judgement_date'].' </span></div>
            </div>
        </div>
        </div>
        <div class="m-auto max-width-1 m-y-2"></div>';

        }
        
        ?>


    <!-- <div class="blog-post-content max-width-1 m-auto m-y-2">
        <div class="content-left">
            <h1 class="font1">law related blog</h1>

            <div class="blogpost-meta">
                <div class="author-info">
                    <div>By vivek kumar</div>
                    <div>20 august high court</div>
                </div>

                <div class="social">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M20 5.34c-.67.41-1.4.7-2.18.87a3.45 3.45 0 0 0-5.02-.1 3.49 3.49 0 0 0-1.02 2.47c0 .28.03.54.07.8a9.91 9.91 0 0 1-7.17-3.66 3.9 3.9 0 0 0-.5 1.74 3.6 3.6 0 0 0 1.56 2.92 3.36 3.36 0 0 1-1.55-.44V10c0 1.67 1.2 3.08 2.8 3.42-.3.06-.6.1-.94.12l-.62-.06a3.5 3.5 0 0 0 3.24 2.43 7.34 7.34 0 0 1-4.36 1.49l-.81-.05a9.96 9.96 0 0 0 5.36 1.56c6.4 0 9.91-5.32 9.9-9.9v-.5c.69-.49 1.28-1.1 1.74-1.81-.63.3-1.3.48-2 .56A3.33 3.33 0 0 0 20 5.33"
                            fill="#A8A8A8"></path>
                    </svg>
                    <span class="cj hi dx hj"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.75 12.04c0-4.3-3.47-7.79-7.75-7.79a7.77 7.77 0 0 0-5.9 12.84 7.77 7.77 0 0 0 4.69 2.63v-5.49h-1.9v-2.2h1.9v-1.62c0-1.88 1.14-2.9 2.8-2.9.8 0 1.49.06 1.69.08v1.97h-1.15c-.91 0-1.1.43-1.1 1.07v1.4h2.17l-.28 2.2h-1.88v5.52a7.77 7.77 0 0 0 6.7-7.71"
                                fill="#A8A8A8"></path>
                        </svg></span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M19.75 5.39v13.22a1.14 1.14 0 0 1-1.14 1.14H5.39a1.14 1.14 0 0 1-1.14-1.14V5.39a1.14 1.14 0 0 1 1.14-1.14h13.22a1.14 1.14 0 0 1 1.14 1.14zM8.81 10.18H6.53v7.3H8.8v-7.3zM9 7.67a1.31 1.31 0 0 0-1.3-1.32h-.04a1.32 1.32 0 0 0 0 2.64A1.31 1.31 0 0 0 9 7.71v-.04zm8.46 5.37c0-2.2-1.4-3.05-2.78-3.05a2.6 2.6 0 0 0-2.3 1.18h-.07v-1h-2.14v7.3h2.28V13.6a1.51 1.51 0 0 1 1.36-1.63h.09c.72 0 1.26.45 1.26 1.6v3.91h2.28l.02-4.43z"
                            fill="#A8A8A8"></path>
                    </svg>
                </div>
            </div>

            <p class="font1">
                India, officially the Republic of India (Hindi: Bhārat Gaṇarājya),[26] is a country in South Asia.
                It is the seventh-largest country by area, the second-most populous country, and the most populous
                democracy in the world.
                Bounded by the Indian Ocean on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the
                southeast,
                it shares land borders with Pakistan to the west;[f] China, Nepal, and Bhutan to the north;
                and Bangladesh and Myanmar to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and
                the Maldives;
                its Andaman and Nicobar Islands share a maritime border with Thailand, Myanmar and Indonesia. India is
                the fifth largest economy in the world as per
                World Bank data in 2022.[27]

                Modern humans arrived on the Indian subcontinent from Africa no later than 55,000 years ago.
                [28][29][30] Their long occupation, initially in varying forms of isolation as hunter-gatherers, has
                made the region highly diverse,
                second only to Africa in human genetic diversity.[31] Settled life emerged on the subcontinent in the
                western
                margins of the Indus river basin 9,000 years ago, evolving gradually into the Indus Valley civilisation
                of the third millennium BCE.[32] By 1200 BCE, an archaic form of Sanskrit, an Indo-European language,
                had diffused into India from the northwest,[33][34] unfolding as the language of the Rigveda, and
                recording the dawning of Hinduism in India.[35] The Dravidian languages of India were supplanted in the
                northern and western regions.[36] By 400 BCE, stratification and exclusion by caste had emerged within
                Hinduism,[37] and Buddhism and Jainism had arisen, proclaiming social orders unlinked to heredity.[38]
                Early political consolidations gave rise to the loose-knit Maurya and Gupta Empires based in the Ganges
                Basin.[39] Their collective era was suffused with wide-ranging creativity,[40] but also marked by the
                declining status of women,[41] and the incorporation of untouchability into an organised system of
                belief.[g][42] In South India, the Middle kingdoms exported Dravidian-languages scripts and religious
                cultures to the kingdoms of Southeast Asia.[43]

                In the early medieval era, Christianity, Islam, Judaism, and Zoroastrianism became established on
                India's southern and western coasts.[44] Muslim armies from Central Asia intermittently overran India's
                northern plains,[45] eventually founding the Delhi Sultanate, and drawing northern India into the
                cosmopolitan networks of medieval Islam.[46] In the 15th century, the Vijayanagara Empire created a
                long-lasting composite Hindu culture in south India.[47] In the Punjab, Sikhism emerged, rejecting
                institutionalised religion.[48] The Mughal Empire, in 1526, ushered in two centuries of relative
                peace,[49] leaving a legacy of luminous architecture.[h][50] Gradually expanding rule of the British
                East India Company followed, turning India into a colonial economy, but also consolidating its
                sovereignty.[51] British Crown rule began in 1858. The rights promised to Indians were granted
                slowly,[52][53] but technological changes were introduced, and ideas of education, modernity and the
                public life took root.[54] A pioneering and influential nationalist movement emerged, which was noted
                for nonviolent resistance and became the major factor in ending British rule.[55][56] In 1947 the
                British Indian Empire was partitioned into two independent dominions,[57][58][59][60] a Hindu-majority
                Dominion of India and a Muslim-majority Dominion of Pakistan, amid large-scale loss of life and an
                unprecedented migration.[61]
            </p>

        </div>
    </div>
    <div class="max-width-1 m-auto">
        <hr>
    </div> -->

    <!-- <div class="home-articles m-auto max-width-1 font2">
        <h2>People who read this also read </h2>
        <div class="row">
            <div class="home-article more-post">
                <div class="home-article-img font1">
                    <img src="img/vecteezy_man-writes-a-product-order-for-a-customer-at-home-office_1241399.jpg"
                        alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="blogpost.html">
                        <h3>supreme court order to stop freebees</h3>
                    </a>
                    <div><span>Author Name | court</span></div>
                    <span>date</span>
                </div>
            </div>
            <div class="home-article more-post">
                <div class="home-article-img font1">
                    <img src="img/vecteezy_man-writes-a-product-order-for-a-customer-at-home-office_1241399.jpg"
                        alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="blogpost.html">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>
                    </a>
                    <span>Author Name | court</span>
                    <span>date</span>
                </div>
            </div>
            <div class="m-auto max-width-1 m-y-2"></div>


            <div class="home-article more-post">
                <div class="home-article-img font1">
                    <img src="img/vecteezy_man-writes-a-product-order-for-a-customer-at-home-office_1241399.jpg"
                        alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="blogpost.html">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>
                    </a>
                    <span>Author Name | court</span>
                    <span>date</span>
                </div>
            </div>
        </div>
        <div class="m-auto max-width-1 m-y-2"></div>
 -->




        <div class="footer max-width-2 m-auto">

            <p>contact: 9949911971 whatsapps</p>

        </div>

</body>

</html>