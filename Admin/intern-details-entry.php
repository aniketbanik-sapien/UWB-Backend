<?php
    session_start();
    if(!isset($_SESSION['aname'])){
        echo"<script language='javascript'>
                 alert('You are logged out...');
            </script>";
        header('location: admin-login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="intern-details-style.css">
    <title>Intern Data Upload Form</title>
    <script>
        //Client side validations
    </script>
</head>

<body>
    <div id="top" class="flex">
        <div><img src="logo.jpg" class="img" alt="Site Name" /></div>
        <div id="dscr">United Well-Being Fo.</div>
    </div>
    <div class="navigation">
        <a class="button" href="intern-details-logout.php">
            <img src="logo.jpg">
            <div class="logout">LOGOUT</div>
        </a>
    </div>
    <div class="containerform">
        <header>
            <h1 id='title'>Intern Data Upload Form</h1>
            <p id='description'>
                Enter the Intern Data Below
            </p>
        </header>
        <form id='idetails-form' method="post" action="intern-details-verify.php">
            <div class='form-input'>
                <label id='name-label'>Name</label>
                <input type='text' id='name' placeholder='Enter name' name='name' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='email-label'>Email</label>
                <input type='email' id='email' name="email" placeholder='Enter email' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='phone-label'>Phone Number</label>
                <input type='tel' id='phone' name="phone" placeholder='Enter Pnone Number' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='wnumber-label'>What's App Number</label>
                <input type='tel' id='wnumber' name="wpno" placeholder='Enter Whats App Number' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='dob-label'>Date of Birth</label>
                <input type='date' id='dob' placeholder='Enter Date of Birth' name='dob' class='form-input-size' required />
            </div>
            <!-- <div class='form-input'>
                <label id='qualification-label'>Highest Qualification</label>
                <input type='' id='qualification' placeholder='Enter Highest Qualification' class='form-input-size' required />
            </div> -->
            <div class='form-input'>
                <p>Enter the Highest Qualification</p>
                <select id='dropdown' name='qualification' class='form-input-size' required>
                    <option disabled selected value>Select Qualification</option>
                    <option value='HSC'>HSC (12th)</option>
                    <option value='Diploma'>Diploma</option>
                    <option value='Bachelor Degree'>Bachelor Degree</option>
                    <option value='Masters Degree'>Masters Degree</option>
                </select>
            </div>
            <div class='form-input'>
                <label id='aadhar-label'>Aadhar Number</label>
                <input type='number' id='aadhar' name="aadhar" placeholder='Enter Aadhar Number' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <p>Department</p>
                <input type='radio' name='dept' id='radio-btn' value='Health and Care' />Health & Care </br>
                <input type='radio' name='dept' id='radio-btn' value='HR' />HR </br>
                <input type='radio' name='dept' id='radio-btn' value='Marketing' />Marketing </br>
                <input type='radio' name='dept' id='radio-btn' value='PR and BD' />PR & BD </br>
            </div>
            <div class='form-input'>
                <label id='pos-label'>Position</label>
                <input type='text' id='pos' placeholder='Enter Position' name='pos' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='city-label'>City</label>
                <input type='text' id='city' placeholder='Enter City' name='city' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='doj-label'>Date Of Joining</label>
                <input type='date' id='doj' placeholder='Enter Date Of Joining' name='joindate' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='tenure-label'>Tenure (In Months)</label>
                <input type='number' id='tenure' placeholder='Enter Tenure(In Months)' name='tenure' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <label id='Cid-label'>Certificate ID</label>
                <input type='text' id='Cid' placeholder='Enter Certificate ID' name='cerid' class='form-input-size' required />
            </div>
            <div class='form-input'>
                <button type='submit' name="submit" id='submit'>Submit</button>
            </div>
        </form>
    </div>
</body>

</html>