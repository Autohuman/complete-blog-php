<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php  include('includes/head_section.php'); ?>

<title>QunXing讨论区 | 注册 </title>
</head>
<body>

	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
<div class="container" style="padding-top:70px;padding-bottom:70px;background-image:'ROOT_PATH . ''/static/images/reg_bk.jpg'">
	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>加入我们</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="用户名">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="邮箱">
			<input type="password" name="password_1" placeholder="密码">
			<input type="password" name="password_2" placeholder="确认密码">
			<button type="submit" class="btn" name="reg_user">注册</button>
			<p>
				已有账号? <a href="login.php">登录</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->
