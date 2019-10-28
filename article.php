<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

if (isset($_GET['id']) && $_GET['id'] <= 10 && $_GET['id'] > 0) {
    $article = articleGet($articles, $_GET['id']);
}elseif(!isset($_GET['id']) || $_GET['id'] > 10 || $_GET['id'] < 1) {
    $article = articleGet($articles, 404);
}
$date = dateGet($article['date']);
?>


<?php require __DIR__ . '/head.html'; ?>

<body>
    <article>
        <div class="articleDiv">
            <p class="date"><?php echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];?></p>
            <h2 class="articleTitle"> <?php echo $article['title']; ?> </h2>
            <img src="<?php echo $article['image'] ?>" alt="" class="articlePageImage" >
            <p class="articles"><?php echo $article['content']; ?> </p>
        </div>
        <?php require __DIR__ . '/footer.php'; ?>
