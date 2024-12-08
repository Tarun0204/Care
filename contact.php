<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "includes/head_links.php"; ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body {
			font-family: 'Arial', sans-serif;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.bg-container1 {
			background-image: url("https://www.shutterstock.com/image-photo/contact-us-hand-businessman-holding-600nw-1135079063.jpg");
			background-size: cover;
			height: 30vh;
			padding: 50px;
		}

		@media only screen and (max-width: 768px) {
			.map-section {
				height: 30vh;
				width: 80vw;
				margin-top: 30px;
			}
		}

		.container {
			position: relative;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px 100px;
		}

		.container:after {
			content: '';
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			background: url("img/bg.jpg") no-repeat center;
			background-size: cover;
			filter: blur(50px);
			z-index: -1;
		}

		.contact-box {
			max-width: 850px;
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			justify-content: center;
			align-items: center;
			text-align: center;
			background-color: #fff;
			box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
		}

		.left {
			background: url("https://th.bing.com/th/id/OIP.cJIVil0nuf3Jvn_DoDXivQHaG0?rs=1&pid=ImgDetMain") no-repeat center;
			height: 80%;
			width: 30vw;
		}

		.right {
			padding: 25px 40px;
		}

		h2 {
			position: relative;
			padding: 0 0 10px;
			margin-bottom: 10px;
		}

		h2:after {
			content: '';
			position: absolute;
			left: 50%;
			bottom: 0;
			transform: translateX(-50%);
			height: 4px;
			width: 50px;
			border-radius: 2px;
			background-color: #2ecc71;
		}

		.field {
			width: 100%;
			border: 2px solid rgba(0, 0, 0, 0);
			outline: none;
			background-color: rgba(230, 230, 230, 0.6);
			padding: 0.5rem 1rem;
			font-size: 1.1rem;
			margin-bottom: 22px;
			transition: .3s;
		}

		.field:hover {
			background-color: rgba(0, 0, 0, 0.1);
		}

		textarea {
			min-height: 150px;
		}

		.btn {
			width: 100%;
			padding: 0.5rem 1rem;
			background-color: #2ecc71;
			color: #fff;
			font-size: 1.1rem;
			border: none;
			outline: none;
			cursor: pointer;
			transition: .3s;
		}

		.btn:hover {
			background-color: #27ae60;
		}

		.field:focus {
			border: 2px solid rgba(30, 85, 250, 0.47);
			background-color: #fff;
		}

		@media screen and (max-width: 880px) {
			.contact-box {
				grid-template-columns: 1fr;
				padding: 20px;
			}

			.left {
				display: none;
			}

			.right {
				padding: 15px 20px;
			}

			.field {
				width: 100%;
				margin-bottom: 15px;
			}

			.btn {
				width: 100%;
				padding: 0.75rem 1.5rem;
			}
		}
	</style>
</head>

<body>
	<?php include "includes/navbar.php"; ?>
	<div class="bg-container1">
		<h1 class="text-left text-white p-5">Contact Us</h1>
	</div>

	<div class="shadow m-5" style="padding-left: 6%;">
		<iframe class="map-section"
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3806.9810925597767!2d78.449179!3d17.412695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb972ff51ff959%3A0x55376a3d51b6637!2sCARE%20Hospitals%2C%20Banjara%20Hills%20%7C%20Best%20Hospital%20in%20Hyderabad!5e0!3m2!1sen!2sin!4v1718709308145!5m2!1sen!2sin"
			class="ml-5 mt-3" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<!-- Contact Form -->
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<form id="contactForm">
					<input type="text" class="field" placeholder="Your Name" name="name" required>
					<input type="email" class="field" placeholder="Your Email" name="email" required>
					<input type="text" class="field" placeholder="Phone" name="phone" required>
					<textarea placeholder="Message" class="field" name="message" required></textarea>
					<button class="btn" type="submit">Send</button>
					<!-- Bootstrap Alert -->
					<div id="responseAlert" class="alert mt-3" role="alert" style="display: none;"></div>
				</form>
			</div>
		</div>
	</div>

	<?php include "footer.php" ?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#contactForm').on('submit', function (e) {
				e.preventDefault(); 
				$.ajax({
					type: 'POST',
					url: 'contactConnect.php',
					data: $(this).serialize(),
					success: function (response) {
						$('#responseAlert').removeClass('alert-success alert-danger'); 
						$('#responseAlert').addClass('alert-success');
						$('#responseAlert').text(response); 
						$('#responseAlert').show();
						$('#contactForm')[0].reset();
					},
					error: function () {
						$('#responseAlert').removeClass('alert-success').addClass('alert-danger');
						$('#responseAlert').text('There was an error submitting the form. Please try again.');
						$('#responseAlert').show();
					}
				});
			});
		});
	</script>
</body>

</html>