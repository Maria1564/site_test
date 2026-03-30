<?php
function renderBlogCard($imageSrc, $title, $text, $date, $link = 'post.php') {
?>
<div class="blog">
    <img src="<?php echo htmlspecialchars($imageSrc); ?>" alt="blog img" class="blog__img">
    <div class="blog__content">
        <h2 class="blog__title"><a href="<?php echo htmlspecialchars($link); ?>" ><?php echo htmlspecialchars($title); ?></a></h2>
        <p class="blog__text"><?php echo htmlspecialchars($text); ?></p>
        <span class="blog__date no-oldstyle-numbers"><?php echo htmlspecialchars($date); ?></span>
    </div>
</div>
<?php
}
?>