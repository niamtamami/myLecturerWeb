<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ni'am Tamami S.ST., M.T.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ni'am Tamami personal lecture web">
	<meta name="author" content="nitbot.com">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>

	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
						<a class="navbar-brand" href="<?php echo $myabout; ?>">Navigation</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li >
								<a href="<?php echo $myweb; ?>">Web</a>
							</li>
							<li>
								<a href="<?php echo $myblog; ?>">Blog</a>
							</li>
							<li>
								<a href="<?php echo $mygithub; ?>">Github</a>
							</li>
							<li>
								<a href="<?php echo $myrepo; ?>">Repository</a>
							</li>
							<li>
								<a href="<?php echo $myteachingmaterial; ?>">TeachingMaterial</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Social Media<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo $myfacebook; ?>">FaceBook</a>
									</li>
									<li>
										<a href="<?php echo $myyoutube; ?>">Youtube</a>
									</li>
									<li class="divider">
									</li>
									<li>
										<a href="<?php echo $myemail; ?>"><?php echo $myemail; ?></a>
									</li>
									<li>
										<a href="<?php echo $mygmail; ?>"><?php echo $mygmail; ?></a>
									</li>
								</ul>
							</li>
													<li>
								<a href="<?php echo $mycv; ?>">myCV</a>
							</li>
							<li class="active">
								<a href="<?php echo $myabout; ?>">About Me</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="jumbotron">
					<h1>
						Ni'am Tamami S.ST., M.T.
					</h1>
					<p>
						Welcome in my personal web. In this page, you will find about me, my research, publication, my books and the other.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="#">Learn more</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" align="center"><img src="myimg/niam.jpg" class="thumbnail" alt="My picture" width=200></div>
				<div class="col-md-9" align="justify">
					<div class="carousel slide" id="carousel-331883" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-331883">
							</li>
							<li data-slide-to="1" data-target="#carousel-331883">
							</li>
							<li data-slide-to="2" data-target="#carousel-331883">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="myimg/1.jpg">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle1; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip1; ?>
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="myimg/2.jpg">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle2; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip2; ?>
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="myimg/3.jpg">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle3; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip3; ?>
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-331883" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-331883" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<blockquote>
						<small>Ni'am Tamami <cite>Lab AI Robotika D104 PENS</cite></small>
					</blockquote>
				</div>
			</div>
			<blockquote>
				<p>
					<?php echo $myPersonalDescrip; ?>
				</p>
			</blockquote>
			<div class="list-group">
				<a href="#" class="list-group-item active"><h2>Journal</h2></a>
				<?php
				$max = sizeof($myJournal);
				for($i = $max; $i>0;$i--)
					{ ?>
				<div class="list-group-item"><?php echo $myJournal[$i-1];?></div>
				<?php } ?>
			</div>
			<div class="list-group">
				<a href="#" class="list-group-item active"><h2>Publication</h2></a>
				<?php
				$max = sizeof($myPublication);
				for($i = $max; $i>0;$i--)
					{ ?>
				<div class="list-group-item"><?php echo $myPublication[$i-1];?></div>
				<?php } ?>
			</div>
			<div>
					<h2>
						Research Interest
					</h2>
					<p>
						<?php echo $researchArtikel;?>
					</p>
					<img src="myimg/myResearch/1.jpg" class="thumbnail" alt="Research Interest">
					<a href="http://iot.nitbot.com/"><img src="http://nitbot.com/image/cache/catalog/banner/iot-1140x380.png" class="thumbnail" alt="Research Interest"></a>
			</div>
			<div class="list-group">
				<a href="#" class="list-group-item active"><h2>Other</h2></a>
				<div class="list-group-item">
					<a href="<?php echo $myteachingmaterial; ?>">Teaching Material</a>
				</div>
				<div class="list-group-item">
					<a href="<?php echo $myrepo; ?>">Books</a>
				</div>
				<div class="list-group-item">
					<a href="<?php echo $myrepo; ?>">Other</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h2>
						<?php echo $miniArtikel1[0];?>
					</h2>
					<p>
						<?php echo $miniArtikel1[1];?>
					</p>
					<p>
						<a class="btn" href=<?php echo $miniArtikel1[2];?>>View details »</a>
					</p>
					<h2>
						<?php echo $miniArtikel2[0];?>
					</h2>
					<p>
						<div class="carousel slide" id="carousel-331883" data-ride="carousel">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#carousel-331883">
								</li>
								<li data-slide-to="1" data-target="#carousel-331883">
								</li>
								<li data-slide-to="2" data-target="#carousel-331883">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img alt="" src="myimg/myGal/1.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
								<div class="item">
									<img alt="" src="myimg/myGal/2.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
								<div class="item">
									<img alt="" src="myimg/myGal/3.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
							</div> <a class="left carousel-control" href="#carousel-331883" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-331883" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</p>
					<p>
						<a class="btn" href=<?php echo $miniArtikel2[2];?>>View details »</a>
					</p>
					<h2>
						<?php echo $miniArtikel3[0];?>
					</h2>
					<p>
						<?php echo $miniArtikel3[1];?>
					</p>
					<p>
						<a class="btn" href=<?php echo $miniArtikel3[2];?>>View details »</a>
					</p>
				</div>
				<div class="col-md-4">
					<h2>
						<?php echo $miniArtikel4[0];?>
					</h2>
					<p>
						<div class="carousel slide" id="carousel-331883" data-ride="carousel">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#carousel-331883">
								</li>
								<li data-slide-to="1" data-target="#carousel-331883">
								</li>
								<li data-slide-to="2" data-target="#carousel-331883">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img alt="" src="myimg/myFam/1.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
								<div class="item">
									<img alt="" src="myimg/myFam/2.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
								<div class="item">
									<img alt="" src="myimg/myFam/3.jpg">
									<div class="carousel-caption">
										<h4>
											<?php echo ""; ?>
										</h4>
										<p>
											<?php echo $myweb; ?>
										</p>
									</div>
								</div>
							</div> <a class="left carousel-control" href="#carousel-331883" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-331883" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</p>
					<p>
						<a class="btn" href=<?php echo $miniArtikel4[2];?>>View details »</a>
					</p>
					<h2>
						<?php echo $miniArtikel5[0];?>
					</h2>
					<p>
						<?php echo $miniArtikel5[1];?>
					</p>
					<p>
						<a class="btn" href=<?php echo $miniArtikel5[2];?>>View details »</a>
					</p>
					<h2>
						<?php echo $miniArtikel6[0];?>
					</h2>
					<p>
						<?php echo $miniArtikel6[1];?>
					</p>
					<iframe src="https://calendar.google.com/calendar/embed?src=8bqvflkdkcsdfpn6o3rms6i6io%40group.calendar.google.com&ctz=Europe/London" style="border: 0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
					<p>
						<a class="btn" href=<?php echo $miniArtikel6[2];?>>View details »</a>
					</p>
				</div>
				<div class="col-md-4">
					<h2>
						Tweet
					</h2>
					<p>
						<a class="twitter-timeline" href="https://twitter.com/niamtamami" data-widget-id="649853752279588865">Tweets by @niamtamami</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</p>
					<p>
						<a class="btn" href="http://twitter.com/niamtamami/">View details »</a>
					</p>
				</div>

			</div>
		</div>
			<address> 
		<strong>Ni'am Tamami</strong>
		<br><a href="niam@pens.ac.id">niam@pens.ac.id</a> <a href="niamtamami@gmail.com"> | niamtamami@gmail.com</a> 
		<br><a href="http://www.nitbot.com/">nitbot.com</a>
		<br> Lab. AI Robotika D-104
		<br> Kampus PENS
		<br>Jl Raya ITS, Sukolilo, Surabaya 60111, Jawa Timur
	</address>
	</div>
</body>
</html>
