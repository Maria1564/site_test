<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
    <link rel="stylesheet" href="styles/fonts.css?v=20260490" />
    <link rel="stylesheet" href="styles/shared.css?v=20260490" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260490" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260490">
    <link rel="stylesheet" href="styles/footer.css?v=20260490">
    <link rel="stylesheet" href="styles/popups.css?v=20260490">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260490">
    <link rel="stylesheet" href="styles/services.css?v=20260490">
</head>

<body>
    <?php
    $services = [
        [
            'id' => 'sites',
            'title' => 'Разработка сайтов',
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
        [
            'id' => 'support',
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
        [
            'id' => 'crm',
            'title' => 'CRM Системы',
            'tags' => [
                'Внедрение и поддержка AmoCrm',
                'Внедрение и поддержка Битрикс 24',
                'Телефония и интеграция',
            ],
        ],
        [
            'id' => 'marketing',
            'title' => 'Реклама и продвижение',
            'tags' => [
                'Медийная реклама',
                'Яндекс Директ',
                'SEO-продвижение',
            ],
        ],
        [
            'id' => 'automation',
            'title' => 'Автоматизация',
            'tags' => [
                'Бизнес-процессы',
                'Интеграции сервисов',
                'Автоматизация продаж',
            ],
        ],
    ];
    ?>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>

    <div class="container">
        <div class="services__wrapper">
            <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
            <?php
            renderBreadcrumbs(
                ['Главная'],
                'Услуги'
            );
            ?>

            <div class="services__list">
                <?php foreach ($services as $service): ?>
                    <div class="services__item" onclick="window.location.href='direction.php?id=<?= urlencode($service['id']) ?>'">
                        <div class="services__left">
                            <div class="services__info">
                                <h2 class="services__title"><?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                                <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                                </p>
                            </div>
                            <div class="services__tags">
                                <?php foreach ($service['tags'] as $tag): ?>
                                    <a href="post.php" class="tag"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="services__right">
                            <span>Подробнее</span>
                            <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="script.js?v=20260329"></script>
    <script src="popup.js?v=20260329"></script>
</body>

</html>
