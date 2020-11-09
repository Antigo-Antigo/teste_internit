<?php 

session_start();

$usuario = $_SESSION['login'];

if( !isset($_SESSION['login']) ){ header("location:logar.php"); }
















?>