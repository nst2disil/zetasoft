<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'dashboard'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--grey">
        <div class="wrapper">
          <div class="dashboard">
            <div class="dashboard__products">
              <div class="products__block js-products-block">
                <div class="products__block-title">
                  Продукты
                  <div class="checkbox">
                    <input type="checkbox" id="hideinactive2" class="checkbox__input js-toggle-show-active">
                    <label for="hideinactive2" class="checkbox__label">Показать неактивные</label>
                  </div>
                </div>
                <div class="products__list js-products-list">
                  <div class="products__item panel panel--white">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">ERP 2.5 (УТ&nbsp;11.5, КА&nbsp;2.5). Модуль отправки чеков в&nbsp;АТОЛ</div>
                        <div class="products__status-info">
                          <div class="products__status products__status--active">Подключён</div>
                          <div class="products__date">Актуальная версия<br>1.3.2.0 от&nbsp;25.03.2023 г.</div>
                        </div>
                      </div>
                      <div class="panel__bottom">
                        <div class="products__link-list">
                          <a href="#" class="products__link">Скачать</a>
                          <a href="#" class="products__link">База знаний</a>
                          <a href="#" class="products__link">История версий</a>
                          <a href="#" class="products__link">Статьи по теме</a>
                          <a href="#" class="products__link">Лиценцензии и сертификаты</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="products__item panel panel--white inactive">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">УПП 1.3. Модуль отправки чеков в&nbsp;АТОЛ</div>
                        <div class="products__status-info">
                          <div class="products__status products__status--inactive">Не подключен</div>
                        
                        </div>
                      </div>
                      <div class="panel__bottom">
                        <div class="products__link-list">
                          <a href="#" class="products__link">База знаний</a>
                          <a href="#" class="products__link">История версий</a>
                          <a href="#" class="products__link">Статьи по теме</a>
                        </div>
                        <button class="products__subscribe subscribe-button" data-modal="subscribe-form">Продлить подписку</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products__block js-products-block">
                <div class="products__block-title">
                  Сервисы
                  <div class="checkbox">
                    <input type="checkbox" id="hideinactive1" class="checkbox__input js-toggle-show-active">
                    <label for="hideinactive1" class="checkbox__label">Показать неактивные</label>
                  </div>
                </div>
                <div class="products__list js-products-list">
                  <div class="products__item panel panel--white">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">ERP 2.5 (УТ&nbsp;11.5, КА&nbsp;2.5). Модуль отправки чеков в&nbsp;АТОЛ</div>
                        <div class="products__status-info">
                          <div class="products__status products__status--active">Подключён</div>
                          <div class="products__date">Актуальная версия<br>1.3.2.0 от&nbsp;25.03.2023 г.</div>
                        </div>
                      </div>
                      <div class="panel__bottom">
                        <div class="products__link-list">
                          <a href="#" class="products__link">Скачать</a>
                          <a href="#" class="products__link">База знаний</a>
                          <a href="#" class="products__link">История версий</a>
                          <a href="#" class="products__link">Статьи по теме</a>
                          <a href="#" class="products__link">Лиценцензии и сертификаты</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="products__item panel panel--white inactive">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">УПП 1.3. Модуль отправки чеков в&nbsp;АТОЛ</div>
                        <div class="products__status-info">
                          <div class="products__status products__status--inactive">Не подключен</div>
                        
                        </div>
                      </div>
                      <div class="panel__bottom">
                        <div class="products__link-list">
                          <a href="#" class="products__link">База знаний</a>
                          <a href="#" class="products__link">История версий</a>
                          <a href="#" class="products__link">Статьи по теме</a>
                        </div>
                        <button class="products__subscribe subscribe-button" data-modal="subscribe-form">Продлить подписку</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dashboard__aside aside">
              <button class="button button--no-decoration aside__logout">Выйти</button>
              <div class="panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="aside__title">Ваш менеджер</div>
                  <div class="profile">
                    <div class="profile__info">
                      <div class="profile__pic">
                        <img src="data:image/png;base64,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" alt="">
                      </div>
                      <div class="profile__name">Серов Владимир</div>
                    </div>
                    <div class="profile__row">
                      <div class="profile__label">Телефон</div>
                      <div class="profile__value">+7 (812) 490-67-89, доб. 128</div>
                    </div>
                    <div class="profile__row">
                      <div class="profile__label">E-mail</div>
                      <div class="profile__value">serov@zetasoft.ru</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="aside__title">ООО «Кивиниеми»</div>
                  <div class="profile">
                    <div class="profile__row">
                      <div class="profile__label">Логин</div>
                      <div class="profile__value">design</div>
                    </div>
                    <div class="profile__row">
                      <div class="profile__label">ФИО</div>
                      <div class="profile__value">Иванов Иван Иванович</div>
                    </div>
                    <div class="profile__row">
                      <div class="profile__label">Телефон</div>
                      <div class="profile__value">+7 999 112-23-33</div>
                    </div>
                    <div class="profile__row">
                      <div class="profile__label">E-mail</div>
                      <div class="profile__value">info@kiviniemi.ru</div>
                    </div>
                    <button class="button  button--bg button--yellow profile__edit-button" data-modal="edit-profile-form">Изменить</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    </div>
    <div class="modal" id="edit-profile-form">
      <div class="modal__bg js-modal-exit"></div>
      <div class="modal__container">
        <button class="modal__close js-modal-exit"></button>
        <div class="modal__title js-title">
          Внесите изменения в&nbsp;персональные данные
        </div>
        <div data-form="true" class="modal__form form">
          <input type="text" name="name" placeholder="Иванов Иван Иванович" class="input" required>
          <input type="text" name="phone" placeholder="+7 999 112-23-33" class="input" required>
          <input type="text" name="email" placeholder="info@kiviniemi.ru" class="input" required>
          <input type="submit" value="Сохранить" class="form__submit button  button--bg button--yellow">
          <span class="form__tip">Нажимая на кнопку «Сохранить», я <a class="form__link" href="#">даю согласие</a> на обработку персональных данных</span>
        </div>
      </div>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
  <div class="modal" id="subscribe-form">
    <div class="modal__bg js-modal-exit"></div>
    <div class="modal__container">
      <button class="modal__close js-modal-exit"></button>
      <div class="modal__title js-title">
        Заполните данные для продления подписки
      </div>
      <div data-form="true" class="modal__form form">
        <div class="select">
          <select>
            <option value="option1">Учёт времени</option>
            <option value="option2">Второй пункт 2</option>
            <option value="option3">Опция 5</option>
            <option value="option4">Единая Россия</option>
          </select>
        </div>
        <input type="text" name="companyName" placeholder="Имя компании" class="input" value="ООО «Кивиниеми»" required readonly>
        <input type="submit" value="Отправить" class="form__submit button button--bg button--yellow">
        <span class="form__tip">Нажимая на кнопку «Отправить», я <a class="form__link" href="#">даю согласие</a> на обработку персональных данных</span>
      </div>
    </div>
  </div>
</body>
</html>
 