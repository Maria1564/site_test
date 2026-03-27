<?php
function renderBreadcrumbs($items = [], $title = '') {
?>
    <div class="breadcrumbs">
        <?php foreach ($items as $item): ?>
            <span class="breadcrumbs__item"><?= $item ?></span>
        <?php endforeach; ?>
    </div>

    <?php if ($title): ?>
        <h1 class="title"><?= $title ?></h1>
    <?php endif; ?>
<?php
}
?>