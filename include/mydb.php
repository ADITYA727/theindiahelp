<?php
$con =mysqli_connect('localhost','root','','free_to_help');

if($con==false)
{
    echo'Database not connected';
}