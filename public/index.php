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
	print_r($_REQUEST);
	?>


	<div class="container">

		<div class="row">

			<!-- the first one is always logo (or page name) -->
			<div class="large-2 medium-4 small-6 columns end">
				<div class="image page">
					<?=($_REQUEST['id'] ? $_REQUEST['id'] : 'picha');?>
				</div>
			</div>

			<?php

			$img = array( 'id' => "abcdefg" );

			foreach ($img as $i) {
				?>
				<div class="large-2 medium-4 small-6 columns end">
					<div class="image" style="background:url('img/<?=$i?>')">
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