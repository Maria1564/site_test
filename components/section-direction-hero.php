<?php
include_once __DIR__ . '/breadcrumbs.php';

function renderDirectionHero(
    $breadcrumbs = [],
    $title = '',
    $description = '',
    $buttonText = '',
    $background = '',
    $breadcrumbsClass = ''
) {
    $style = $background ? "--header-bg: url('{$background}');" : '';
?>
    <header class="header" style="<?= htmlspecialchars($style, ENT_QUOTES, 'UTF-8') ?>">
        <div class="header__wrapper">
            <div class="container">
                <?php renderBreadcrumbItems($breadcrumbs, $breadcrumbsClass); ?>
                <h1 class="header__title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
                <?php if ($description): ?>
                    <p class="header__description"><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
                <?php if ($buttonText): ?>
                    <button class="direction__btn header__btn"><?= htmlspecialchars($buttonText, ENT_QUOTES, 'UTF-8') ?></button>
                <?php endif; ?>
            </div>
        </div>
    </header>
<?php
}
?>
