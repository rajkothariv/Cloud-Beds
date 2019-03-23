<?php
session_start();
session_destroy();
echo "<Script> alert('Sign out successful'); </script>";
echo "<script> document.location='../index.php';</script>";
?>