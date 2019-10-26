<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

//dateGet($articles[0]['date']);
//Optimera alla bilder!!

?>


<?php require __DIR__ . '/head.html'; ?>
<article>
	<?php foreach (sortsArrays($articles) as $article) { ?>
		<?php if ($article['id'] != 404) { ?>
			<a href="article.php?id=<?php echo $article['id'] ?>" class="articleTitle">
				<h2><?php echo $article['title'] ?></h2>
			</a>
			<a href="article.php?id=<?php echo $article['id'] ?>" class="articleImagesA">
				<img class="articleImages" src="<?php echo $article['image'] ?>" alt="article image">
			</a>
			<p class="articleContent"><?php echo shortenString($article['content']) ?> </p>
			<div class="articleFooter">
				<div>
					<span>Author:</span> <?php echo $article['author'] ?>
				</div>
				<div>
					<?php $date = dateGet($article['date']); ?>
					<span>Published date:</span> <?php echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];?>
				</div>
				<div>
					<span> Likes:</span> <?php echo $article['likes'] ?>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
	<?php require __DIR__ . '/footer.php'; ?>
