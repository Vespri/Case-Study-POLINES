<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/logo.png" rel="shortcut icon">
<title>Data Diri Mahasiswa Baru</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Punya pertanyaan?</div></li>
									<li>
										<i class="fa fa-instagram" aria-hidden="true"></i>
										<div>@polinesofficial</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Poli<span>nes</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
								    <li><a href="#">Home</a></li>
									<li><a href="#">Tentang Kami</a></li>
									<li><a href="#">Jurusan</a></li>
                                    <li><a href="#">Pendaftaran</a></li>
									<li class="active"><a href="#">Halo, Admin</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><a href="Login php/act-logout.php"><i class="fa fa-users" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Home</a></li>
				<li class="menu_mm"><a href="#">Tentang Kami</a></li>
				<li class="menu_mm"><a href="#">Jurusan</a></li>
				<li class="menu_mm"><a href="#">Pendaftaran</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="act-logout.php">Home</a></li>
								<li>Halaman Admin</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Data Diri Mahasiswa Baru</h2>
						
						<div class="section_subtitle"><p>
						<table width="600" border="1">
  						<tr>
 							<td bgcolor="#14bdee" style="color:white" width="50">No</td>
    						<td bgcolor="#14bdee" style="color:white" width="100">No Pendaftaran</td>
                            <td bgcolor="#14bdee" style="color:white" width="600">Nama</td>
                            <td bgcolor="#14bdee" style="color:white" width="600">Jurusan</td>
							<td bgcolor="#14bdee" style="color:white" width="200">Jenis Kelamin</td>
							<td bgcolor="#14bdee" style="color:white" width="400">Sekolah Asal</td>
							<td bgcolor="#14bdee" style="color:white" width="100">Action</td>
                            <td bgcolor="#14bdee" style="color:white" width="100">Action</td>
						</tr>
						<?php
						include "koneksi.php";
						$sql="SELECT siswa.*, jurusan.nama_jurusan from siswa, jurusan where siswa.kd_jurusan=jurusan.kd_jurusan  order by siswa.no_pendaftaran";
						$query=mysql_query($sql, $konek) or die ("Query salah : ".mysql_error());

						$no = 0;
						while ($data=mysql_fetch_array($query)){
						$no++;

						if($data['jenis_kelamin'] == "L"){$kelamin="Laki-Laki";}
						else {$kelamin="Perempuan";}

						?>
						<tr>
						<td style="color:black"> <?php echo $no;?></td>
						<td style="color:black"> <?php echo $data["no_pendaftaran"];?></td>
                        <td style="color:black"> <?php echo $data["nama"];?></td>
                        <td style="color:black"> <?php echo $data["nama_jurusan"];?></td>
						<td style="color:black"> <?php echo $kelamin;?></td>
						<td style="color:black"> <?php echo $data["sekolah_asal"];?></td>
						<td><a href = "mahasiswaEdit.php?id=<?php echo $data['id_siswa'];?>"target = "self">Edit</a></td>
                        <td><a href = "mahasiswaDelete.php?id=<?php echo $data['id_siswa'];?>"target = "self">Hapus</a></td>
						</tr>
						<?php
						}
						?>
						</table>
						</p></div>
						<div class="section_subtitle"><p>Jumlah Mahasiswa yang diterima : <?php echo $no; ?></p></div>
						<div class="section_subtitle"><p>Data Calon Mahasiswa yang mendaftar<a href="page-admin2.php" style="color: #14bdee"> Next</a></p></div>
					</div>
				</div>
			</div>
			<div class="row about_row">
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Poli<span>nes</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Politeknik Negeri Semarang Jawa Tengah.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://id-id.facebook.com/pages/category/Community-College/Politeknik-Negeri-Semarang-207263599290792/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/polinesofficial/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="https://twitter.com/polinesofficial"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_contact_info">
										<ul>
											<li>Instagram : @polinesofficial</li>
											<li>Jl. Prof. Soedarto, Tembalang-, Semarang, Jawa Tengah, Indonesia</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_links_container">
										<ul>
										    <li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">Jurusan</a></li>
											<li><a href="#">Pendaftaran</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
</body>
</html>