<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['adduser']))
	{
		$uname = $_POST['username'];
		$nickname = $_POST['nickname'];
		$upass = md5($_POST['password']); 
			  
		$tambahuser = mysqli_query($conn,"insert into slogin (username, nickname, password) 
		values('$uname','$nickname','$upass')");
		if ($tambahuser){
		echo " <div class='alert alert-success'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= index.php'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= registered.php'/> ";
		}
		
	};



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
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
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi</h3></div>
                                <div class="card-body">
									<form method="post">
										<input type="text" name="username" class="form-control" placeholder="Nama Lengkap User" required>
										<br>
										<input type="text" name="nickname" class="form-control" placeholder="NickName User" required maxlength="13">
										<br>
										<input type="password" name="password" class="form-control" placeholder="Password" required minlength="8">
										<br>
										<button class="btn btn-primary" type="submit" name="adduser" value="Daftar">Daftarkan Akun</button>
									</form>

									<br>
			
									<div class="register-home">
										<p>Sudah Punya Akun? <a href="index.php">Login Disini !</a></p>
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
