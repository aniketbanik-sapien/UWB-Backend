<?php
    session_start();
    //db
    $conn = mysqli_connect("localhost","root","","uwb");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['cwlogin'])){
        $cwun = $_POST['cwun'];
        $cwpasw = $_POST['cwpasw'];
        $query = mysqli_query($conn,"select * from `admin` where `aname` = '$cwun' and `apw` = '$cwpasw'");
        $sql = mysqli_fetch_array($query);
        if($sql){
            $cwun = $sql['cwun'];
            $_SESSION['cwun'] = $_POST['cwun'];
            header('Location:content-writer-dashboard.php');
        }
        else{
            session_unset();
            session_destroy();
            echo "
                <script language='javascript'>
                alert('You entered incorrect login credentials..Login Again');
                window.location.href = 'content-writer-login.html';
                </script> ";
        }
    }
?>