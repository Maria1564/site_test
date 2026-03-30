<?php
function renderForm($extraClass = '') {
?>
<form class="form <?= $extraClass ?>">
    <div class="form__content">
        <div>
            <h2 class="form__title">Понравилась работа?
                Сделаем вам
                еще лучше!</h2>
            <p class="form__description">
                Просто оставьте заявку в форме или пишите сразу в мессенджеры.
            </p>
        </div>

        <div class="form__socials">
            <a href="#" class="form__link"><img src="img/case/max.svg" alt="max"></a>
            <a href="#" class="form__link"><img src="img/case/telegram.svg" alt="telegram"></a>
        </div>
    </div>

    <div class="form__main">
        <div class="form__fields">
            <input type="text" name="username" class="form__inp" placeholder="Ваше имя">
            <input type="text" name="tel" class="form__inp" placeholder="Ваш телефон">
            <textarea class="form__inp form__textarea" placeholder="Что требуется?"></textarea>
        </div>

        <div class="form__btn">Отправить</div>

        <div class="form__policy">
            <input type="checkbox" id="policy">
            <label for="policy">
                Нажимая на кнопку Отправить вы соглашаетесь с условиями
                <a href="#">Политики конфиденциальности</a>
            </label>
        </div>
    </div>
</form>
<?php
}
?>