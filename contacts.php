<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=b0681d51-5fa4-451e-81bf-0f15af2c37d1"
        type="text/javascript"></script>
    <link rel="stylesheet" href="styles/fonts.css?v=20260335" />
    <link rel="stylesheet" href="styles/shared.css?v=20260336" />
    <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
    <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
    <link rel="stylesheet" href="styles/footer.css?v=20260335">
    <link rel="stylesheet" href="styles/popups.css?v=20260335">
    <link rel="stylesheet" href="styles/breadcrumbs.css?v=20260335">
    <link rel="stylesheet" href="styles/form.css?v=20260335">
    <link rel="stylesheet" href="styles/contacts.css?v=20260335">
</head>

<body>

    <?php include __DIR__ . '/components/popups.php'; ?>
    <?php include __DIR__ . '/components/mobile-menu.php'; ?>
    <?php include __DIR__ . '/components/header-nav.php'; ?>

    <div class="container">
        <div class="contacts__wrapper">
            <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
            <?php
            renderBreadcrumbs(
                ['Главная'],
                "Контакты"
            );
            ?>
        </div>

        <section class="contacts-form">
            <div class="contacts-form__content">
                <div class="contacts-form__info">
                    <div class="contacts-form__field">
                        <span class="contacts-form__label">Телефон</span>
                        <p class="contacts-form__text no-oldstyle-numbers">+7 902 932-79-48</p>
                    </div>
                    <div class="contacts-form__field">
                        <span class="contacts-form__label">Электронная почта</span>
                        <p class="contacts-form__text">info@the-red-button.ru</p>
                    </div>
                    <div class="contacts-form__field">
                        <span class="contacts-form__label">Адрес</span>
                        <p class="contacts-form__text no-oldstyle-numbers">г. Калуга, ул. Гагарина, д.1, оф. 702</p>
                    </div>
                </div>
                <div class="contacts-form__socials">
                    <p class="contacts-form__label">Пишите нам в социальных сетях и мессенджерах</p>
                    <div class="contacts-form__socials-list">
                        <a href="#" class="contacts-form__link"><img src="img/telegram.svg" alt="telegram"></a>
                        <a href="#" class="contacts-form__link"><img src="img/whatsapp.svg" alt="whatsapp"></a>
                        <a href="#" class="contacts-form__link"><img src="img/max.svg" alt="max"></a>
                        <a href="#" class="contacts-form__link"><img src="img/vk.svg" alt="vk"></a>
                        <a href="#" class="contacts-form__link"><img src="img/youtube.svg" alt="youtube"></a>
                    </div>
                </div>
                <div class="constacts-form__document">
                    <p class="contacts-form__label">Документы</p>
                    <a href="#" class="contacts-form__document-link"><img src="img/contacts/file.svg"
                            alt="file">Реквизиты компании</a>
                </div>
            </div>
            <div class="contacts-form__map" id="map"></div>
        </section>

        <?php
        include __DIR__ . '/components/form.php';

        renderForm();
        ?>

        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script>
        ymaps.ready(init);


        function init() {
            var myMap = new ymaps.Map("map", {
                center: [54.5293, 36.2754], // Калуга
                zoom: 14,
                controls: ['zoomControl', 'fullscreenControl']
            });

            var myPlacemark = new ymaps.Placemark(
                [54.5293, 36.2754],
                {
                    balloonContent: 'Город Калуга',
                    hintContent: 'Калуга'
                },
                {
                    preset: 'islands#redIcon'
                }
            );

            myMap.geoObjects.add(myPlacemark)
        }
    </script>
    <script src="script.js?v=20260329"></script>
    <script src="popup.js?v=20260329"></script>
</body>

</html>