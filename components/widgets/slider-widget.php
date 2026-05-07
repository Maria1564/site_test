<?php include_once __DIR__ . '/../case-card.php'; ?>

<div class="widget-slider swiper">
    <div class="swiper-wrapper">
        <div class="widget-slider__slide swiper-slide">
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
        </div>

        <div class="widget-slider__slide swiper-slide">
            <?php
            renderCard(
                'img/proj2.png',
                'Дизайн сайта для производителя серверного оборудования в Москве и Московской области',
                [
                    ['text' => 'WordPress'],
                    ['text' => 'Лендинг'],
                    ['text' => '2025', 'class' => 'no-oldstyle-numbers']
                ]
            );
            ?>
        </div>

        <div class="widget-slider__slide swiper-slide">
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
        </div>
    </div>
</div>
