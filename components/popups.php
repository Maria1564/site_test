  <div class="request__overlay">
    <form action="send.php" class="request__popup popup">
      <div class="request__close-btn"><img src="img/crossPopup.svg" alt="cross"></div>
      <div class="popup__header">
        <h2 class="popup__title">Оставить заявку</h2>
        <p class="popup__description">Внесите в форму свои контактные данные и наш менеджер свяжется с вами в ближайшее
          рабочее время</p>
      </div>
      <div class="popup__content">
        <input type="text" name="username" id="inp__username" class="inp" placeholder="Ваше имя">
        <input type="text" name="tel" id="inp__tel" class="inp" placeholder="Ваш телефон">
      </div>
      <div class="request__footer  popup__footer">
        <button class="request__send popup__btn" type="button">Отправить</button>
        <div class="request__police">
          <input type="checkbox" name="police" id="police">
          <label for="police">Нажимая на кнопку Отправить вы соглашаетесь с условиями <a href=""
              class="police__link">Политики</a> конфиденциальности</label>
        </div>
      </div>
    </form>
  </div>

  <div class="result__overlay">
    <form action="" class="result__popup popup">
      <div class="result__close-btn"><img src="img/crossPopup.svg" alt="cross"></div>
      <div class="popup__header">
        <h2 class="popup__title">Спасибо, ваша заявка принята!</h2>
        <p class="popup__description">Скоро наши специалисты свяжутся с вами</p>
      </div>
      <div class="popup__footer">
        <button class="result__btn popup__btn" type="button">Хорошо</button>
      </div>
    </form>
  </div>
