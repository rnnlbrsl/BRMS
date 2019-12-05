<?php
	if (isset($_POST)) {
		$id = $_POST['id'];
		unlink('assets/image/gallery/'.$id);
	}
?>