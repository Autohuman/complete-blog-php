<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>管理员 | 控制台</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>QunXing讨论区 - 管理</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">登出</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>用户管理</span>
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>推送管理</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>主题管理</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">添加用户</a>
			<a href="posts.php">添加文章</a>
		</div>
	</div>
</body>
</html>
