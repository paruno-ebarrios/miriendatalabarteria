<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			font-family: Arial;
			font-size: 17px;
		}

		#myVideo {
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
		}

		.content {
			position: fixed;
			bottom: 0;
			background: rgba(0, 0, 0, 0.5);
			color: #f1f1f1;
			width: 100%;
			padding: 20px;
		}

		#myBtn {
			width: 200px;
			font-size: 18px;
			padding: 10px;
			border: none;
			background: #000;
			color: #fff;
			cursor: pointer;
		}

		#myBtn:hover {
			background: #ddd;
			color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/main.css') ?>">
</head>

<body>
	<?php if (session()->getFlashdata('error')): ?>
        <p style="color:red;"> <?= session()->getFlashdata('error') ?> </p>
    <?php endif; ?>
	<!--<video autoplay muted loop id="myVideo">
		<source src="back.mp4" type="video/mp4">
		Your browser does not support HTML5 video.
	</video>-->

	<div class="content">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/img-01.jpg" alt="IMG">
					</div>

					<form class="login100-form validate-form" method="post" action="<?= base_url('login/auth') ?>">
						<span class="login100-form-title">
							Mi Rienda Talabartería
						</span>

						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="usuario" placeholder="Usuario">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
							<input class="input100" type="password" name="contrasenia" placeholder="Contraseña">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Ingresar
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">

							</span>

						</div>

						<div class="text-center p-t-136">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		var video = document.getElementById("myVideo");
		var btn = document.getElementById("myBtn");

		function myFunction() {
			if (video.paused) {
				video.play();
				btn.innerHTML = "Pause";
			} else {
				video.pause();
				btn.innerHTML = "Play";
			}
		}
	</script>


	<!--===============================================================================================-->
	<script src="<?= base_url('vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('vendor/tilt/tilt.jquery.min.js') ?>"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>