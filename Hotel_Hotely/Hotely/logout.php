<?php

session_start();
include('connection.php');

unset($_SESSION['loginuser']);
	session_destroy();

			header("location:index.php");
?>