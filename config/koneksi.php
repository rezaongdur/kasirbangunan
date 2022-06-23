<?php 
	$host = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$database = "tokobangunan";
	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect($host,$username,$password) or die ("Harap Periksa Koneksi Database Anda!");
	mysql_select_db($database) or die ("Database Tidak Ditemukan!");
?>