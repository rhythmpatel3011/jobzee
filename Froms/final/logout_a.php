<?php
session_start();
unset($_SESSION["aid"]);
unset($_SESSION["aname"]);
header("Location:index2.php");
?>