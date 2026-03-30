<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кейс</title>

    <link rel="stylesheet" href="styles/fonts.css?v=20260335" />
    <link rel="stylesheet" href="styles/shared.css?v=20260336" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
    <link rel="stylesheet" href="styles/footer.css?v=20260335">
    <link rel="stylesheet" href="styles/popups.css?v=20260335">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260335">
    <link rel="stylesheet" href="styles/case.css?v=20260336">
    <link rel="stylesheet" href="styles/case-card.css?v=20260335">
    <link rel="stylesheet" href="styles/typography.css?v=20260335">
    <link rel="stylesheet" href="styles/form.css?v=20260335">

</head>

<body>
    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>

    <div class="case__container">
        <div class="case__wrapper">
            <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
            <?php
            renderBreadcrumbs(
                ['Главная', "Кейсы"],
                'Сайты, лендинги и дизайн для Shaker Tech'
            );
            ?>
            <section class="case__tech">
                <div class="case__chips">
                    <div class="chip">WordPress</div>
                    <div class="chip">Лендинг</div>
                    <div class="chip">2025</div>
                </div>
                <span class="case__date no-oldstyle-numbers">01.07.2025</span>
            </section>
            <div class="case__content">
                <img src="img/proj4.png" alt="project" class="img">
                <section>
                    <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и мощный
                        инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                        собственного веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">
                            сколько стоит сделать сайт и от
                            чего зависит цена?</span>
                    </p>
                    <p class="paragraph">
                        Ответ на этот вопрос многогранен, ведь стоимость <span class="text_white_underline">зависит от
                            множества факторов</span> , начиная с типа
                        сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно разберём ключевые
                        аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели и бюджет.
                    </p>
                </section>
                <img src="img/case/site.png" alt="site" class="img">
                <img src="img/case/figma.png" alt="figma design" class="img">
                <section>
                    <h2 class="subtitle">Факторы, влияющие на стоимость сайта</h2>
                    <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и мощный
                        инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                        собственного веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">
                            сколько стоит сделать сайт и от
                            чего зависит цена?</span>
                    </p>
                    <p class="paragraph">
                        Ответ на этот вопрос многогранен, ведь стоимость зависит от множества факторов, начиная с типа
                        сайта и заканчивая выбором платформы и исполнителя. В этой статье мы подробно разберём ключевые
                        аспекты формирования цен, чтобы вы могли выбрать оптимальный вариант под свои цели и бюджет.
                    </p>
                </section>
                <section>
                    <h3 class="subsubtitle">Факторы, влияющие на стоимость сайта</h3>
                    <p class="paragraph">Сайт — это лицо бизнеса в интернете, средство коммуникации с клиентами и мощный
                        инструмент продаж. В эпоху цифровизации сложно представить компанию или личный проект без
                        собственного веб-ресурса. Однако многие сталкиваются с вопросом: <span class="text_white">
                            сколько стоит сделать сайт и от
                            чего зависит цена?</span>
                    </p>

                    <h4>Маркированный список</h4>

                    <div class="block__list">
                        <p class="paragraph">Платформа популярна в России, особенно среди корпоративных сайтов и
                            интернет-магазинов.</p>

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
                    <img src="./img/case/landing.png" alt="landing" class="img case__img-landing">
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
                </section>

                <img src="img/proj4.png" alt="project" class="img">
            </div>


        </div>
    </div>
    <div class="container">
        <a href="index.php" class="case__btn">
            <span class="case__btn-text">Посмотреть результат по ссылке</span>
            <span class="case__btn-link">arbko.ru</span>
        </a>

        <?php
        include __DIR__ . '/components/form.php';

        renderForm('case__form');
        ?>

        <section class="related">
            <h2 class="related__title">Похожие кейсы</h2>
            <div class="related__list">
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
            </div>
        </section>

        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="script.js?v=20260329"></script>
    <script src="popup.js?v=20260329"></script>
</body>

</html>