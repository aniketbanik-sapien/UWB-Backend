<?php
    session_start();
    $reqid = $_GET['reqid'];
    $conn = mysqli_connect("localhost","root","","uwb");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $query = "select * from `blog-req` where `reqid` = '$reqid'";
    $sql = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($sql);
    if($row)
    {
        $username = $row['Username'];
        $title = $row['Title'];
        $desc = $row['Description'];
    } 
    $status='';
    $comment='';
    if(isset($_POST['approved']))
    {
        $status = 'Approved';
        $comment = 'Good';
        $query="UPDATE `blog-req` set `Status`='$status', `comment`='$comment' where `reqid`='$reqid'";
        $sql = mysqli_query($conn,$query);
        header('Location: content-writer-dashboard.php');
    }
    if(isset($_POST['rejected']))
    {
        $status = 'Rejected';
        $comment = 'Bad';
        $query="UPDATE `blog-req` set `Status`='$status', `comment`='$comment' where `reqid`='$reqid'";
        $sql = mysqli_query($conn,$query);
        header('Location: content-writer-dashboard.php');
    }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view blog</title>
</head>
<body>
    <form action="" method='post'>
    <p><?php echo $username ?></p><br>
    <p><?php echo $title ?></p><br>
    <p><?php echo  $desc?></p><br>
    <br>
    <br>
    <button type="submit" name="approved" >Approved</button>
	<button type="submit" name="rejected" >Reject</button>
    </form>
    </body>
</html>
