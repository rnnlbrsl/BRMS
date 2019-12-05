<?php
session_start();
if($_SESSION['username']){
    
}else{
    header('Location:../index.php');
}
unset($_SESSION['success']);
unset($_SESSION['update']);
unset($_SESSION['error']);
?>