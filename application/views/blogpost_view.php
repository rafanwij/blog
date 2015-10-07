<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php $mainWeb="http://localhost/icc/"; ?>
<html>
	<head>
		<title>I-Cook Culinary Center</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/main.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/mainBlog.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $mainWeb; ?>chat/main.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/assets/css/main1.css">
		<style>
		::-webkit-input-placeholder {
			color: rgba(128, 128, 128, 0.5) !important;
			opacity: 1.0;
		}

		:-moz-placeholder {
			color: rgba(128, 128, 128, 0.5) !important;
			opacity: 1.0;
		}

		::-moz-placeholder {
			color: rgba(128, 128, 128, 0.5) !important;
			opacity: 1.0;
		}

		:-ms-input-placeholder {
			color: rgba(128, 128, 128, 0.5) !important;
			opacity: 1.0;
		}

		.formerize-placeholder {
			color: rgba(128, 128, 128, 0.5) !important;
			opacity: 1.0;
		}
		/*@font-face { font-family: Delicious; src: url('Delicious-Roman.otf'); } */
		</style>
		<style type="text/css">
			@font-face { font-family: Chalk; src: url('<?php echo base_url() ?>application/assets/fonts/HandyGeorge.ttf'); }
		</style>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" style="background-image: url('<?php echo base_url(); ?>application/assets/pic/chalk.jpg')">
						<div style="color: #fff;letter-spacing: 0.225em; margin: 0 1em 1em 1em;">
									<a id="judul" href="<?php echo $mainWeb; ?>index.html" style="float:left; font-weight:800">I-COOK CULINARY CENTER</a>
									<div id="men">
									<a class="topMenu" href="<?php echo $mainWeb; ?>contact.html" style="float:right; padding-left:0.5em; padding-right:0.5em; text-decoration:none;">Contact Us</a>
									<a class="topMenu" href="<?php echo $mainWeb; ?>faq.html" style="float:right; padding-left:0.5em; padding-right:0.5em;">FAQ</a>
									<a class="topMenu" href="<?php echo base_url(); ?>index.ph/blogpost/" style="float:right; padding-left:0.5em; padding-right:0.5em;">Blog</a>
									<a class="topMenu" href="<?php echo $mainWeb; ?>gallery.html" style="float:right; padding-left:0.5em; padding-right:0.5em;">Gallery</a>
									<a class="topMenu" href="<?php echo $mainWeb; ?>program.html" style="float:right; padding-left:0.5em; padding-right:0.5em;">Programs</a>
									<a class="topMenu" href="<?php echo $mainWeb; ?>about.html" style="float:right; padding-left:0.5em; padding-right:0.5em;">About Us</a>
									<a class="topMenu" href="<?php echo $mainWeb; ?>index.html" style="float:right; padding-left:0.5em; padding-right:0.5em;">Home</a>
									</div>
						</div>
						
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu" style="background-image: url('<?php echo base_url(); ?>application/assets/pic/chalk.jpg')">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About Us</a></li>
											<li><a href="program.html">Programs</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

					<section id="banner">
						<div class="inner">
						<img src="<?php echo base_url(); ?>application/assets/pic/logo.png" id="logo">
						<br>
							<h2>I-Cook Culinary Center</h2>
							<h3>Be Inspired To Cook</h3>
							<h2>Blog</h2>							
						</div>
						<a href="#one" class="more scrolly"></a>
					</section>

					<section id="one" class="wrapper style1 special" style="padding-top:3em; padding-bottom:5em; background-image:url('<?php echo base_url();?>application/assets/pic/paper.jpg');">
						<div class="inner">
							<header class="major" style="margin-bottom:0.5em;width:100%;display:inline-block;">	
								<div><img src="<?php echo base_url();?>application/assets/pic/chef.png" id="chefPic"></div>
								<div id="blogBackground" style="margin-top:-3em;">
									<h1 id="blogTitle" style="line-height:0em;letter-spacing:0;font-weight:normal;font-family:Chalk;">Blog</h1>
									<?php echo $text ?>
									<div style="inline-block;">
										<div class="container" style="text-align:start;height:130px;vertical-align:bottom;display:table-cell;">
											
											<ul class="post-meta pager">
											<!-- modified by FS 16 Sept -->
												<li class="previous" <?php echo $previous; ?> >
		                                            <a href="<?php echo base_url();?>index.php/blogpost/loadPost/<?php echo $currentPage-1; ?>">&larr; Newer</a>
		                                        </li>
		                                        <li>
		                                            <?php echo $page;?>
		                                        </li>
		                                        <li class="next" <?php echo $next; ?> >
		                                            <a href="<?php echo base_url();?>index.php/blogpost/loadPost/<?php echo $currentPage+1; ?>">Older &rarr;</a>
		                                        </li>
											</ul>
										</div>
									</div>									
								</div>
							</header>
						</div>
					</section>		
				<!-- Footer -->
					<footer id="footer" style="background-color:RGBA(0,0,0,0.5)">
						<ul class="icons">
							<li><a href="https://twitter.com/icookculinary" class="icon fa-twitter"><span class="label">@icookculinary</span></a></li>
							<li><a href="https://www.facebook.com/icookculinary?fref=nf" class="icon fa-facebook"><span class="label">I Cook Culinary</span></a></li>
							<li><a href="https://instagram.com/icookculinary/" class="icon fa-instagram"><span class="label">@i.cook_culinary_center</span></a></li>
							<li><a onmouseover="document.getElementById('custom').style.opacity='1'" onmouseout="document.getElementById('custom').style.opacity='0.5'" href="http://line.me/ti/p/yqBpNbzxyN" class="icon"><img id="custom" src="<?php echo base_url(); ?>application/assets/pic/line.png" class="icon" style="resize:both; max-width:30px; opacity:0.5"><span class="label">icook.culinary</span></a></li>
							<li><a href="mailto:info@i-cookculinary.com?Subject=Please%20contact%20me%20via%20email" class="icon fa-envelope-o"><span class="label">info@i-cookculinary.com</span></a></li>
						</ul>
						<!--<ul class="copyright">
							<li>&copy; Fer</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>-->
					</footer>

			</div>

		<!-- Scripts -->
			<script src="<?php echo base_url(); ?>application/assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>application/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url(); ?>application/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url(); ?>application/assets/js/skel.min.js"></script>
			<script src="<?php echo base_url(); ?>application/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url(); ?>application/assets/js/main.js"></script>
			<script type="text/javascript">
			function displayChef()
			{
				var w = window.innerWidth;
				if(w>736)
				{
					$('#formChef').show('slow');
				}
			}
			</script>
	</body>
</html>