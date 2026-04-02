<?php
function renderSectionTitle($badge = '', $title = '', $className = '', $description = '')
{
    $classes = trim('section-title ' . $className);
?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?php if ($badge): ?>
            <div class="section-title__badge"><?= $badge ?></div>
        <?php endif; ?>

        <?php if ($description): ?>
            <div class="section-title__text">
                <h2 class="section-title__content">
                    <?= $title ?>
                </h2>
                <p class="section-title__description">
                    <?= $description ?>
                </p>
            </div>
        <?php else: ?>
            <h2 class="section-title__content">
                <?= $title ?>
            </h2>
        <?php endif; ?>
    </div>
<?php
}
?>
