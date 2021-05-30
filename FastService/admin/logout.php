<?php
if (!isset($_SESSION)) {

    session_start();
}

unset($_SESSION["name"]);
header("Location:login.php");
