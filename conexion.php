<?php
$conexion=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db("prueba",$conexion);
mysql_query("SET NAMES 'UTF8'");
?>