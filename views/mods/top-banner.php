<link rel="stylesheet" type="text/css" href="css/top-banner.css">

<div class="row">
	<div class="col-lg-12">
		
		<div id="top-banner">

			<ul id="left-ban">
				<li><a href="#" id="menu-toggle"><i class="fa fa-bars"></i></a></li>
				<li><a href="#"><span id="us-name">Edgar Retana /</span></a></li>
				<li><a href="#"><span>Webcodebox</span></a></li>
			</ul>

			<ul id="right-ban">
				<li onclick="search()">
					<a href="#">
						<div class="round hollow">
							<span class="fa fa-search"></span>
						</div>
					</a>
				</li>

				<li>
					<a href="#">
						<div class="round hollow">
							<span class="fa fa-bell"></span>
						</div>
					</a>
				</li>
			</ul>
		</div>
		
	</div>
</div>

<!-- Menu Toggle Scripts -->

<script>
	$('#menu-toggle').click(function(e){
		e.preventDefault();
		$('#wrapper').toggleClass("menuDisplayed");
		$('#menu-toggle > i').toggleClass("fa-rotate-90");
	});
</script>