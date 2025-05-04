<?php
$conn=new mysqli('localhost','root','','to_do_list');

if(!$conn){
    die(mysqli_error($conn));
}



?>