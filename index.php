<?php
require __DIR__ . '/head.php';
?>



<article>
    <?php foreach (sortsArrays($articles) as $article) { ?>

        <?php if ($article['id'] != 404) { ?>
            <div class="articleDiv">
                <a href="article.php?id=<?php echo $article['id'] ?>" class="articleTitle">
                    <h2><?php echo $article['title'] ?></h2>
                </a>
                <a href="article.php?id=<?php echo $article['id'] ?>" class="articleImagesA">
                    <img class="articleImages" src="<?php echo $article['image'] ?>" alt="article image">
                </a>
                <p class="articleContent"><?php echo shortenContent($article['content']) ?> </p>
                <div class="articleFooter">
                    <div>
                        <span>Author:</span> <?php echo $article['author'] ?>
                    </div>
                    <div>
                        <span>Published date:</span> <?php echo dateGet($article['date']);?>
                    </div>
                    <div>
                        <span> Likes:</span> <?php echo $article['likes'] ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } ?>

    <?php require __DIR__ . '/footer.php'; ?>
