<?php
			session_start();
			unset($_SESSION['docid']);
			header("Location: Doctorlogin.php");
			?>