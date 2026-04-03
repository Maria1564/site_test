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
    <link rel="stylesheet" href="styles/direction.css?v=20260491">
    <link rel="stylesheet" href="styles/typography.css?v=20260490">
    <link rel="stylesheet" href="styles/section-title.css?v=20260490">
    <link rel="stylesheet" href="styles/case-card.css?v=20260490">
    <link rel="stylesheet" href="styles/sections.css?v=20260491">
    <link rel="stylesheet" href="styles/internal-pages.css?v=20260490">
    <link rel="stylesheet" href="styles/form.css?v=20260490">
    <link rel="stylesheet" href="styles/header.css?v=20260490">

</head>

<body>
    <?php
    $directions = [
        'sites' => [
            'title' => 'Разработка сайтов под ключ',
            'tags' => [
                'Лендинги',
                'Корпоративные сайты',
                'Интернет-каталоги',
                'Промо-сайты',
                'Интернет-магазины',
                'Сайты на Tilda',
                'Сайты на WordPress',
                'Сайты на 1С-Битрикс',
            ],
        ],
        'support' => [
            'title' => 'Поддержка сайтов',
            'tags' => [
                'Техническая поддержка сайтов',
                'Выполнение работ на сайтах',
                'Ремонт и восстановление сайта',
                'Поддержка 1С-Битрикс',
                'Лечение от вирусов',
                'Поддержка WordPress',
                'Поддержка Tilda',
                'Приведение к требованиям 152-ФЗ',
            ],
        ],
        'crm' => [
            'title' => 'CRM Системы',
            'tags' => [
                'Внедрение и поддержка AmoCrm',
                'Внедрение и поддержка Битрикс 24',
                'Телефония и интеграция',
            ],
        ],
        'marketing' => [
            'title' => 'Реклама и продвижение',
            'tags' => [
                'Медийная реклама',
                'Яндекс Директ',
                'SEO-продвижение',
            ],
        ],
        'automation' => [
            'title' => 'Автоматизация',
            'tags' => [
                'Бизнес-процессы',
                'Интеграции сервисов',
                'Автоматизация продаж',
            ],
        ],
    ];

    $directionId = $_GET['id'] ?? 'sites';
    $direction = $directions[$directionId] ?? $directions['sites'];
    ?>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>
    <?php include __DIR__ . '/components/section-title.php'; ?>
    <?php include __DIR__ . '/components/section-direction-hero.php'; ?>

    <?php
    renderDirectionHero(
        ['Главная'],
        $direction['title'],
        'Разрабатываем и поддерживаем сайты, внедряем CRM и телефонию, поддерживаем уже готовые проекты',
        'Запросить коммерческое',
        '../img/bg.png',
        'internal-page__breadcrumb',
    );
    ?>
    <div class="container">
        <?php include __DIR__ . '/components/section-intro.php'; ?>

        <section class="services">
            <?php
            renderSectionTitle(
                'Наши услуги',
                'Сделаем проект любого типа в корректные сроки'
            );
            ?>
            <div class="services__list">
                <?php foreach ($direction['tags'] as $tag): ?>
                    <div class="services__card">
                        <div class="services__info">
                            <h4 class="services__title"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></h4>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.</p>
                        </div>
                        <a href="service.php" class="services__link">
                            <span class="services__link-text">Подробнее</span>
                            <div class="services__link-icon"><img src="./img/arrow-right.svg" alt="" class="arrow"></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <?php include __DIR__ . '/components/section-portfolio.php'; ?>

        <?php include __DIR__ . '/components/section-cta.php'; ?>

        <?php include __DIR__ . '/components/section-benefits.php'; ?>

        <?php include __DIR__ . '/components/section-tariffs.php'; ?>

        <?php include __DIR__ . '/components/section-about.php'; ?>

        <?php
        include __DIR__ . '/components/form.php';

        renderForm('internal-page__form');
        ?>

        <?php include __DIR__ . '/components/footer.php'; ?>

    </div>


    <script src="script.js?v=20260330"></script>
    <script src="popup.js?v=20260330"></script>
</body>

</html>
