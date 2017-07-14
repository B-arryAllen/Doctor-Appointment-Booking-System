<?php
			session_start();
			unset($_SESSION['aid']);
			header("Location: adminlogin.php");
			?>