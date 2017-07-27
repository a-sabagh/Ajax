<?php
$username = $_POST['username'];
$invalid_username = array("admin" , "gnu" , "linux" , "gnutec");
if(in_array($username , $invalid_username)){
    echo " This Usernaname is already Token";
}else{
    echo " Username is OK";
}

