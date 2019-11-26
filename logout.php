<?php
session_start();

//untuk delete semua data yg pernah tersimpan
unset($_SESSION["username"]);

//untuk redirect ke login setelah logout
header("Location: login.php");
?>