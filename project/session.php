<?php
session_start();

if(!isset($_SESSION['email'])){
    header('location: admin_login.php');
}

?>