<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>

<style>
body {
    font-family: Arial;
}
input {
    margin: 5px;
}
</style>
</head>

<body>

<h2>Registration Form</h2>

<form method="post">

Name: <input type="text" name="name"><br>

Password: <input type="password" name="password"><br>

Confirm Password: <input type="password" name="cpassword"><br>

Mobile No: <input type="text" name="mobile"><br>

Email: <input type="text" name="email"><br><br>

<input type="submit" name="submit" value="Submit">

</form>

<?php
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    if($name == "") {
        echo "Name must be filled<br>";
    }
    else if(strlen($password) < 6) {
        echo "Password must be at least 6 characters<br>";
    }
    else if(!preg_match('/[a-z]/', $password)) {
        echo "Need small letter in password<br>";
    }
    else if(!preg_match('/[A-Z]/', $password)) {
        echo "Need capital letter in password<br>";
    }
    else if(!preg_match('/[0-9]/', $password)) {
        echo "Need number in password<br>";
    }
    else if(!preg_match('/[!@#$%^&*()]/', $password)) {
        echo "Need special character in password<br>";
    }
    else if($password != $cpassword) {
        echo "Passwords do not match<br>";
    }
    else if(strlen($mobile) != 10 || !is_numeric($mobile)) {
        echo "Enter valid 10 digit mobile number<br>";
    }
    else if(substr($email, -10) != "@gmail.com") {
        echo "Email must end with @gmail.com<br>";
    }
    else {
        echo "<b>Form submitted successfully!</b>";
    }
}
?>

</body>
</html>
