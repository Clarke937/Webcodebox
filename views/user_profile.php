<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webcodebox - User Profile</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<script type="text/javascript" src="js/Jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/user_profile.css">
	<link rel="stylesheet" type="text/css" href="css/status.css">
</head>

<?php include("sessions.php"); ?>

<body>
	
	<div id="wrapper">

		<?php include("mods/sidebar-menu.php"); ?>
		<?php include("mods/alerts.php"); ?>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				
				<?php include("mods/top-banner.php"); ?>
				
				<div id="profile">

					<div class="row">

						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12" >

							<div id="form-status">
								<form action="" method="POST">
									<label> <i class="fa fa-edit"></i> New Status:</label>
									<textarea class="form-control" rows="3" placeholder="What do you do? Say your friends"></textarea>
									<label> <i class="fa fa-user-plus"></i> Tag to:</label>
									<input type="text" class="form-control" placeholder="Tag to a Friend or Friends">
									
									<button name="new-status" type="submit" class="btn btn-primary">
										<i class="fa fa-share"></i> To Post
									</button>

								</form>
							</div>

							<div id="statuses">
								
								<?php include("mods/status.php"); ?>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>