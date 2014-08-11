<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>picha</title>
	<link href="css/foundation.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/vendor/modernizr.js"></script>
</head>

<body>

	<?php 
	$a = array();
	$a[] = array(
			'id' => 'test',
			'like' => 52,
			'dislike' => 21,
		);

	$a[] = array(
			'id' => 'abcd',
			'like' => 1,
			'dislike' => 1,
		);

	$a[] = array(
			'id' => 'qwert',
			'like' => 100,
			'dislike' => 0,
		);

	$a[] = array(
			'id' => 'bzwse',
			'like' => 0,
			'dislike' => 100,
		);

	$a[] = array(
			'id' => 'yetdf',
			'like' => 2,
			'dislike' => 42,
		);

	$a[] = array(
			'id' => 'urdgfd',
			'like' => 42,
			'dislike' => 2,
		);

	$a[] = array(
			'id' => 'efcstt',
			'like' => 52,
			'dislike' => 52,
		);


	// $mysqli = mysqli_connect("127.0.0.1", "root", "", "picha");
	// $q = mysqli_query($mysqli, "SELECT * FROM images");
	// while ($r = mysqli_fetch_assoc($q)) $a[] = $r;
	// print("<pre>");
	// print_r($a);exit;
	?>
	<div class="container">

		<div class="row">

			<!-- the first one is always logo (or page name) -->
			<div class="large-3 medium-4 small-6 columns end">
				<div class="image page">
					<span><?=($_REQUEST['id'] ? $_REQUEST['id'] : 'picha');?></span>
<!-- 					<form  enctype="multipart/form-data" action="upload.php<?=($_REQUEST['id']) ? '?chan=' . $_REQUEST['id'] : ''; ?>" method="post">
						<input type="file" name="file_upload">
						<input type="submit" value="ul">
					</form> -->
				</div>
			</div>

			<?php

			for ($i=0; $i < count($a); $i++) { 
				?>
				<div class="large-3 medium-4 small-6 columns end">
					<div class="image">
						<span><?php print_r($a[$i]); ?></span>
					</div>
				</div>
				<?php
			}
			?>

		</div>

	</div>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>$(document).foundation();</script>
</body>

</html>