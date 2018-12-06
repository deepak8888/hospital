<?php
session_start();
unset($_SESSION['docid']);
session_destroy();
header("location:login.php");
?>
