<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webcodebox - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="views/css/Login.css">
	<script type="text/javascript" src="views/js/Jquery.js"></script>
</head>

<body class="loading">
	
	<div class="wrapper">
		
		<div id="bg"></div>
		<div id="overlay"></div>
		<div id="main">

			<header id="header">
				<h1>Webcodebox</h1>
				<p>Templates &nbsp;&bull;&nbsp; Tutorials &nbsp;&bull;&nbsp; Resources</p>
					
				<br>

				<form action="ctrl/frm_login.php" method="POST">
					
					<input type="text" placeholder="E-mail" name="mail" 
					readonly onfocus="this.removeAttribute('readonly');"/>
					<br>
					<input type="password" placeholder="Password" name="pass" 
					readonly onfocus="this.removeAttribute('readonly');"/>

					<nav>
						<ul>
							<li>
								<a href="#" class="icon fa-sign-in" onclick="$(this).closest('form').submit()"></a>
							</li>
						</ul>
					</nav>

				</form>
			</header>

			<footer id="footer">
				<span class="copyright">You do not have an account? <a href="">I'm a new user</a></span>
			</footer>

		</div>
	</div>

	<script>
		window.onload = function() { document.body.className = ''; }
		window.ontouchmove = function() { return false; }
		window.onorientationchange = function() { document.body.scrollTop = 0; }
	</script>

</body>

</html>