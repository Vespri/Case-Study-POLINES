<?php
include "koneksi.php";
if($_GET){
$idsiswa=$_GET['id'];
$sql=" DELETE FROM siswa where id_siswa = '$idsiswa'";
$query=mysql_query($sql,$konek) or die ("Query salah :".mysql_error());
include "page-admin.php";
}
?>