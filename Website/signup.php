<?php
    include 'connect.php';
    if(isset($_POST['name']))
        $name=$_POST['name'];
    if(isset($_POST['username']))
        $username=$_POST['username'];
    if(isset($_POST['password']))
        $password=$_POST['password'];
    if(isset($_POST['mobileno']))
        $mobileno=$_POST['mobileno'];
    if(isset($_POST['emailid']))
        $emailid=$_POST['emailid'];
    if(isset($_POST['address']))
        $address=$_POST['address'];
    if(isset($_POST['pincode']))
        $pincode=$_POST['pincode'];
    $user_info="INSERT INTO users(username, password, name, mobileno, email, address, pincode) VALUES ('$username','$password','$name','$mobileno','$emailid','$address','$pincode')";
    $result=mysql_query($user_info);
    if($result===false)
        echo "error: " .mysql_error();
    else
        header('Location:./index.html');
?>