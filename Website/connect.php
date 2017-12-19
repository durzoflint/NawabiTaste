<?php 
$connect=mysql_connect('localhost','nawabita_website','P33qxS46wc','nawabita_website');
if(!$connect)
{
    echo "Error while connecting to Database.".mysql_errno() ;
}
$db=mysql_select_db('nawabita_website',$connect);
?>