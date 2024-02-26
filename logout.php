<?php
session_start();
unset($_SESSION['nik']);
session_destroy();
header('location:index.php');
?>