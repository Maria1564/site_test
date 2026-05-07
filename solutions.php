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
    <link rel="stylesheet" href="styles/section-title.css?v=20260410">
    <link rel="stylesheet" href="styles/header.css?v=20260410">
    <link rel="stylesheet" href="styles/solutions.css?v=20260507">

</head>

<body>

    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>


    <div class="container">
        <div class="solutions__wrapper">
            <div class="solutions__header">
                <div class="solutions__title-block">
                    <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
                    <?php
                    renderBreadcrumbs(
                        ['Главная'],
                        "Решения"
                    );
                    ?>
                </div>

                <p class="solitions__description section-title__description">В этом разделе мы собираем базу полезной
                    информации для собственников
                    бизнеса, маркетологов, пиарщиков и разработчиков в которую входят актуальные знания по разработке
                    сайтов, дизайну, рекламе. Мы надеемся, что вы сможете найти полезную информацию для своего бизнеса и
                    применить её на реальном проекте!</p>
            </div>

            <section class="solutions__section">
                <div class="solutions__layout">
                    <a class="solutions__card" href="./solutions-category.php">
                        <div class="solutions__card-wrapper">
                            <img src="img/solutions/one.svg" alt="" class="solutions__card-number">
                            <div class="solutions__content">
                                <h2 class="solutions__card-title">Решения для разных бизнесов</h2>
                                <p class="solutions__card-text">Посмотрите полезную информацию для своего бизнеса</p>
                            </div>
                        </div>
                    </a>

                    <a class="solutions__card" href="./solutions-category.php">
                        <div class="solutions__card-wrapper">
                            <img src="img/solutions/two.svg" alt="" class="solutions__card-number">
                            <div class="solutions__content">
                                <h2 class="solutions__card-title">Решения для разных задач</h2>
                                <p class="solutions__card-text">Рост заявок, обновление дизайна и многое другое</p>
                            </div>
                        </div>
                    </a>

                    <a class="solutions__card" href="./solutions-category.php">
                        <div class="solutions__card-wrapper">
                            <img src="img/solutions/three.svg" alt="" class="solutions__card-number">
                            <div class="solutions__content">
                                <h2 class="solutions__card-title">Проблемы</h2>
                                <p class="solutions__card-text">Решения разных проблем в сфере разработки и рекламы</p>
                            </div>
                        </div>
                    </a>

                    <a class="solutions__card" href="./solutions-category.php">
                        <div class="solutions__card-wrapper">
                            <img src="img/solutions/four.svg" alt="" class="solutions__card-number">
                            <div class="solutions__content">
                                <h2 class="solutions__card-title">Сравнение решений</h2>
                                <p class="solutions__card-text">Сравнение разных решений в разработке и рекламе</p>
                            </div>
                        </div>
                    </a>

                </div>
            </section>
        </div>

        <?php include __DIR__ . '/components/footer.php'; ?>

    </div>


    <script src="script.js?v=20260410"></script>
    <script src="popup.js?v=20260410"></script>
</body>

</html>