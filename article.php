<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

if (isset($_GET['id'])) {
	$article = articleGet($articles, $_GET['id']);
}



?>


<?php require __DIR__ . '/head.html'; ?>

<body>
	<article >
		<h2> <?php echo $article['title']; ?> </h2>
		<img src="<?php echo $article['image'] ?>" alt="" class="articleImage" >
		<p class="articles"><?php echo $article['content']; ?> </p>
	<?php require __DIR__ . '/footer.php'; ?>
