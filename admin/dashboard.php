<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/main/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/main/head_section.php'); ?>
	<title>Admin Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>BLog World - Dashboard</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<a href="<?php BASE_URL ?>../index.php"> Home </a>
				<span><a href="<?php BASE_URL ?>userProfile.php"><?php echo $_SESSION['user']['username'] ?></a></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<!-- if user is Admin -->
    <?php	if ( in_array($_SESSION['user']['role'], ["Admin"]))   { 
				$_SESSION['message'] = "You are now logged in";
		?>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats d-flex flex-row justify-content-center">
			<a href="users.php" class="first ">
				
				<span>Users</span>
			</a>
			<a href="posts.php">
			<span>Posts</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons d-flex flex-row justify-content-center">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
			<a href="./userProfile.php">Profile</a>
		</div>
	</div>
<?php	} ?>
<!-- If users role is author user wont see admin functions -->
<?php	if ( in_array($_SESSION['user']['role'], ["Author"])) { 
				$_SESSION['message'] = "You are now logged in";
				?>
		<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="justify-content-center">
		<div class="buttons d-flex flex-row justify-content-center">
			<a href="posts.php">Add/Manage Posts</a>
			<a href="./userProfile.php">Profile</a>
		</div>
	</div>
<?php	} ?>
</body>
</html>