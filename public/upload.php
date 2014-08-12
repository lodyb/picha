
<?php

	// make sure channels can only be ascii
	function get_valid_channel($chan) {
		if (!$chan) return null;
		if (mb_check_encoding($chan, 'ASCII')) {
			return $chan;
		}
		return null;
	}

	// upload and add to db
	if (isset($_FILES['file_upload'])) {
	
		if (preg_match('/[.](jpg)|(gif)|(png)$/',
			$_FILES['file_upload']['name']) &&
			$_FILES['file_upload']['size'] < 5242880) {
			$ext = substr($_FILES['file_upload']['name'], -4);
			$source = $_FILES['file_upload']['tmp_name'];
			$target = 'img/' . uniqid('user-') . '-' . date('d-m-Y') . $ext;
			move_uploaded_file($source, $target);
			if (file_exists($target)) {
				// add to db
				$new_image = array(
					':image_id' => substr($target, 4),
					':ip' => $_SERVER['REMOTE_ADDR'],
					':like' => 0,
					':dislike' => 0,
					':date' => date("Y-m-d H:i:s"),
					':channel' => get_valid_channel($_REQUEST['chan'])
				);
				$db = new PDO("mysql:host=localhost; dbname=picha;", 'root', '');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$s = $db->prepare("insert into images (`image_id`, `ip`, `like`, `dislike`, `channel`, `date`) values (:image_id, :ip, :like, :dislike, :channel, :date);");
				$s->execute($new_image);
				echo 'added new image :3';
			}
			else {
				echo 'upload failed sorriiii';
			}
		}
		else {
			echo 'invalid upload file awwww sowwy :B';
		}
	}
	
?>
