<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'case'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--main section--no-min-height section--yellow">
        <div class="wrapper">
          <div class="case-info">
            <h1 class="case-info__title section__title">
              1С и онлайн-кассы АТОЛ Онлайн
            </h1>
            <div class="case-info__logos">
              <div class="case-info__logos-list">

                <img src="./dist/img/atol_logo.png" alt="atol logo">
                <img src="./dist/img/panel-1c.svg" alt="online test amico">
              </div>
            </div>
            <div class="case-info__img">
              <img src="./dist/img/Online test-amico 1.svg" alt="online test amico">
            </div>

          </div>
        </div>
      </section>
      <section class="section section--case-item">
        <div class="wrapper">
          <h2 class="section__title">Для кого</h2>
          <div class="text-wrapper">
            Подсистема предназначена для&nbsp;компаний, работающих в&nbsp;1С и&nbsp;использующих онлайн-кассы АТОЛ онлайн
          </div>
          <h2 class="section__title">Задача</h2>
          <div class="text-wrapper">
            С&nbsp;1&nbsp;июля 2019&nbsp;года необходимо пробивать несколько чеков в&nbsp;тех&nbsp;случаях, когда получение оплаты (предоплаты, аванса) и&nbsp;фактической отгрузки происходят не&nbsp;одновременно.
          </div>
          <div class="text-wrapper">
            <div class="tooltip tooltip--atol">
              <button class="tooltip__icon"></button>
              <div class="tooltip__text">
                Клиент оформил заказ на&nbsp;сайте и&nbsp;оплатил банковской картой
              </div>
            </div>
            <img src="./dist/img/atol-diagram.svg" alt="atol diagram">
          </div>
          <div class="text-wrapper">
            <div class="case__subtitle">Как это работает?</div>
            <ul class="case__list ul">
              <li>Клиент оформил заказ на&nbsp;сайте и&nbsp;оплатил банковской картой; </li>
              <li>В&nbsp;1С пришёл заказ покупателя и&nbsp;документ оплаты;</li>
              <li>Первый чек&nbsp;необходимо формировать в&nbsp;момент получения оплаты от&nbsp;покупателя;</li>
              <li>Чек&nbsp;отражает получение предоплаты, данные в&nbsp;АТОЛ онлайн передаются из&nbsp;CMS сайта или&nbsp;платёжной системы;</li>
              <li>Второй чек&nbsp;необходимо формировать в&nbsp;момент отгрузки товара;</li>
              <li>Если&nbsp;мы&nbsp;создаём документ отгрузки в&nbsp;учётной программе 1С, то&nbsp;после создания реализации необходимо передать данные в&nbsp;АТОЛ онлайн. Второй чек&nbsp;отражает полный расчёт с&nbsp;покупателем</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section--black section--case-item">
        <div class="wrapper">
          <h2 class="section__title">Решение</h2>
          <div class="text-wrapper">
            <p>Компания ЗетаСофт разработала подсистему интеграции 1С с веб-сервисом (API) АТОЛ Онлайн, которая встраивается в любую конфигурацию 1С в соответствии с бизнес-процессами компании. </p>
            <p>Список основных конфигураций:</p>
            <ul class="case__list ul">
              <li>1С: Управление нашей фирмой (УНФ);</li>
              <li>1С: Управление торговлей ред. 11.х;</li>
              <li>1С: Управление торговлей ред. 10.3;</li>
              <li>1С-Рарус Альфа-Авто ред. 4, ред. 5.х;</li>
              <li>1С: Комплексная автоматизация;</li>
              <li>1С: ERP;</li>
              <li>1С: Управление производственным предприятием;</li>
              <li>и другие конфигурации 1С</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section--case-item">
        <div class="wrapper">
          <h2 class="section__title">Результат</h2>
          <div class="text-wrapper">
            В конфигурацию 1С добавить подсистему интеграции с АТОЛ Онлайн (для современных конфигураций интеграция делается через расширения);<br>
            Заполнить настройки АТОЛ Онлайн;<br>
            В зависимости от конфигурации 1С и используемых документов настроить контроль оплаты.
          </div>
          <div class="swiper swiper--screenshots" data-swiper-id="case-screenshots">
            <div class="screenshots swiper-wrapper">
              <a href="./dist/img/menyu-atol-onlain 1.jpg" target="_blank" class="swiper-slide screenshots__item">
                <img src="./dist/img/menyu-atol-onlain 1.jpg" alt="screenshot 1" class="screenshots__img">
              </a>
              <a href="./dist/img/menyu-atol-onlain 2.jpg" target="_blank" class="swiper-slide screenshots__item">
                <img src="./dist/img/menyu-atol-onlain 2.jpg" alt="screenshot 2" class="screenshots__img">
              </a>
              <a href="./dist/img/menyu-atol-onlain 3.jpg" target="_blank" class="swiper-slide screenshots__item">
                <img src="./dist/img/menyu-atol-onlain 3.jpg" alt="screenshot 3" class="screenshots__img">
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section class="section section--black section--case-item">
        <div class="wrapper">
          <h2 class="section__title">Посмотрите другие кейсы</h2>
          <div class="swiper" data-swiper-id="cases">
            <div class="cases js-cases swiper-wrapper">
              <a href="./cases.html" class="swiper-slide cases__item panel panel--decoration-green" data-case-category="green">
                <div class="panel__head">
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Учёт в&nbsp;вендинговом бизнесе»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./cases.html" class="swiper-slide cases__item panel panel--decoration-blue" data-case-category="blue">
                <div class="panel__head">
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Управление торговым комплексом»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./cases.html" class="swiper-slide cases__item panel panel--decoration-yellow" data-case-category="yellow">
                <div class="panel__head">
                <img src="./dist/img/panel-1c.svg" alt="zeta logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Подсистема учета б/у запчастей в торговой конфигурации 1С</div>
                  <div class="case__text">Дополнительный модуль, с помощью которого можно делать разбор автомобиля, разбор детали на более мелкие, продажу детали, списание автомобиля, отчет по автомобилям</div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Оставьте заявку для&nbsp;бесплатной консультации </div>
            <button class="button-panel__button button button--white button--bg" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 