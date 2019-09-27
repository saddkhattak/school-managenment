<?php
session_start();
include("db.php");

if(isset($_GET['uid']))
{
    $userid=$_GET['uid'];
    
    

// START OF ADMIN delation from accounts page this is deletation by admin from accounts page//
$delete="DELETE FROM `accounts` where `uid`='$userid'";
    
$query=mysqli_query($conn,$delete);
    header("location:accounts.php");

}

//end of deletion of admin from accounts page //




?>