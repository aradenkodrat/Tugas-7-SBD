<?php
$host="localhost";
$user="adminklinik";
$password="312010271";
$db="klinik_312010271";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>