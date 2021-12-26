<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","uwb");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['ulogin'])){
        $uem = $_POST['uem'];
        $upasw = $_POST['upasw'];
        $query = mysqli_query($conn,"select * from `usermain` where `Email-Id` = '$uem' and `Password` = '$upasw'");
        $sql = mysqli_fetch_array($query);
        if($sql){
            $username = $sql['Username'];
            $_SESSION['username'] = $username;
            $_SESSION['uem'] = $_POST['uem'];
            header('Location:user-dashboard.php');
        }
        else{
            session_unset();
            session_destroy();
            echo "
                <script language='javascript'>
                alert('You entered incorrect login credentials..Login Again');
                window.location.href = 'user-login.html';
                </script> ";
        }
    }
?>