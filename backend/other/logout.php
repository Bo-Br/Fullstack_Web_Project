<?php
session_start();
$_SESSION = [];
session_destroy();

header("Location: /Fullstack_Web_Project/public/index.php");
exit;
?>