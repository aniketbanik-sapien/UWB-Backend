<?php
    if(isset($_POST['submitblog']))
    {
    $conn = mysqli_connect("localhost","root","","uwb");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    session_start();
    $username = $_POST['username'];
    $uem = $_POST['uem'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $status = 'Pending';
    $comment = '';
    $reqid='';
    $query = "insert into `blog-req` values ('$username','$uem','$title','$desc','$status','$comment',null)";
    $row = mysqli_query($conn,$query);
    $sql = "insert into `uwb`.`requests` SELECT `Email-Id`,`reqid` FROM `uwb`.`blog-req` where `Email-Id` = '$uem'";
    $run = mysqli_query($conn,$sql);
    // $qu = "select `reqid` from `blog-req` where `Email-Id` = '$uem'";
    // $ru = mysqli_query($conn,$qu);
    // $entry = mysqli_fetch_assoc($conn,$ru);
    // if($entry)
    // {
    //     $_SESSION['reqid'] = $entry['reqid'];
    // }
    //submit blog
    // blog website
    // hello
    header('Location: user-dashboard.php');
}
?>