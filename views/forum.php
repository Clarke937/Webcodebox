<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webcodebox - Forum</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/Jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/forum.css">
	<link rel="stylesheet" type="text/css" href="css/devicon.css">
	<link rel="stylesheet" type="text/css" href="css/Hints.css">
</head>

<?php include("sessions.php"); ?>

<body>
	
	<div id="wrapper">
		
		<?php include("mods/sidebar-menu.php"); ?>
		<?php include("mods/alerts.php"); ?>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				
				<?php include("mods/top-banner.php"); ?>

				<div class="Forum">
					
					<div class="form-forum col-lg-5 col-md-6 col-sm-6 col-xs-12">
						
						<form action="" method="POST">
							
							<label>Question Header:</label>
							<input type="text" name="question-header" class="form-control" placeholder="Write a title for your question">
							
							<label>Describe your question:</label>
							<textarea rows="4" name="description-q" class="form-control"></textarea>

							<label>Programming languages:</label>
							
							<div class="checkbox"><label><input type="checkbox" value="1">Jsp</label></div>
							<div class="checkbox"><label><input type="checkbox" value="1">PHP</label></div>
							<div class="checkbox"><label><input type="checkbox" value="1">HTML</label></div>
							<div class="checkbox"><label><input type="checkbox" value="1">SQL</label></div>
							<div class="checkbox"><label><input type="checkbox" value="1">MySql</label></div>

						</form>

					</div>

					<div class="tabs-forum col-lg-7 col-md-6 col-sm-6 col-xs-12">
						
						<div role="tabpanel">
							
							<ul class="nav nav-tabs" role="tablist">
								
								<li role="presentation" class="active">
                                    <a href="#seccion1" data-toggle="tab" role="tab">
                                    	<span class="tab-title">My Questions</span>
                                    	<span class="fa fa-user"></span>
                                    	<span class="fa fa-question"></span>
                                    </a>
                                </li>

                                <li role="presentation" >
                                    <a href="#seccion2" data-toggle="tab" role="tab">
                                    	<span class="tab-title">Public Forum</span>
                                    	<span class="fa fa-users"></span>
                                    	<span class="fa fa-question"></span>
                                    </a>
                                </li>

                                <li role="presentation" >
                                    <a href="#seccion3" data-toggle="tab" role="tab">
                                    	<span class="tab-title">Filter Questions</span>
                                    	<span class="fa fa-search"></span>
                                    	<span class="fa fa-question"></span>
                                    </a>
                                </li>
							</ul>

							<ul class="tab-content">
								
								<div role="tabpanel" class="tab-pane active" id="seccion1">

									<h3>List of my Questions</h3>
									
									<div class="panel panel-default question unanswered" id="myq-1">
										
										<div class="panel-heading">
											<img src="users/us1.jpg" class="img-responsive img-circle pull-left">
											<small>Published: March 17, 2016 to 2:42pm</small>
											<br>
											<span><strong>Edgar Retana: </strong>What is my Question?</span>
											<br>
											<i>Question: <strong>#A-01</strong> - </i>
											<i class="question-status">
												<a href="#" onclick="alert501('A-01')" class="hint hint--bottom" data-hint="Change Status">Unanswered</a>
											</i>
										</div>

										<div class="panel-body post-body-1 collapse">
											<p>
												<strong>Description:</strong>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
												Accusantium voluptas eius error praesentium dolorum, voluptates, 
												consectetur deleniti vero necessitatibus cupiditate laudantium 
												harum quibusdam quos ratione dolore sed, mollitia iure voluptatem. 
											</p>

											<strong>I'm using these languages:</strong><br><br>

											<ul class="list-lenguages">
												<a href="#">
													<li class="lenguage hint hint--bottom" data-hint="Android">
														<i class="devicon-android-plain"></i>
													</li>
												</a>

												<a href="#">
													<li class="lenguage hint hint--bottom" data-hint="Html5">
														<i class="devicon-html5-plain"></i>
													</li>
												</a>

												<a href="#">
													<li class="lenguage hint hint--bottom" data-hint="Javascript">
														<i class="devicon-javascript-plain"></i>
													</li>
												</a>
											</ul>

											<br><br><br>
											<strong>My Code:</strong>
											<a href="code_viewer.php">Click here to see the code</a>

										</div>

										<div class="panel-footer collapsed" data-toggle="collapse" data-target=".post-body-1" title="Show more">
											<center><i class="fa fa-chevron-down"></i></center>
										</div>
									</div>

								</div>

								<div role="tabpanel" class="tab-pane" id="seccion2">
									<h1>Public Forum</h1>
								</div>

								<div role="tabpanel" class="tab-pane" id="seccion3">
									<h1>Filter Questions</h1>
								</div>
							</ul>

						</div>

					</div>

				</div>


			</div>
		</div>

	</div>

	<script type="text/javascript">
		$('.panel-footer').click(function(e){
			$('.panel-footer > center > i').toggleClass("fa-rotate-180");
		});
	</script>

</body>
</html>
