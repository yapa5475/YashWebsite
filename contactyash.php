<!DOCTYPE html>
<!--mysql application password for phpmyadmin: default-->
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	

	<head>
		<title>Yash Parekh</title>

		<link rel="Stylesheet" type="text/css" href="main.css">

		<style type="text/css">
			nav {
			width: 100%;
			z-index: 0;
			position: relative;
			}

			body {
				margin: 0 auto;
				background-image: url("contact1.jpg");
				min-height: 100%;
				background-repeat: no-repeat;
				background-size: 100%;

			}
		</style>

		<script type="text/javascript">
			function navAppear() {
				var Home = "Home", stringCount = 0
				setInterval(function(){
					$('#home').append(Home[stringCount]);
					stringCount += 1;
				}, 75);

				var About = "About Me", stringCount2 = 0
				setInterval(function(){
					$('#about').append(About[stringCount2]);
					stringCount2 += 1;
				}, 75);

				var Yash = "hkeraP hsaY", stringCount3 = Yash.length;
				setInterval(function(){
					$('#Yash').append(Yash[stringCount3]);
					stringCount3 -= 1;
				}, 75);

				var Contact = "tcatnoC", stringCount4 = Contact.length;
				setInterval(function(){
					$('#Contact').append(Contact[stringCount4]);
					stringCount4 -= 1;
				}, 75);

			}

			navAppear();
		</script>
	</head>

	<div id="nav">
		<ul>
			<li style="z-index: 2; position: relative;"><a href="index.html" class="active" id="home"></a></li>
			

			<li style="z-index: 1; position: fixed; padding-left: 82.5%";><a id="Contact" href="contactyash.html"></a></li>
			<li style="position: fixed; padding-left: 90%;"><a id="Yash"></a></li>
		</ul>
	</div>
	<br>

	<body>

		<?php
			echo $_POST['firstname'];
			echo $_POST['lastname'];
			echo $_POST['email'];
			echo $_POST['message'];
		?>

		<div class="contact-bgimg-1">

			<div class="container" style="background-color: rgba(52, 73, 94, 0.7)">
				<form>
					<br><br>

					<span class="border">Contact</span>
					<br><br>
						<form action="contactyash.php" method="post"/>
							<div class="form-input">
								<input style="font-size:20px"  type="text" name="firstname" placeholder="First Name">
							</div>
							<div class="form-input">
								<input style="font-size:20px" type="text" name="lastname" placeholder="Last Name">
							</div>
							<div class="form-input">
								<input style="font-size:20px" type="text" name="email" placeholder="Email">
							</div>
							<div class="form-input">
								<input style="font-size:20px" type="text" name="message" placeholder="Message">
							</div>
						</form>
					<br>
					<input style="height: 50px; width: 100px; font-size: 17px; letter-spacing: 3px;" type="submit" name="submit" value="SUBMIT" class="btn-login">
				</form>
			</div>
		</div>
	</body>


</html>