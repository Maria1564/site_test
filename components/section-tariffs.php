<?php include_once __DIR__ . '/section-title.php'; ?>

<section class="tariffs">
    <?php
    renderSectionTitle(
        'Цены',
        'Цена каждого проекта определяется индивидуально',
        "",
        'Но примерный порядок текущих цен можно определить исходя из стоимости часа сотрудника. Ниже представлены примерные цены на некоторые виды услуг'
    );
    ?>

    <div class="tariffs__list">
        <div class="tariffs__card">
            <div class="tariffs__left">
                <h4 class="tariffs__title">Лендинги</h4>
                <p class="tariffs__description">Создаётся на no-code платформе с уникальным дизайном под вас</p>
            </div>
            <div class="tariffs__right">
                <span class="tariffs__label-price">Цена</span>
                <span class="tariffs__price">от 50 000 рублей</span>
            </div>
        </div>
        <div class="tariffs__card">
            <div class="tariffs__left">
                <h4 class="tariffs__title">Корпоративные сайты</h4>
                <p class="tariffs__description">Делаем маленький лендинг до 8 экранов очень быстро, с
                    минимальными правками и частично уникальным дизайном. Приоритет — скорость </p>
            </div>
            <div class="tariffs__right">
                <span class="tariffs__label-price">Цена</span>
                <span class="tariffs__price">от 200 000 рублей</span>
            </div>
        </div>
        <div class="tariffs__card">
            <div class="tariffs__left">
                <h4 class="tariffs__title">Интернет-магазины</h4>
                <p class="tariffs__description">Когда нужна админка и разработка на полноценном html+css</p>
            </div>
            <div class="tariffs__right">
                <span class="tariffs__label-price">Цена</span>
                <span class="tariffs__price">от 500 000 рублей</span>
            </div>
        </div>

        <div class="tariffs__card">
            <div class="tariffs__left">
                <h4 class="tariffs__title">Сайты-каталоги</h4>
                <p class="tariffs__description">Когда нужна админка и разработка на полноценном html+css</p>
            </div>
            <div class="tariffs__right">
                <span class="tariffs__label-price">Цена</span>
                <span class="tariffs__price">от 450 000 рублей</span>
            </div>
        </div>
    </div>

    <button class="tariffs__action"><img src="./img/telegram-white.svg" alt="telegram">Запросить расчёт именно по вашему проекту </button>
</section>
