<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пост</title>

    <link rel="stylesheet" href="styles/fonts.css?v=20260410" />
    <link rel="stylesheet" href="styles/shared.css?v=20260410" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260410" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260410">
    <link rel="stylesheet" href="styles/footer.css?v=20260410">
    <link rel="stylesheet" href="styles/post.css?v=20260410">
    <link rel="stylesheet" href="styles/case-card.css?v=20260410">
    <link rel="stylesheet" href="styles/popups.css?v=20260410">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260410">
    <link rel="stylesheet" href="styles/blog-card.css?v=20260410">
    <link rel="stylesheet" href="styles/typography.css?v=20260410">
    <link rel="stylesheet" href="styles/form.css?v=20260410">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles/post-widgets.css?v=20260507">

</head>

<body>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>

    <div class="container post__container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <?php
        renderBreadcrumbs(
            ['Главная', "Решения", "По типам бизнеса", "Стоматологии"],
            'Сколько стоит сделать сайт для стоматологии'
        );
        ?>
        <div class="post__header">
            <div class="user">
                <img src="img/post/avatar.png" alt="avatar" class="user__avatar">
                <div class="user__info">
                    <span class="user__name">Артём Демьянович</span>
                    <span class="user__role">Руководитель компании</span>
                </div>
            </div>
            <span class="post__date no-oldstyle-numbers">01.07.2025</span>
        </div>
        <div class="post__content">

            <div class="">
                <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и
                    мощный
                    инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                    собственного
                    веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">сколько стоит
                        сделать
                        сайт и от чего зависит цена?</span>
                </p>
                <p class="paragraph">Ответ на этот вопрос многогранен, ведь стоимость <span
                        class="text_white_underline">зависит от множества факторов</span>,
                    начиная с типа сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно
                    разберём
                    ключевые аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели и
                    бюджет.
                </p>

            </div>
            <img src="img/proj4.png" alt="project" class="img">
            <div class="">
                <h2 class="subtitle">Факторы, влияющие на стоимость сайта</h2>
                <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и
                    мощный
                    инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                    собственного
                    веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">сколько стоит
                        сделать
                        сайт и от чего зависит цена?</span>
                </p>
                <p class="paragraph">Ответ на этот вопрос многогранен, ведь стоимость зависит от множества
                    факторов,
                    начиная с типа сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно
                    разберём
                    ключевые аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели и
                    бюджет.
                </p>
            </div>
            <div class="">
                <h2 class="subtitle">Наши услуги по данной тематике</h2>
                <?php include __DIR__ . '/components/widgets/services-cards.php'; ?>
            </div>
            <div class="">
                <h3 class="subsubtitle">Факторы, влияющие на стоимость сайта</h3>

                <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и
                    мощный
                    инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                    собственного
                    веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">сколько стоит
                        сделать
                        сайт и от чего зависит цена?</span>
                </p>
                <div class="block-list">
                    <h4 class>
                        Маркированный список
                    </h4>

                    <p class="paragraph">Платформа популярна в России, особенно среди корпоративных сайтов и
                        интернет-магазинов.
                    </p>

                    <ul class="list list_no-num">
                        <li>Плюсы: высокая безопасность, интеграция с 1С, поддержка сложных задач.</li>
                        <li>
                            Минусы: высокая стоимость лицензии, необходимость профессиональной настройки.
                        </li>
                        <li>
                            Цены на разработку:
                        </li>

                        <ul class="sublist sublist_no-num">
                            <li>Лендинг: от 5 000 до 200 000 рублей.</li>
                            <li>Корпоративный сайт: от 30 000 до 1 000 000 рублей.</li>
                            <li>Интернет-магазин: от 40 000 до 1 500 000 рублей.</li>
                        </ul>
                    </ul>
                </div>
                <div class="">
                    <h2 class="subtitle">Наши кейсы</h2>
                    <?php include __DIR__ . '/components/widgets/slider-widget.php'; ?>

                </div>
                <div class="block-list">
                    <h4>
                        Нумерованный список
                    </h4>

                    <p class="paragraph">Платформа популярна в России, особенно среди корпоративных сайтов и
                        интернет-магазинов.
                    </p>

                    <ol class="list list_num">
                        <li>Плюсы: высокая безопасность, интеграция с 1С, поддержка сложных задач.</li>
                        <li>
                            Минусы: высокая стоимость лицензии, необходимость профессиональной настройки.
                        </li>
                        <li>
                            Цены на разработку:
                        </li>

                        <ol class="sublist sublist_num">
                            <li>Лендинг: от 5 000 до 200 000 рублей.</li>
                            <li>Корпоративный сайт: от 30 000 до 1 000 000 рублей.</li>
                            <li>Интернет-магазин: от 40 000 до 1 500 000 рублей.</li>
                        </ol>
                    </ol>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <?php
        include __DIR__ . '/components/form.php';

        renderForm("post__form");
        ?>
        <section class="related">
            <h2 class="related__title">Похожие статьи</h2>
            <div class="related__list">
                <?php include __DIR__ . '/components/blog-card.php'; ?>

                <?php renderBlogCard(
                    'img/blog/project1.png',
                    'Сколько стоит сделать сайт: полный разбор',
                    'Благодаря более чем 10 летней экспертизе, мы делаем сайты мирового
                            уровня как с точки зрения дизайна и логики, так и в смысле технической составляющей. Вы
                            получите результат, который позволит вам выглядеть выгоднее и современнее....',
                    '01.07.2025',
                    "solutions-post.php"
                ); ?>
                <?php renderBlogCard(
                    'img/blog/project2.png',
                    'Сколько стоит сделать сайт: полный разбор',
                    'Благодаря более чем 10 летней экспертизе, мы делаем сайты мирового
                            уровня как с точки зрения дизайна и логики, так и в смысле технической составляющей. Вы
                            получите результат, который позволит вам выглядеть выгоднее и современнее....',
                    '01.07.2025',
                    "solutions-post.php"
                ); ?>
            </div>
        </section>

        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js?v=20260507"></script>
    <script src="popup.js?v=20260410"></script>
</body>

</html>