<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'products'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Наши продукты</h1>
          <div class="our-products">
            <div class="our-products__title">При&nbsp;покупке решения для&nbsp;интеграции АТОЛ и&nbsp;1С подписка на&nbsp;6&nbsp;месяцев обновлений бесплатно</div>
            <img src="./dist/img/tip-arrow.svg" alt="arrow" class="our-products__arrow">
            <div class="our-products__button-container">
              <div class="our-products__button-title">Наши продукты зарегистрированы в реестре ПО</div>
              <button class="button  button--bg button--mobile-full-width button--blue our-products__button" data-modal="contact-form">подписка на продукты Зетасофт</button>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">
            Продукты и сервисы
          </h2>
          <div class="swiper swiper--m" data-swiper-id="products">
            <div class="products swiper-wrapper">
              <a href="#" class="swiper-slide products__item panel panel--grey">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--red">ЗетаВеб</div>
                    <div class="products__price">От 132 000 ₽</div>
                  </div>
                  <div class="products__text">Уникальный программный комплекс, предназначенный для управления интернет-магазином непосредственно из среды «1С: Предприятие»</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--blue">Атол</div>
                    <div class="products__price">От 1000 ₽/месяц</div>
                  </div>
                  <div class="products__text">Удобный интерфейс для подбора товаров и создания заказа, используя собственные остатки, прайс-листы и веб-сервисы поставщиков</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--yellow">Виртуальный склад</div>
                    <div class="products__price">40 000 ₽</div>
                  </div>
                  <div class="products__text">Загружайте прайс-листы поставщиков и пользуйтесь ими, как своими собственными товарами.</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--grey">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--blue">Веб-сервисы</div>
                    <div class="products__price">От 500 ₽/месяц</div>
                  </div>
                  <div class="products__text">Подключение множества поставщиков через один общий шлюз по веб-сервису. Простой и понятный интерфейс: очистка недостоверной информации, «эталонные» бренды</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--grey">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--green">Вендинг</div>
                    <div class="products__price">От 132 000 ₽</div>
                  </div>
                  <div class="products__text">Комплексный программный продукт для автоматизации работы вендинговых компаний</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--red">ТекДок</div>
                    <div class="products__price">От 50 000 ₽</div>
                  </div>
                  <div class="products__text">Продукт для&nbsp;повременного учёта работы ваших сотрудников. Для&nbsp;компаний, оказывающих услуги консалтинга, юридические, </div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--red">Универсальный отчет</div>
                    <div class="products__price">От 132 000 ₽</div>
                  </div>
                  <div class="products__text">Уникальный программный комплекс, предназначенный для управления интернет-магазином непосредственно из среды «1С: Предприятие»</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">
            Продукты и сервисы
          </h2>
          <div class="swiper swiper--m" data-swiper-id="systems">
            <div class="products swiper-wrapper">
              <a href="#" class="swiper-slide products__item panel panel--white panel--shadow-blue">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--red">Учёт времени</div>
                    <div class="products__price">От 50 000 ₽</div>
                  </div>
                  <div class="products__text">Продукт для&nbsp;повременного учёта работы ваших сотрудников. Для&nbsp;компаний, оказывающих услуги консалтинга, юридические, бухгалтерские и&nbsp;другие услуги, где&nbsp;принята почасовая оплата.</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white panel--shadow-blue">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--blue">Авторазборка</div>
                    <div class="products__price">От 1000 ₽/месяц</div>
                  </div>
                  <div class="products__text">Удобный интерфейс для подбора товаров и создания заказа, используя собственные остатки, прайс-листы и веб-сервисы поставщиков</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white panel--shadow-blue">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__name products__name--yellow">Управление ТК</div>
                    <div class="products__price">40 000 ₽</div>
                  </div>
                  <div class="products__text">Загружайте прайс-листы поставщиков и пользуйтесь ими, как своими собственными товарами.</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">
              <img src="./dist/img/panel-1c.svg" alt="1c logo" class="button-panel__image">
              Продукты 1С
            </div>
            <a href="./products1c.html" class="button-panel__button button  button--bg">выбрать продукт</a>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
