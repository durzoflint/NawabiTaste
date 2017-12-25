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
    //Fetch all usernames and check if $username already exists
    $query="SELECT * FROM users";
    $result=mysql_query($query,$connect);
    $flag = true;
    while($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        if($row['username'] === $username)
        {
            $flag = false;
            break;
        }
    }
    if($flag==false)
    {
        echo "Username Already Exists.<br><br>You will be redirected to Sign Up page again in 5 seconds. Please change you username.";
        sleep(5);
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
    }
    else
    {
        $user_info="INSERT INTO users(username, password, name, mobileno, email, address, pincode) VALUES ('$username','$password','$name','$mobileno','$emailid','$address','$pincode')";
        $result=mysql_query($user_info);
        if($result===false)
            echo "error: " .mysql_error();
        else
            header('Location:./index.html');
    }
?>