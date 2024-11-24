<?php
session_start();
session_unset();
session_destroy();
include('layout/header.html');
include('layout/login.php');
include('layout/footer.html');
?>
