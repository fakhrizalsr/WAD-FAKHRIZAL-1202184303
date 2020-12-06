<?php
header("Refresh:5;url=login.php");

session_start();

if(isset($_SESSION['loginTime'])){
    unset($_SESSION['loginTimr']);
    echo"Seisson Unset";
}else{
    echo"Logout Success";
}
