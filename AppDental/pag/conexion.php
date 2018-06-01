<?php
session_start();
$con= pg_connect("host='localhost' dbname=app2 port=5432 user=postgres password=lalito99") or 
    die("Error de conexion".pg_last_error());
$_SESSION['con']=$con;
?>