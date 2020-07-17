<?php
session_start();
session_destroy();
header('Location:/safekids/views/login.php');
?>