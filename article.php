<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

if (isset($_GET['id'])) {
	$article = articleGet($articles, $_GET['id']);
}

	

?>
