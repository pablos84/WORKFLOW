<?php
session_start();
$usuario = $_SESSION["usuario"] = $_GET["usuario"];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
?>