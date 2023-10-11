<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["usertype"]);
unset($_SESSION["name"]);



header("Location: index.html");
?>