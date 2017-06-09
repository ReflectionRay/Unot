<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Unot</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="<?php echo Home_PUC;?>/images/favicon.ico">
	<link rel="Bookmark" href="<?php echo Home_PUC;?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo Home_PUC;?>/dev/styles/contact@dev.css">
</head>
<body>
	<div class="common-logo visible-xs-block">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg logo-left-container">
			<h1 class="logo-left">Unot</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg logo-right-container">
			<h1 class="logo-right">One</h1>
		</div>			
	</div>
	<div class="common-container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg left-container">
			<h1 class="logo-left hidden-xs margin-bottom-60">Unot</h1>
			<div class="tm-left-inner-container">
				<ul class="nav nav-stacked common-nav">
				  <li><a href="/unot/index.php/Home/Index/index"><i class="iconfont icon-yonghu"></i>Home</a></li>
				  <li><a href="/unot/index.php/Home/Sign/index"><i class="iconfont icon-denglu"></i>Sign Up</a></li>
				  <li><a href="/unot/index.php/Home/Personal/index"><i class="iconfont icon-gerenxinxi"></i>Personal</a></li>
				  <li><a href="/unot/index.php/Home/Contact/index"><i class="iconfont icon-lianxi"></i>Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- left section -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
			<h1 class="logo-right hidden-xs margin-bottom-60">White</h1>
			<div class="tm-right-inner-container">
				<h1 class="common-header">Contact</h1>
				<div class="row">
                    <!-- <div class="col-sm-12 col-md-12">
                        <div id="map-canvas"></div>
                        <address>
						  <strong>Black White Company</strong><br>
						  180 Aenean Quis Semper<br>
						  Maecenas Adipiscing, Feugiat 10450<br><br>
						  Phone: 010-060-0160<br>
                          Email: info@company.com<br><br>
						</address>
                    </div> -->

                    <div class="col-sm-12 col-md-12">
                        <form action="#" method="post">

                            <div class="form-group">
                                <input type="text" id="contact_name" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_email" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" class="form-control" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" class="form-control" rows="9" placeholder="Write a message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>

                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
				<footer>
					<p class="col-lg-6 col-md-6 col-sm-12 col-xs-12 common-copyright">Copyright &copy; 2084 Your Company Name Collect from <a href="http://www.unot.one/" title="Unot" target="_blank">Unot</a> - More Found <a href="http://www.unot.one/" target="_blank" title="Unot">UNOT.ONE</a></p>
					<p class="col-lg-6 col-md-6 col-sm-12 col-xs-12 common-social">
						<a href="#"><i class="iconfont icon-tuichu">退出</i></a>
						<a href="#"><i class="iconfont icon-rili"></i>日历</a>
						<a href="#"><i class="iconfont icon-shuaxin">刷新</i></a>
						<a href="#"><i class="iconfont icon-guanlian">分享</i></a>
						<a href="#"><i class="iconfont icon-shezhi">设置</i></a>
					</p>
				</footer>
			</div>	
		</div> <!-- right section -->
	</div>
	<script src="<?php echo Home_PUC;?>/dev/scripts/contact@dev.js"></script>
</body>
</html>