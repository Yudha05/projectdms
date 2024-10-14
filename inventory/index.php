<?php
session_start();
include 'dbconnect.php';

if(isset($_SESSION['role'])){
	header("location:stock");
}

if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Username atau Password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda berhasil keluar dari sistem";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus Login";
		}else if($_GET['pesan'] == "noaccess"){
			echo "Akses Ditutup";
	}
}


if(isset($_POST['btn-login']))
{
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $upass = mysqli_real_escape_string($conn,md5($_POST['password']));

 // menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from slogin where username='$uname' and password='$upass';");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
 if($data['role']=="stock"){
		// buat session login dan username
		$_SESSION['user'] = $data['nickname'];
		$_SESSION['user_login'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['role'] = "stock";
		header("location:stock");	

 }
 else
 {
  header("location:index.php");

 }
 
}

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="stock/assets/favico.io/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <script src="jquery.min.js"></script>
	<style>body{background-image:url("bg.jpg");}
	@media screen and (max-width: 600px) {
h4{font-size:85%;}
}
	</style>
  </head>
  <body>
								<!--<div style="color:white">
								<label>Login information for Demo :</label><br \>
								<label>Username & Password : guest</label><br \>
								</div>-->
  <div class="d-flex p-5" align="center">
  

	<br \><br \>
			<div class="container" data-aos="zoom-in" data-aos-duration="1500">
				<div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
										
									<form method="post">
										<div class="form-group">
											<label for="InputUsername" class="small mb-2 d-flex align-items-start">Username</label>
											<input type="text" class="form-control" placeholder="Username" name="username" autofocus>
										</div>
										<div class="form-group">
											<label for="InputPassword" class="small mb-2 d-flex align-items-start">Password</label>
											<input type="password" class="form-control" placeholder="Password" name="password">
										</div>
										<div class="d-flex justify-content-center">
											<button type="submit" class="btn btn-primary col-4" name="btn-login">Masuk</button>
										</div>
										
								    
									</form>

									<br>

									<p>Belum Punya Akun? <a href="registrasi.php">Klik Disini !</a></p>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
       
     
	
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
  			AOS.init();
		</script>
  </body>
</html>
