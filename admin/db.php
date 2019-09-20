<?php

$localhost="localhost";
$user="root";
$password="";
$db="sic";

$conn=mysqli_connect($localhost,$user,$password,$db);

if(!$conn)
{
    echo "you are not conencted with database";
    
}
//
//else{
//    echo "you are connected";
//    
//}
//

?>