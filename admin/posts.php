<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/main/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/main/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/main/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php $posts = getAllPosts(); ?>
	<title>Manage Posts</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/main/navbar.php') ?>
	
	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/main/menu.php') ?>
		<!-- Display records from DB-->
		<div class="table-div"  style="width: 80%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/admin/main/messages.php') ?>
			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>No</th>
						<th>Author</th>
						<th>Title</th>	
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as $key => $post): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $post['author']; ?></td>
							<td>
								<a 	target="_blank"
								href="../show_post.php?id=<?php echo $post['id'];?>">
									<?php echo $post['title']; ?>	
								</a>
							</td>
								<td>
								<a class="fa fa-pencil btn edit"
									href="create_post.php?edit-post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete" 
									href="create_post.php?delete-post=<?php echo $post['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
	</div>
</body>
</html>