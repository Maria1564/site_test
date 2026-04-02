<?php
function renderBreadcrumbItems($items = [], $className = '')
{
    $classes = trim('breadcrumbs ' . $className);
?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach ($items as $item): ?>
            <span class="breadcrumbs__item"><?= $item ?></span>
        <?php endforeach; ?>
    </div>
<?php
}

function renderBreadcrumbTitle($title = '')
{
    if (!$title) {
        return;
    }
?>
    <h1 class="title"><?= $title ?></h1>
<?php
}

function renderBreadcrumbs($items = [], $title = '', $className = '')
{
    renderBreadcrumbItems($items, $className);
    renderBreadcrumbTitle($title);
}
?>
