<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek.php';
	?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favico.io/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #back-to-top:hover {
            background-color: #444;
        }

        .img-button a img:hover {
            content: attr(title);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: rgba(0, 0, 0, 0.8);
            background: rgba(0, 0, 0, 10);
            z-index: 50;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="index.php"><img src="../log.jpg" alt="" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li class="active"><a href="index.php"><i class="ti-home"></i><span>Home</span></a></li>
                            <li>
                                <a href="stock.php"><i class="ti-layout-tab"></i><span>Stock Barang</span></a>
                            </li>
							<li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-receipt"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="masuk.php"><i class="ti-import"></i><span>Barang Masuk</span></a></li>
                                    <li><a href="keluar.php"><i class="ti-export"></i><span>Barang Keluar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="logout.php"><i class="ti-user"></i><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left" data-aos="fade-right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>  
                        <div class="search-box pull-left" data-aos="fade-right">
                            <form action="#">
                                <h2>Hi, <?=$_SESSION['user'];?>!</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date" data-aos="fade-left">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
			<?php 
			
				$periksa_bahan=mysqli_query($conn,"select * from sstock_brg where stock <1");
				while($p=mysqli_fetch_array($periksa_bahan)){	
					if($p['stock']<=1){	
						?>	
						<script>
							$(document).ready(function(){
								$('#pesan_sedia').css("color","white");
								$('#pesan_sedia').append("<i class='ti-flag'></i>");
							});
						</script>
						<?php
						echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>".$p['nama']. "</u> <u>".($p['merk'])."</u> &nbsp <u>".$p['ukuran']."</u></strong> yang tersisa sudah habis</div>";		
					}
				}
				?>
			
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6" data-aos="fade-right">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                            <img src="log.jpg" width="220px" class="user-name dropdown-toggle" data-toggle="dropdown"\>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner mt-5">
                                    <!-- Swiper -->
                    <div class="swiper carousel" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="../logistik1.jpg" class="rounded" alt=""></div>
                            <div class="swiper-slide"><img src="../logistik2.jpg" class="rounded" alt=""></div>
                            <div class="swiper-slide"><img src="../logistik4.jpg" class="rounded" alt=""></div>
                        </div>
                    </div>
<br>
                    <div class="container d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-duration="1400">
                        <h2 class="user-select-none">
                            Selamat Datang 
                            <small class="text-body-secondary">Di Web <span class="text-decoration-underline">Inventory</span></small>
                            <span style="color:blue">Logistik </span>
                        </h2>
                    </div>
                        <br>
                    <div class="container d-flex justify-content-center mt-3" data-aos="fade-up" data-aos-duration="1400">
                        <p class="h5 user-select-none">Website Ini dibuat untuk mempermudah pencatatan barang, Web <span class="text-decoration-underline">Inventory</span> ini sudah dilengkapi <code>CRUD</code></p>
                    </div>
                    <div class="container d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1400">
                        <p class="h5 user-select-none">Pada Web <span class="text-decoration-underline">Inventory</span> ini, memiliki 3 page <span class="text-warning">Utama</span> untuk pencatatan barang, antara lain :</p>
                    </div>
                    <br>
                    <div class="img-button d-flex justify-content-evenly" data-aos="zoom-in" data-aos-duration="2000">
                        <a href="stock.php" title="image 1" class="stock-img-button"><img src="../folder.png" class="rounded" alt="Stock Barang"></a>
                        <a href="masuk.php"><img src="../import.jpg" class="rounded" alt="Barang Masuk"></a>
                        <a href="keluar.php"><img src="../export.jpg" class="rounded" alt="Barang Keluar"></a>
                    </div>


                    <!-- <picture class="d-flex mt-3">
                        <source srcset="..." type="image/png+xml">
                        <img src="../SOP Peralatan Logistik.drawio.png" class="img-fluid img-thumbnail" alt="...">
                    </picture> -->

                    
                <!-- sales report area start 
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Bitcoin</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>$ 4567809,987</h2>
                                        <span>- 45.87</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales1" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Bitcoin Dash</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>$ 4567809,987</h2>
                                        <span>- 45.87</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-eur"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Euthorium</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>$ 4567809,987</h2>
                                        <span>- 45.87</span>
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start 
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Coin Distribution</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Notes</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
										 <table class="table table-bordered table-hover"><thead class="thead-dark">  
										<tr>
										 <th><center> No </center></th>
										 <th><center> Catatan </center></th>
										 <th><center> Ditulis oleh </center></th>
										 <th><center> Action </center></th>


										</tr></thead>
										 <form method ='POST' action = 'notes.php'>
										 <tr class="table-active">
											<td><center><input type = 'hidden'/></center> </td>
											<td><center> <input type = 'text' class='form-control' name = 'konten' required /></center> </td>
											<td><center>Saya, <strong><?=$_SESSION['user'];?></strong> <span class="badge badge-secondary"><?=$_SESSION['role'];?></span></center> </td>
											<td><center><input type = 'submit' name = 'submit'  class='btn btn-primary btn-sm' value = 'Add Note'/></center></td>
											<tr>
										 </form>
										<?php  
										// Perintah untuk menampilkan data
										$queri="Select * From notes where status='aktif' Order by id DESC" ;  //menampikan SEMUA data dari tabel

										$hasil=MySQLi_query ($conn,$queri);    //fungsi untuk SQL

										// nilai awal variabel untuk no urut
										$i = 1;

										// perintah untuk membaca dan mengambil data dalam bentuk array
										while ($data = mysqli_fetch_array ($hasil)){
										$id = $data['id'];
										 echo "  <form method ='POST' action = 'done.php'>
										  <tr>
										  <td><center>".$i."</center></td>
										  <td><strong><center>".$data['contents']."</center></strong></td>
										  <td><strong><center>".$data['admin']."</center></strong></td>
										  <td><center><input type = 'hidden' name = 'id' value = '".$data['id']."'> <input type='submit' name = 'submit'  class='btn btn-danger btn-sm' value = 'Delete' formaction='del.php' /></center></td>
										  </form></td>
										  </tr> </form>
										  ";
										 $i++; 
										}
										?>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
                <button id="back-to-top" class="btn btn-primary btn-lg">
                    <i class="ti-arrow-up"></i> 
                </button>
        </div>
        <!-- main content area end -->

                                    <!--Footer Area-->
       
                
        
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        //swiper
        var swiper = new Swiper(".carousel", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });

        //button top
        $(document).ready(function() {
            $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
            });

            $('#back-to-top').click(function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
            });
        });
    </script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
