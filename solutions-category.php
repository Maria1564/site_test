<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Решения</title>
    <link rel="stylesheet" href="styles/shared.css?v=20260410" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260410" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260410">
    <link rel="stylesheet" href="styles/footer.css?v=20260410">
    <link rel="stylesheet" href="styles/popups.css?v=20260410">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260410">
    <link rel="stylesheet" href="styles/typography.css?v=20260410">
    <link rel="stylesheet" href="styles/header.css?v=20260410">
    <link rel="stylesheet" href="styles/solutions-category.css?v=20260507">

</head>

<body>

    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>


    <div class="container">
        <div class="solutions-category__wrapper">
            <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
            <?php
            renderBreadcrumbs(
                ['Главная'],
                "Решения для разных бизнесов"
            );
            ?>

            <section class="solutions-category__section">
                <div class="solutions-filter">
                    <button class="solutions-filter__item solutions-filter__item_active" type="button"
                        data-filter="all">Все</button>
                    <button class="solutions-filter__item" type="button" data-filter="medicine">Медицина и
                        красота</button>
                    <button class="solutions-filter__item" type="button" data-filter="real-estate">Недвижимость</button>
                    <button class="solutions-filter__item" type="button" data-filter="services">Услуги</button>
                </div>

                <div class="solitions-grid">
                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="medicine services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Медицина и красота</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Стоматология</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>

                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="real-estate services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Недвижимость</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Дом большой</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>

                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="medicine services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Медицина и красота</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Частная клиника</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>

                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="medicine services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Медицина и красота</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Медицинский центр</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>
                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="medicine services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Медицина и красота</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Стоматология</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>

                    <a class="solution-card" href="./solutions-subcategory.php" data-tags="real-estate services">

                        <div class="solution-card__tags">
                            <div class="solution-card__tag">Недвижимость</div>
                            <div class="solution-card__tag">Услуги</div>
                        </div>

                        <div class="solution-card__content">
                            <h2 class="solution-card__title">Дом большой</h2>
                            <p class="solution-card__description">Полезная информация для стоматологий, сетей и частных
                                докторов</p>
                        </div>

                    </a>


                </div>
            </section>
        </div>

        <?php include __DIR__ . '/components/footer.php'; ?>

    </div>


    <script src="script.js?v=20260507"></script>
    <script src="popup.js?v=20260410"></script>
</body>

</html>