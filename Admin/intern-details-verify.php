<?php
    session_start();
    if(isset($_POST['submit'])){
        include 'conn.php';
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
    }
        $email = $_POST['email'];
        $query = "select * from `details` where `Email-Id` = '$email'";
        $sql= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($sql);
        if($row){
            echo "
                <script language='javascript'>
                    alert('Email id already registered');
                    window.location.href = 'intern-details-entry.php';
                </script> ";
        }
        $phone = $_POST['phone'];
        $query = "select * from `details` where `Phone No.` = '$phone'";
        $sql= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($sql);
        if($row){
            echo "
                    <script language='javascript'>
                        alert('Mobile number already registered');
                        window.location.href = 'intern-details-entry.php';
                    </script> ";
        }
        $wpno = $_POST['wpno'];
        $query = "select * from `details` where `Whatsapp No.` = '$wpno'";
        $sql= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($sql);
        if($row){
            echo "
                    <script language='javascript'>
                        alert('Whatsapp number already registered');
                        window.location.href = 'intern-details-entry.php';
                    </script> ";
        }
        $aadhar = $_POST['aadhar'];
        $query = "select * from `details` where `Aadhar Card` = '$aadhar'";
        $sql = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($sql);
        if($row){
                echo "
                    <script language='javascript'>
                        alert('Aadhar number already registered');
                        window.location.href = 'intern-details-entry.php';
                    </script> ";
        }
        $cerid = $_POST['cerid'];
        $query = "select * from `details` where `id` = '$cerid'";
        $sql = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($sql);
        if($row){
                    echo "
                            <script language='javascript'>
                                alert('Please enter an unique certificate id...');
                                window.location.href = 'intern-details-entry.php';
                            </script> ";
        }
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $qualification = $_POST['qualification'];
        $dept = $_POST['dept'];
        $pos = $_POST['pos'];
        $city = $_POST['city'];
        $joindate = $_POST['joindate'];
        $tenure = $_POST['tenure'];
        //$docu = $_POST['docu'];
        //$_SESSION['srno'] = 3;
        //$srno = $_SESSION['srno'] + 1;
        $query = "insert into details values('5','$name','$email','$phone','$wpno','$dob','$qualification','$aadhar','$dept','$pos','$city','$joindate','$tenure','No','$cerid')";
        $sql = mysqli_query($conn,$query);
        //$_SESSION['srno'] = $srno;
        echo "
                    <script language='javascript'>
                        alert('Intern data successfully entered...');
                        window.location.href = 'intern-details-entry.php';
                    </script> ";
?>