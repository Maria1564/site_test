<?php
function renderCard($img, $title, $chips = [])
{
    ?>
    <div class="card">
        <img src="<?= $img ?>" alt="project" class="card__img" />
        <div class="card__content">
            <h2 class="card__title"><a href="case.php"><?= $title ?></a></h2>

            <?php if (!empty($chips)): ?>
                <div class="card__chips">
                    <?php foreach ($chips as $chip): ?>
                        <div class="chip <?= $chip['class'] ?? '' ?>">
                            <?= $chip['text'] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <?php
}
?>