<?php global $news; ?>


<?php if (isset($news) && count($news) > 0) {
    foreach ($news as $post) { ?>
        <article class="message">
            <div class="message-header">
                <p><?php echo $post->title ?></p>
                <?php if (getUser() != null) { ?>
                    <a href="/edit.php?id<?php echo $post->id ?>"><i class="fa fa-edit"></i></a>
                <?php } ?>
            </div>
            <div class="message-body">
                <?php echo $post->body ?>
            </div>
        </article>
    <?php }
} ?>

