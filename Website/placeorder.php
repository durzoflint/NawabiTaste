<?php
    include 'connect.php';
    if(isset($_POST['name']))
        $name=$_POST['name'];
    if(isset($_POST['mobileno']))
        $mobileno=$_POST['mobileno'];
    if(isset($_POST['emailid']))
        $emailid=$_POST['emailid'];
    if(isset($_POST['items']))
        $pincode=$_POST['items'];
    $user_info="INSERT INTO orders(name, email, number, items) VALUES ('$name','$emailid','$mobileno','$items')";
    $result=mysql_query($user_info);
    if($result===false)
        echo "error: " .mysql_error();
    else;
        //header('Location:./index.html');
?>