<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

if (isset($_GET['id']) && $_GET['id'] <= 10 ) {
	$article = articleGet($articles, $_GET['id']);
}else {
	$article = articleGet($articles, 404);
} 
?>


<?php require __DIR__ . '/head.html'; ?>

<body>
	<article >
		<h2> <?php echo $article['title']; ?> </h2>
		<img src="<?php echo $article['image'] ?>" alt="" class="articlePageImage" >
		<p class="articles"><?php echo $article['content']; ?> </p>

<?php require __DIR__ . '/footer.php'; ?>
