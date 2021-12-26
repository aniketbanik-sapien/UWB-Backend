<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","uwb");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
</head>
<body>
    <br><br><br><br>
    <div class="writenblog">
        <a href="user-write-blog.php">Write Blog</a>
        <a href="user-dashboard-logout.php">Logout</a>
    </div>
    <br>
    <h1>USER DASHBOARD</h1>
    <?php
        echo "Hello  " . $_SESSION['username'];
    ?>
    <h1>YOUR BLOGS</h1>
    <center>
    <table border="1" cellspacing="10">
        <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Comment</th>
            <th>Request Id</th>
        </tr>
    <?php
        $uem = $_SESSION['uem'];
        $query = "select * from `blog-req` where `Email-Id` = '$uem'";
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            ?>
    <tr>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Title']; ?></td>
        <td><?php echo $row['Description']; ?></td>
        <td><?php echo $row['Status']; ?></td>
        <td><?php echo $row['Comment']; ?></td>
        <td><?php echo $row['reqid']; ?></td>
    </tr>
    <?php
        }
    ?>
    </center>
</body>
</html>
