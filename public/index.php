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
	$mysqli = mysqli_connect("127.0.0.1", "root", "yukkuri", "picha");
	$q = mysqli_query($mysqli, "SELECT * FROM images");
	while ($r = mysqli_fetch_assoc($q)) $a[] = $r;
	// print("<pre>");
	// print_r($a);exit;
	?>
	<div class="container">

		<div class="row">

			<!-- the first one is always logo (or page name) -->
			<div class="large-2 medium-4 small-6 columns end">
				<div class="image page">
					<span><?=($_REQUEST['id'] ? $_REQUEST['id'] : 'picha');?></span>
				</div>
			</div>

			<?php

			for ($i=0; $i < count($a); $i++) { 
				?>
				<div class="large-2 medium-4 small-6 columns end">
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