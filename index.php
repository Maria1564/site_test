<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Red button</title>
  <link rel="stylesheet" href="styles/fonts.css?v=20260326" />

  <link rel="stylesheet" href="styles/style.css?v=20260328" />
  <link rel="stylesheet" href="styles/shared.css?v=20260328" />
  <link rel="stylesheet" href="styles/mobile-menu.css?v=20260328" />
  <link rel="stylesheet" href="styles/header-nav.css?v=20260328">
  <link rel="stylesheet" href="styles/footer.css?v=20260328">
  <link rel="stylesheet" href="styles/popups.css?v=20260328">

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
    <section class="portfolio">
      <div class="title">
        <div class="badge">Наши работы</div>
        <h2 class="title-content">
          За 12 лет работы, сделали десятки классных проектов
        </h2>
      </div>

      <div class="portofolio__cards">
        <div class="card">
          <img src="img/project1.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">Разработка сайта детского лагеря Рекрут</p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="img/proj2.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">
              Дизайн сайта для производителя серверного оборудования в Москве
              и Московской области
            </p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="img/proj3.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">Разработка сайта детского лагеря Рекрут</p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="img/proj4.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">Разработка сайта детского лагеря Рекрут</p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="img/proj5.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">Разработка сайта детского лагеря Рекрут</p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="img/proj6.png" alt="project1" class="card__img" />
          <div class="card__content">
            <p class="card__title">Разработка сайта детского лагеря Рекрут</p>
            <div class="card__chips">
              <div class="chip">WordPress</div>
              <div class="chip">Лендинг</div>
              <div class="chip no-oldstyle-numbers">2025</div>
            </div>
          </div>
        </div>
      </div>

      <button class="portfolio__btn">смотреть больше работ</button>
    </section>

    <section class="benefits">
      <div class="title">
        <div class="badge">Наши работы</div>
        <h2 class="title-content">
          Мы — веб-студия нового поколения: делаем быстро и красиво
        </h2>
      </div>
      <div class="benefits__cards">
        <div class="benefits__card">
          <img src="img/laptop.png" alt="laptop" class="benefits__card-img" />
          <div class="benefits__card-content">
            <h3 class="benefits__card-title">Мировой уровень качества</h3>
            <p class="benefits__card-text">
              Благодаря более чем 10 летней экспертизе, мы делаем сайты
              мирового уровня как с точки зрения дизайна и логики, так и в
              смысле технической составляющей. Вы получите результат, который
              позволит вам выглядеть выгоднее и современнее конкурентов.
            </p>
          </div>
        </div>

        <div class="benefits__card">
          <img src="img/chess.png" alt="chess" class="benefits__card-img" />
          <div class="benefits__card-content">
            <h3 class="benefits__card-title">Знаем что надо бизнесу</h3>
            <p class="benefits__card-text">
              Благодаря более чем 10 летней экспертизе, мы делаем сайты
              мирового уровня как с точки зрения дизайна и логики, так и в
              смысле технической составляющей. Вы получите результат, который
              позволит вам выглядеть выгоднее и современнее конкурентов.
            </p>
          </div>
        </div>

        <div class="benefits__card">
          <img src="img/pig.png" alt="chess" class="benefits__card-img" />
          <div class="benefits__card-content">
            <h3 class="benefits__card-title">Честные условия</h3>
            <p class="benefits__card-text">
              Благодаря более чем 10 летней экспертизе, мы делаем сайты
              мирового уровня как с точки зрения дизайна и логики, так и в
              смысле технической составляющей. Вы получите результат, который
              позволит вам выглядеть выгоднее и современнее конкурентов.
            </p>
          </div>
        </div>
      </div>
    </section>

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

  <script src="script.js?v=20260328"></script>
  <script src="popup.js?v=20260328"></script>
</body>

</html>