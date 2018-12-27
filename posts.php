<?php  include('config.php'); ?>
<?php  include(ROOT_PATH . '/includes/check_login.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/includes/user_post.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		  <meta charset="utf-8">
		  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
		  <!-- Styling for public area -->
		  <link rel="stylesheet" href="static/css/public_styling.css">
		  <meta charset="UTF-8">
    	<link rel="stylesheet" href="static/css/user_post.css">
		  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
	    <!-- Get all topics -->
		<?php $topics = getAllTopics();	?>
		<title>管理 | 创建推送</title>
	</head>
	<body>
		<!-- user navbar -->
		<?php include(ROOT_PATH . '/includes/navbar.php') ?>
		<div class="main_body">
			<div class="rightBody"><!-- Middle form - to create and edit  -->
				<h1 class="page-title">创 建 推 送</h1>
				<form  method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'posts.php'; ?>" >
					<!-- validation errors for the form -->
					<?php include(ROOT_PATH . '/includes/errors.php') ?>

					<!-- if editing post, the id is required to identify that post -->
					<!-- 此处删去了编辑的验证部分 -->
					<div class="form-group">
					    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title-input" placeholder="标题">
					</div>
				    <div class="form-group">
				    	<label for="file-upload-label" id="file-upload-label">特色图片</label>
				    	<input type="file" class="form-control-file" name="featured_image"  id="file-upload">
				    </div>
				    <div class="form-group">
				    	<textarea name="body" id="body" cols="30" rows="10" class="form-control"><?php echo $body; ?></textarea>
				    </div>
				    <div class="form-group">
				    	<select class="form-control" name="topic_id" id="exampleFormControlSelect1">
						  <option disabled selected value="">选择主题</option>
						  <?php foreach ($topics as $topic): ?>
						    <option value="<?php echo $topic['id']; ?>">
							  <?php echo $topic['name']; ?>
							  </option>
						  <?php endforeach ?>

				    	</select>
					</div>
					<div class="form-group">

								<label style="display:none;" for="publish">
									发布
									<input type="checkbox" style="display:none;" value="1" name="publish" checked="checked">&nbsp;
								</label>

					</div>
					<div class="form-group"><button type="submit" name="create_post" class="btn btn-outline-success">创建</button></div>
					</form>
			</div>
		</div>
	</body>
</html>
<script>
	CKEDITOR.replace('body');
</script>
