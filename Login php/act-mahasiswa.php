<?php
session_start();
include "koneksi-tutor.php";
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM mahasiswa WHERE nama='$nama' AND password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
		$_SESSION['nama'] = $qry['nama'];
        $_SESSION['user_id'] = $qry['user_id'];
        if($qry['user_id']=="Calon Mahasiswa"){
            header("location:../page-mahasiswa.php");
        }
        }else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='login-mahasiswa.php';
		</script>
		<?php
        }
    }else if($op=="out"){
        unset($_SESSION['nama']);
        unset($_SESSION['user_id']);
        header("location:../index.html");
}
?>
