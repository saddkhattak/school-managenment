<?php
		session_start();

		if(isset($_SESSION['usertype']) && isset($_SESSION['username']))
		{
				$user_name=$_SESSION['username'];
				$user_type=$_SESSION['usertype'];

		}else
		{
			header("Location:login.php");
		}

?>