<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

//dateGet($articles[0]['date']);

// 
?>


<?php require __DIR__ . '/head.html'; ?>
<article>
	<?php foreach (sortingArrays($articles) as $article) { ?>
		<a href="article.php?id=<?php echo $article['id'] ?>" class="articleTitle">
			<h2><?php echo $article['title'] ?></h2>
		</a>
		<img class="articleImages" src="<?php echo $article['image'] ?>" alt="article image">
		<p class="articleContent"><?php echo $article['content']?> </p>
		<div class="articleFooter">
			<b>Author:</b> <?php echo $article['author'] ?>
			<?php $date = dateGet($article['date']); ?>
			<b>Published date:</b> <?php echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];?>
			<b>Likes:</b> <?php echo $article['likes'] ?>
		</div>
	<?php } ?>
	<?php require __DIR__ . '/footer.php'; ?>
