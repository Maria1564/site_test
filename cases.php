<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог</title>
    <link rel="stylesheet" href="styles/fonts.css?v=20260335" />
    <link rel="stylesheet" href="styles/shared.css?v=20260335" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
    <link rel="stylesheet" href="styles/footer.css?v=20260335">
    <link rel="stylesheet" href="styles/popups.css?v=20260335">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260335">
    <link rel="stylesheet" href="styles/case-card.css?v=20260335">
    <link rel="stylesheet" href="styles/cases.css">

</head>

<body>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>

    <div class="container">
        <div class="cases__wrapper">
            <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
            <?php
            renderBreadcrumbs(
                ['Главная'],
                'Наши работы'
            );
            ?>
            <div class="cases__list">
                <?php include __DIR__ . '/components/case-card.php'; ?>

                <?php
                renderCard(
                    'img/project1.png',
                    'Разработка сайта детского лагеря Рекрут',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
                <?php
                renderCard(
                    'img/proj2.png',
                    'Дизайн сайта для производителя серверного оборудования в Москве и Московской области',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
                <?php
                renderCard(
                    'img/proj3.png',
                    'Разработка сайта детского лагеря Рекрут',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
                <?php
                renderCard(
                    'img/proj4.png',
                    'Разработка сайта детского лагеря Рекрут',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
                <?php
                renderCard(
                    'img/proj5.png',
                    'Разработка сайта детского лагеря Рекрут',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
                <?php
                renderCard(
                    'img/proj6.png',
                    'Разработка сайта детского лагеря Рекрут',
                    [
                        ['text' => 'WordPress'],
                        ['text' => 'Лендинг'],
                        ['text' => '2029', 'class' => 'no-oldstyle-numbers']
                    ]
                );
                ?>
            </div>
            <button class="cases__btn">показать еще</button>

            <?php include __DIR__ . '/components/footer.php'; ?>
        </div>
    </div>

    <script src="script.js?v=20260329"></script>
    <script src="popup.js?v=20260329"></script>
</body>

</html>