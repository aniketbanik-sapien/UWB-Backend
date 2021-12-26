<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write blog</title>
</head>
<body>
    <h1>WRITE BLOG</h1>
    <form action="submit-blog.php" method="post">
        Username: <input type="text" value="<?php echo $_SESSION['username'] ?>" name='username'><br><br>
        Email Id: <input type="text" value="<?php echo $_SESSION['uem'] ?>" name='uem'><br><br>
        Title: <input type="text" name='title'><br><br>
        Description: <br><textarea name="desc" rows="10" cols="20"></textarea><br>
        <input type='submit' value='submitblog' name='submitblog'>
    </form>
</body>
</html>