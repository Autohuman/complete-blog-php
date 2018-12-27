<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php  include(ROOT_PATH . '/includes/head_section.php'); ?>
<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
	<title>管理 | 创建推送</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/includes/navbar.php') ?>