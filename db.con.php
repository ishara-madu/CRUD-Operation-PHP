<?php
$conn = mysqli_connect('localhost','root','mysql','crud');
if(!$conn){
    die('<p style="color:white">Connection Failed</p>');
}else{
    echo('<p style="color:white">Successfully Connected</p>');
}