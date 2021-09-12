<?php  include('config.php'); ?>
<?php  include('main/registration_login.php'); ?>
<?php  include('main/head_section.php'); ?>
	<title>Blog World | Sign in </title>
</head>
<body>
<div class="container">
	
	<?php include( ROOT_PATH . '/main/navbar.php'); ?>
	

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/main/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username" style="width:100%;">
			<input type="password" name="password" placeholder="Password" style="width:100%;">
			<button type="submit" class="btn btn-primary w-100" name="login_btn">Login</button>
			<a href="./forgetpassword.php">Forget Password</a>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>