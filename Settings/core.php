<?php
//for header redirection
ob_start();

//start session
session_start();

$_SESSION['id'] = $_SERVER['REMOTE_ADDR'];

$_SESSION['totalAmount'];
//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME'];


