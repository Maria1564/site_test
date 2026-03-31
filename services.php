<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
    <link rel="stylesheet" href="styles/fonts.css?v=20260335" />
    <link rel="stylesheet" href="styles/shared.css?v=20260337" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
    <link rel="stylesheet" href="styles/footer.css?v=20260335">
    <link rel="stylesheet" href="styles/popups.css?v=20260335">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260335">
    <link rel="stylesheet" href="styles/services.css?v=20260336">
</head>

<body>
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
                <div class="services__item" onclick="window.location.href='cases.php'">
                    <div class="services__left">
                        <div class="services__info">
                            <h2 class="services__title">Разработка сайтов</h2>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                            </p>
                        </div>
                        <div class="services__tags">
                            <a href="post.php" class="tag">Лендинги</a>
                            <a href="post.php" class="tag">Корпоративные сайты</a>
                            <a href="post.php" class="tag">Интернет-каталоги</a>
                            <a href="post.php" class="tag">Промо-сайты</a>
                            <a href="post.php" class="tag">Интернет-магазины</a>
                            <a href="post.php" class="tag">Сайты на Tilda</a>
                            <a href="post.php" class="tag">Сайты на WordPress</a>
                            <a href="post.php" class="tag">Сайты на 1С-Битрикс</a>
                        </div>
                    </div>

                    <div class="services__right">
                        <span>Подробнее</span>
                        <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                    </div>
                </div>
                
                <div class="services__item" onclick="window.location.href='cases.php'">
                    <div class="services__left">
                        <div class="services__info">
                            <h2 class="services__title">Поддержка сайтов</h2>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                            </p>
                        </div>
                        <div class="services__tags">
                            <a href="post.php" class="tag">Техническая поддержка сайтов</a>
                            <a href="post.php" class="tag">Выполнение работ на сайтах</a>
                            <a href="post.php" class="tag">Ремонт и восстановление сайта</a>
                            <a href="post.php" class="tag">Поддержка 1С-Битрикс</a>
                            <a href="post.php" class="tag">Лечение от вирусов</a>
                            <a href="post.php" class="tag">Поддержка WordPress</a>
                            <a href="post.php" class="tag">Поддержка Tilda</a>
                            <a href="post.php" class="tag">Приведение к требованиям 152-ФЗ</a>
                        </div>
                    </div>

                    <div class="services__right">
                        <span>Подробнее</span>
                        <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                    </div>
                </div>

                <div class="services__item" onclick="window.location.href='cases.php'">
                    <div class="services__left">
                        <div class="services__info">
                            <h2 class="services__title">CRM Системы</h2>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                            </p>
                        </div>
                        <div class="services__tags">
                            <a href="post.php" class="tag">Внедрение и поддержка AmoCrm</a>
                            <a href="post.php" class="tag">Внедрение и поддержка Битрикс 24</a>
                            <a href="post.php" class="tag">Телефония и интеграция</a>
                        </div>
                    </div>

                    <div class="services__right">
                        <span>Подробнее</span>
                        <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                    </div>
                </div>

                 <div class="services__item" onclick="window.location.href='cases.php'">
                    <div class="services__left">
                        <div class="services__info">
                            <h2 class="services__title">Реклама и продвижение</h2>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                            </p>
                        </div>
                        <div class="services__tags">
                            <a href="post.php" class="tag">Медийная реклама</a>
                            <a href="post.php" class="tag">Яндекс Директ</a>
                            <a href="post.php" class="tag">SEO-продвижение</a>
                        </div>
                    </div>

                    <div class="services__right">
                        <span>Подробнее</span>
                        <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                    </div>
                </div>

                <div class="services__item" onclick="window.location.href='cases.php'">
                    <div class="services__left">
                        <div class="services__info">
                            <h2 class="services__title">Автоматизация</h2>
                            <p class="services__description">Разрабатываем современные сайты разного масштаба под ключ.
                            </p>
                        </div>
                        <div class="services__tags">
                            <a href="post.php" class="tag">Медийная реклама</a>
                            <a href="post.php" class="tag">Яндекс Директ</a>
                            <a href="post.php" class="tag">SEO-продвижение</a>
                        </div>
                    </div>

                    <div class="services__right">
                        <span>Подробнее</span>
                        <div class="services__icon"><img src="img/arrow-right.svg" alt="arrow"></div>

                    </div>
                </div>
            </div>
        </div>

        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="script.js?v=20260329"></script>
    <script src="popup.js?v=20260329"></script>
</body>

</html>