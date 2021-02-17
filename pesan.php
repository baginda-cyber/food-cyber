<? php 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
	<link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/salad.png" alt="">
    </div>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                                        </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Menu</a>
                                        <ul class="dropdown">
                                         <li><a href="menu-makanan.php">Menu Makanan</a></li>
                                            <li><a href="menu-minuman.php">Menu Minuman</a></li>

                                            </li>
                                        </ul>
                                    </li>
                                   
                                     <li><a href="galeri.php">Galeri</a></li>
                                    <li><a href="pemesanan2.php">Pembelian</a></li>
                                    <li><a href="AboutUs.php">About Us</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
<form action="" method="post">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
	<div class="row">
		<label>Lokasi</label>
		<select name="area">
			<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div>
	<div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<label>Skill</label>
		<div class="options">
			<?php 
			$program = array('PHP', 'MySQL', 'Javascript', 'HTML', 'CSS');
			foreach ($program as $skill) {
				$checked = isset($_POST['skill_' . $skill]) ? ' checked="checked"' : '';
				echo '<label class="checkbox">
						<input type="checkbox" name="skill_' . $skill . '"' . $checked . '>' . $skill . 
					'</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>Lokasi: ' . $_POST['area'] . '</li>';
	echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
	
	$list_skill = array();
	foreach ($program as $skill) {
		if ( isset($_POST['skill_' . $skill]) )
		{
			$list_skill[] = $skill;
		}
	}

	echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
	echo '</ul>';
}?>

<!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                    </div>



                    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>