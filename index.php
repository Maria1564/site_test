<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Red button</title>
  <link rel="stylesheet" href="styles/fonts.css?v=20260333" />

  <link rel="stylesheet" href="styles/style.css?v=20260337" />
  <link rel="stylesheet" href="styles/shared.css?v=20260338" />
  <link rel="stylesheet" href="styles/mobile-menu.css?v=20260335" />
  <link rel="stylesheet" href="styles/header-nav.css?v=20260335">
  <link rel="stylesheet" href="styles/footer.css?v=20260335">
  <link rel="stylesheet" href="styles/popups.css?v=20260335">
  <link rel="stylesheet" href="styles/case-card.css?v=20260335">
  <link rel="stylesheet" href="styles/section-title.css?v=20260402">
  <link rel="stylesheet" href="styles/sections.css?v=20260404">

</head>

<body>

  <?php include __DIR__ . '/components/popups.php'; ?>
  <?php include __DIR__ . '/components/mobile-menu.php'; ?>
  <?php include __DIR__ . '/components/header-nav.php'; ?>

  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__arrows">
          <img src="img/arrows.svg" alt="arrows" />
        </div>

        <div class="header__content">
          <h1 class="header__title">Сделаем <br> современный сайт <br> за две недели</h1>
          <p class="header__text">
            Разрабатываем и поддерживаем сайты, внедряем CRM и телефонию,
            поддерживаем уже готовые проекты
          </p>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <?php include __DIR__ . '/components/section-portfolio.php'; ?>
    <?php include __DIR__ . '/components/section-benefits.php'; ?>

    <section class="about">
      <h2 class="about__title">Посмотрите, как мы работаем</h2>
      <div class="about__img">
        <img src="img/processWork.png" alt="process work" />
      </div>
      <div class="about__info">
        <p class="about__info-text">
          Рассказываем о том, как происходит процесс работы над созданием
          сайта
        </p>

        <button class="about__btn">Смотреть видео</button>
      </div>
    </section>

    <?php include __DIR__ . '/components/footer.php'; ?>
  </div>

  <script src="script.js?v=20260329"></script>
  <script src="popup.js?v=20260329"></script>
</body>

</html>
