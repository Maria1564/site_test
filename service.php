<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Направление</title>
    <link rel="stylesheet" href="styles/shared.css?v=20260490" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260490" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260490">
    <link rel="stylesheet" href="styles/footer.css?v=20260490">
    <link rel="stylesheet" href="styles/popups.css?v=20260490">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260490">
    <link rel="stylesheet" href="styles/typography.css?v=20260490">
    <link rel="stylesheet" href="styles/section-title.css?v=20260490">
    <link rel="stylesheet" href="styles/case-card.css?v=20260490">
    <link rel="stylesheet" href="styles/sections.css?v=20260491">
    <link rel="stylesheet" href="styles/internal-pages.css?v=20260490">
    <link rel="stylesheet" href="styles/form.css?v=20260490">
    <link rel="stylesheet" href="styles/header.css?v=20260490">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>
    <?php include __DIR__ . '/components/section-direction-hero.php'; ?>

    <?php
    renderDirectionHero(
        ['Главная', 'Название направления'],
       'Разработаем лендинг под ключ от 2 недель',
        'Разрабатываем и поддерживаем сайты, внедряем CRM и телефонию, поддерживаем уже готовые проекты',
        'Запросить коммерческое',
        '../img/bg.png',
        'internal-page__breadcrumb',
    );
    ?>
    <div class="container">
        <?php include __DIR__ . '/components/section-intro.php'; ?>

        <?php include __DIR__ . '/components/section-portfolio.php'; ?>

        <?php include __DIR__ . '/components/section-cta.php'; ?>

        <?php include __DIR__ . '/components/section-benefits.php'; ?>

        <?php include __DIR__ . '/components/section-tariffs.php'; ?>

        <?php include __DIR__ . '/components/section-stages.php'; ?>

        <?php include __DIR__ . '/components/section-about.php'; ?>

        <?php
        include __DIR__ . '/components/form.php';

        renderForm('internal-page__form');
        ?>

        <?php include __DIR__ . '/components/footer.php'; ?>

    </div>


    <script src="script.js?v=20260330"></script>
    <script src="popup.js?v=20260330"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="slider.js?v=20260330"></script>
</body>

</html>
