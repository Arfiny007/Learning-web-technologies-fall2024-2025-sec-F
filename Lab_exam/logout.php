<?php
session_start();


unset($_SESSION['flag']);


header('Location: login.html');
exit();
?>