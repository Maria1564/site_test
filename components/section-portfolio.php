<?php include_once __DIR__ . '/section-title.php'; ?>
<?php include_once __DIR__ . '/case-card.php'; ?>

<section class="portfolio">
    <?php
    renderSectionTitle(
        'Наши работы',
        'За 12 лет работы, сделали десятки классных проектов'
    );
    ?>

    <div class="portfolio__cards">
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
        <?php
        renderCard(
            'img/proj3.png',
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
            'img/proj4.png',
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
            'img/proj5.png',
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
            'img/proj6.png',
            'Разработка сайта детского лагеря Рекрут',
            [
                ['text' => 'WordPress'],
                ['text' => 'Лендинг'],
                ['text' => '2029', 'class' => 'no-oldstyle-numbers']
            ]
        );
        ?>
    </div>

    <button class="portfolio__btn">смотреть больше работ</button>
</section>
