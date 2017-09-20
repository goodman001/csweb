<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb" lang="zh-CN">
	<head>
		<title>JHCL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="domain shopping">
		<meta name="google-signin-scope" content="profile email">
    	<meta name="google-signin-client_id" content="324383594858-kd69nvh9bcbeo1h11cd2ulesv6gecmn8.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body >
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#example-navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">菜鸟教程</a>
			</div>
			<div class="collapse navbar-collapse " id="example-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">iOS</a></li>
					<li><a href="#">SVN</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Java <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">jmeter</a></li>
							<li><a href="#">EJB</a></li>
							<li><a href="#">Jasper Report</a></li>
							<li class="divider"></li>
							<li><a href="#">分离的链接</a></li>
							<li class="divider"></li>
							<li><a href="#">另一个分离的链接</a></li>
						</ul>
						
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo U('Index/showshoppingcart');;?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
					</li>
					<li>
						<a href="<?php echo U('Client/index');;?>"><i class="fa fa-user-o" aria-hidden="true"></i> My Account</a>
					</li>
					<li>
						<a href="<?php echo U('Login/logout');;?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
					</li>
				</ul>
			</div>
			</div>
		</nav>
		<div class="container" style="padding:20px;">
			<div class="row">
				<h3><i class="fa fa-user" aria-hidden="true"> User Login</i></h3>
				<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark">login</div>
				<script>
				  function onSignIn(googleUser) {
					// Useful data for your client-side scripts:
					var profile = googleUser.getBasicProfile();
					console.log("ID: " + profile.getId()); // Don't send this directly to your server!
					console.log('Full Name: ' + profile.getName());
					console.log('Given Name: ' + profile.getGivenName());
					console.log('Family Name: ' + profile.getFamilyName());
					console.log("Image URL: " + profile.getImageUrl());
					console.log("Email: " + profile.getEmail());

					// The ID token you need to pass to your backend:
					var id_token = googleUser.getAuthResponse().id_token;
					console.log("ID Token: " + id_token);
				  };
				</script>
			</div>
		</div>
	</body>
</html>