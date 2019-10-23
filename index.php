<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";



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
			<li class="liiteam"><a href="#">Home</a></li>
			<li class="dropdown">
				More
				<ul class="dropdown-content">
					<li class="liiteam">hej</li>
					<li class="liiteam">hej</li>
				</ul></li>
			</ul>
		</header>
		<article class="">
			<?php foreach (sortingArrays($articles) as $article) { ?>
				<img class="articleImages" src="<?php echo $article['image'] ?>" alt="">
				<p><?php echo $article['content']?> </p>
			<?php } ?>
		</article>
		<footer>

		</footer>
		<script type="text/javascript" src="script.js">

		</script>
	</body>
	</html>
