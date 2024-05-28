<?php
$conn = mysqli_connect('localhost','root','mysql','crud');
if(!$conn){
    die('Connection Failed'.mysqli_connect_error());
}