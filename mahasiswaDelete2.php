<?php
include "koneksi.php";
if($_GET){
$id=$_GET['id'];
$sql=" DELETE FROM pendaftaran where id = '$id'";
$query=mysql_query($sql,$konek) or die ("Query salah :".mysql_error());
include "page-admin2.php";
}
?>