<?php foreach ($pageData as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['synopsis'] ?>
    </div>
    <p><a href="content/<?php echo $news_item['page'] ?>">View article</a></p>

<?php endforeach ?>