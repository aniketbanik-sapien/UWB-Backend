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
    <title>content dashboard</title>
</head>
<body>
    <br><br><br><br>
    <div class="writenblog">
        <a href="content-write-blog.php">Write Blog</a>
        <a href="content-dashboard-logout.php">Logout</a>
        <a href="content-previous-blogs.php">Approved/Rejected blogs</a>
    </div>
    <br>
    <h1>content DASHBOARD</h1>
    <?php
        echo "Hello  " . $_SESSION['cwun'];
    ?>
    <h1>all BLOGS</h1>
    <center>
    <table border="1" cellspacing="10">
        <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Status</th>
            <th>Blog Link</th>
        </tr>
    <?php
        $cwun = $_SESSION['cwun'];
        $query = "select * from `blog-req`";
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            if($row['Status'] == 'Pending')
            {
    ?>
            <tr>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Title']; ?></td>
                <td><?php echo $row['Status']; ?></td>
                <td><a href='content-view-blog.php?reqid=<?php echo $row['reqid'] ?>'>View Blog</a></td>
            </tr>
    <?php
            }
        }
    ?>
    </center>
</body>
</html>
