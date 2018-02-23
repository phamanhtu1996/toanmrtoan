<body data-spy="scroll" data-target=".navbar-collapse">

<header id="main_menu" class="header navbar-fixed-top">
	<div class="main_menu_bg">
		<div class="container">
			<div class="row">
				<div class="nave_menu">
					<nav class="navbar navbar-default" id="navmenu">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#home">
									<img src="<?=public_url("frontend/assets")?>/images/logo.png"/>
								</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->


							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul id="menu" class="nav navbar-nav navbar-right">
									<li><a id="home" href="#">Home</a></li>
									<li><a id="lesson" href="<?=base_url('view/lesson')?>">Lesson</a></li>
									<li><a id="gallery" href="<?=base_url('view/gallery')?>">Gallery</a></li>
									<li><a id="about" href="<?=base_url('view/about')?>"> About us</a></li>
									<li><a id="blog" href="<?=base_url('view/blog')?>">Blog</a></li>
									<li><a id="login" href="<?=base_url('login')?>">Login</a></li>


									<li>
										<a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<span class="glyphicon glyphicon-search"></span></a>
										<ul class="dropdown-menu">
											<li>
												<form class="navbar-form" role="search">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Search">
													</div>
												</form>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header> <!--End of header -->

<div id="wrapper">
