<?php
    include 'connect.php';
    if(isset($_POST['name']))
        $name=$_POST['name'];
    if(isset($_POST['number']))
        $number=$_POST['number'];
    if(isset($_POST['email']))
        $email=$_POST['email'];
    if(isset($_POST['message']))
        $message=$_POST['message'];
    $user_info="INSERT INTO feedback(name, number, email, message) VALUES ('$name','$number','$email','$message')";
    $result=mysql_query($user_info);
    if($result===false)
        echo "error: " .mysql_error();
    else
        header('Location:./index.html');
?>