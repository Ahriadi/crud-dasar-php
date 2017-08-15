<?php
$hostname = "localhost";
$database = "db_latihan";
$username = "root";
$password = "";

mysql_connect($hostname, $username, $password) or die ("koneksi database gagal !.");
mysql_select_db($database) or die ("buka database gagal !.");
?>