<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Направление</title>
    <link rel="stylesheet" href="styles/shared.css?v=20260338" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
    <link rel="stylesheet" href="styles/footer.css?v=20260335">
    <link rel="stylesheet" href="styles/popups.css?v=20260335">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260335">
    <link rel="stylesheet" href="styles/direction.css?v=20260336">
    <link rel="stylesheet" href="styles/typography.css?v=20260336">
    <link rel="stylesheet" href="styles/section-title.css?v=20260402">
    <link rel="stylesheet" href="styles/case-card.css?v=20260335">
    <link rel="stylesheet" href="styles/sections.css?v=20260404">
    <link rel="stylesheet" href="styles/form.css?v=20260335">

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

    <header class="header" style="--header-bg: url('../img/bg.png');">
        <div class="header__wrapper">
            <div class="container">
                <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
                <?php renderBreadcrumbItems(['Главная'], 'direction_breadcrunb'); ?>
                <h1 class="header__title"><?= htmlspecialchars($direction['title'], ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="header__description">Разрабатываем и поддерживаем сайты, внедряем CRM и телефонию,
                    поддерживаем уже готовые проекты</p>
                <button class="direction__btn header__btn">Запросить коммерческое</button>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="company-intro">
            <h2 class="company-intro__title">Делаем сайты с 2015 года по всей России</h2>

            <div class="company-intro__content">
                <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и
                    мощный инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                    собственного веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">сколько
                        стоит сделать сайт и от
                        чего зависит цена?</span>
                </p>
                <p class="paragraph">Ответ на этот вопрос многогранен, ведь стоимость <span
                        class="text_white_underline">зависит от множества факторов</span>,
                    начиная с типа сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно
                    разберём ключевые аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели
                    и бюджет.</p>
                <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и
                    мощный инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                    собственного веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">сколько
                        стоит сделать сайт и от
                        чего зависит цена?</span>
                </p>
                <p class="paragraph">Ответ на этот вопрос многогранен, ведь стоимость <span
                        class="text_white_underline">зависит от множества факторов</span>,
                    начиная с типа сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно
                    разберём ключевые аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели
                    и бюджет.</p>
            </div>
        </section>

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
                        <a href="#" class="services__link">
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

        <section class="tariffs">
            <?php
            renderSectionTitle(
                'Цены',
                'Цена каждого проекта определяется индивидуально',
                "",
                "Но примерный порядок текущих цен можно определить исходя из стоимости часа сотрудника. Ниже представлены примерные цены на некоторые виды услуг"
            );
            ?>

            <div class="tariffs__list">
                <div class="tariffs__card">
                    <div class="tariffs__left">
                        <h4 class="tariffs__title">Лендинги</h4>
                        <p class="tariffs__description">Создаётся на no-code платформе с уникальным дизайном под вас</p>
                    </div>
                    <div class="tariffs__right">
                        <span class="tariffs__label-price">Цена</span>
                        <span class="tariffs__price">от 50 000 рублей</span>
                    </div>
                </div>
                <div class="tariffs__card">
                    <div class="tariffs__left">
                        <h4 class="tariffs__title">Корпоративные сайты</h4>
                        <p class="tariffs__description">Делаем маленький лендинг до 8 экранов очень быстро, с
                            минимальными правками и частично уникальным дизайном. Приоритет — скорость </p>
                    </div>
                    <div class="tariffs__right">
                        <span class="tariffs__label-price">Цена</span>
                        <span class="tariffs__price">от 200 000 рублей</span>
                    </div>
                </div>
                <div class="tariffs__card">
                    <div class="tariffs__left">
                        <h4 class="tariffs__title">Интернет-магазины</h4>
                        <p class="tariffs__description">Когда нужна админка и разработка на полноценном html+css</p>
                    </div>
                    <div class="tariffs__right">
                        <span class="tariffs__label-price">Цена</span>
                        <span class="tariffs__price">от 500 000 рублей</span>
                    </div>
                </div>

                <div class="tariffs__card">
                    <div class="tariffs__left">
                        <h4 class="tariffs__title">Сайты-каталоги</h4>
                        <p class="tariffs__description">Когда нужна админка и разработка на полноценном html+css</p>
                    </div>
                    <div class="tariffs__right">
                        <span class="tariffs__label-price">Цена</span>
                        <span class="tariffs__price">от 450 000 рублей</span>
                    </div>
                </div>
            </div>

            <button class="tariffs__action"><img src="./img/telegram-white.svg" alt="telegram">Запросить расчёт именно по вашему проекту </button>
        </section>

        <?php include __DIR__ . '/components/section-about.php'; ?>

        <?php
        include __DIR__ . '/components/form.php';

        renderForm('direction__form');
        ?>

        <?php include __DIR__ . '/components/footer.php'; ?>

    </div>


    <script src="script.js?v=20260330"></script>
    <script src="popup.js?v=20260330"></script>
</body>

</html>