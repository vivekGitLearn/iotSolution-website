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
    $id=$_POST["post_id"];
  
  
  
    // echo $id."\n";
    // echo $title."\n";
    // echo $court."\n";
    // echo $case_type."\n";
    // echo $post_user."\n";
    // echo $month."\n";
    // echo $judgement_date;
  





    $sql="UPDATE `law_post` SET `title` = '$title', `court` = '$court', `Case_type` = '$case_type', `month` = '$month', `judgement_date` = '$judgement_date', `post` = '$post_user', `keywords` = '$keyword' WHERE `law_post`.`post_id` =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "successful updated";
        header("location: /lawtop/admin/index.php");
    }
    else{echo"record not updated<br>error...".mysqli_error($conn);}
 }
?>