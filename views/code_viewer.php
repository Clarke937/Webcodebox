<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webcodebox - Code Viewer</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<script type="text/javascript" src="js/Jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/devicon.css">
	<link rel="stylesheet" type="text/css" href="css/Hints.css">
	<link rel="stylesheet" type="text/css" href="css/code-viewer.css">

	<!--Scripts para visor-->
	<script type="text/javascript" src="viewer/scripts/shCore.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushBash.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushCpp.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushDelphi.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushDiff.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushGroovy.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushJava.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushPhp.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushPlain.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushPython.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushRuby.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushScala.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushSql.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushVb.js"></script>
	<script type="text/javascript" src="viewer/scripts/shBrushXml.js"></script>
	
	<link type="text/css" rel="stylesheet" href="viewer/styles/shCore.css"/>
	<link type="text/css" rel="Stylesheet" href="viewer/styles/shThemeRDark.css"/>


	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'viewer/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	
</head>
<body>

	<?php include("sessions.php"); ?>

	<div id="wrapper">
		
		<?php include("mods/sidebar-menu.php"); ?>
		<?php include("mods/alerts.php"); ?>

		<div id="page-content-wrapper">
			<div class="container-fluid">
				
				<?php include("mods/top-banner.php"); ?>
				
				<div id="Viewer">

					<div class="tabs-viewer col-lg-8">
						
						<div role="tabpanel">
							
							<ul class="nav nav-tabs" role="tablist">
									
								<li role="presentation" class="active">
	                                <a href="#seccion1" data-toggle="tab" role="tab">
	                                	<i class="devicon-html5-plain"></i>
	                                </a>
	                            </li>

	                            <li role="presentation">
                                    <a href="#seccion2" data-toggle="tab" role="tab">
                                    	<i class="devicon-javascript-plain"></i>
                                    </a>
                                </li>

	                        </ul>

	                        <ul class="tab-content">
								
								<div role="tabpanel" class="tab-pane active" id="seccion1">

									<h1>Code Javascript</h1>
									
									
									<pre class="brush: javascript">
										
										<script>
											function(){
												alert("djsldnaslnds sdjap");
											}
										</script>

									</pre>

								</div>

								<div role="tabpanel" class="tab-pane" id="seccion2">
									<h1>Codigo Javascript</h1>
								</div>

							</ul>

						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
	

	
</body>
</html>