<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

// dateGet($articles[0]['date']);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Plain News</title>
</head>
<body>
	<header>
		<h1>"Fuck the news" news</h1>
		<ul class="nav">
			<li class="liiteam"><a href="index.php" class="linkHome">Home</a></li>
			<li class="dropdown">
				More
				<ul class="dropdown-content">
					<li class="liIteamDropdown"><a href="#" class="linksDropdown">Sport</a></li>
					<li class="liIteamDropdown"><a href="#" class="linksDropdown">Politik</a></li>
				</ul></li>
			</ul>
		</header>
		<article>
			<?php foreach (sortingArrays($articles) as $article) { ?>
				<h2><?php echo $article['title'] ?></h2>
				<img class="articleImages" src="<?php echo $article['image'] ?>" alt="article image">
				<p class="articleContent"><?php echo $article['content']?> </p>
				<div class="articleFooter">
					<h3><?php echo $article['author'] ?></h3>
					<?php echo $article['date'] ?>
				</div>
			<?php } ?>

		</article>
		<footer>

		</footer>
		<script type="text/javascript" src="script.js">

		</script>
	</body>
	</html>
