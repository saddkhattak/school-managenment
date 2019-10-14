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

if(isset($_GET['class-id']))
{
    
    $classid=$_GET['class-id'];
    
    
$delete="DELETE FROM `class` where `class_id`='$classid'";
    
$query=mysqli_query($conn,$delete);
    header("location:class_record.php");

}

//end of deletion of admin from accounts page //


if(isset($_GET['subject-id']))
{
    
    $subjectid=$_GET['subject-id'];
    
    
$delete="DELETE FROM `subject` where `subject_id`='$subjectid'";
    
$query=mysqli_query($conn,$delete);
    header("location:subject_record.php");

}

//end of deletion of admin from accounts page //


if(isset($_GET['class-subject-id']))
{
    
    $subjectclassid=$_GET['class-subject-id'];
    
    
$delete="DELETE FROM `class_subject` where `class_subject_id`='$subjectclassid'";
    
$query=mysqli_query($conn,$delete);
    header("location:class_subject_record.php");

}

//end of deletion of admin from accounts page //


?>