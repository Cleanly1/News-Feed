<?php
require __DIR__ . '/head.php';

if (isset($_GET['id']) && $_GET['id'] <= 10 && $_GET['id'] > 0) {
    $article = articleGet($articles, $_GET['id']);
}
elseif (!isset($_GET['id']) || $_GET['id'] > 10 || $_GET['id'] < 1) {
    $article = articleGet($articles, 404);
}

?>

<body>
    <article>
        <div class="articleDiv">
            <p class="date"><?php echo dateGet($article['date']);?></p>
            <h2 class="articleTitle"> <?php echo $article['title']; ?> </h2>
            <img src="<?php echo $article['image'] ?>" alt="" class="articlePageImage" >
            <p class="articles"><?php echo $article['content']; ?> </p>
        </div>
<?php require __DIR__ . '/footer.php'; ?>
