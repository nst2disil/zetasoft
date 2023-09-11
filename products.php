<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <? include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><? include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">Наши продукты</h1>
          <div class="our-products">
            <div class="our-products__title">При&nbsp;покупке решения для&nbsp;интеграции АТОЛ и&nbsp;1С подписка на&nbsp;6&nbsp;месяцев обновлений бесплатно</div>
            <img src="./dist/img/tip-arrow.svg" alt="arrow" class="our-products__arrow">
            <div class="our-products__button-container">
              <div class="our-products__button-title">Наши продукты зарегистрированы в реестре ПО</div>
              <a href="#" class="button button--block button--blue our-products__button">подписка на продукты Зетасофт</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">
            Продукты и сервисы
          </h2>
          <div class="swiper swiper--big js-products-swiper">
            <div class="products swiper-wrapper">
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--red">ЗетаВеб</div>
                    <div class="products__price">От 132 000 ₽</div>
                  </div>
                  <div class="products__text">Уникальный программный комплекс, предназначенный для управления интернет-магазином непосредственно из среды «1С: Предприятие»</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item products__item--red panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--blue">Атол</div>
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
                    <div class="products__title products__title--yellow">Виртуальный склад</div>
                    <div class="products__price">40 000 ₽</div>
                  </div>
                  <div class="products__text">Загружайте прайс-листы поставщиков и пользуйтесь ими, как своими собственными товарами.</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--blue">Веб-сервисы</div>
                    <div class="products__price">От 500 ₽/месяц</div>
                  </div>
                  <div class="products__text">Подключение множества поставщиков через один общий шлюз по веб-сервису. Простой и понятный интерфейс: очистка недостоверной информации, «эталонные» бренды</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--green">Вендинг</div>
                    <div class="products__price">От 132 000 ₽</div>
                  </div>
                  <div class="products__text">Комплексный программный продукт для автоматизации работы вендинговых компаний</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item products__item--red panel panel--white">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--red">ТекДок</div>
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
                    <div class="products__title products__title--red">Универсальный отчет</div>
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
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">
            Продукты и сервисы
          </h2>
          <div class="swiper swiper--big js-systems-swiper">
            <div class="products swiper-wrapper">
              <a href="#" class="swiper-slide products__item panel panel--white panel--shadow-blue">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--red">Учёт времени</div>
                    <div class="products__price">От 50 000 ₽</div>
                  </div>
                  <div class="products__text">Продукт для повременного учёта работы ваших сотрудников. Для компаний, оказывающих услуги консалтинга, юридические, бухгалтерские и другие услуги, где принята почасовая оплата.</div>
                  <div class="products__bottom">
                    <div class="panel__link">подробнее</div>
                    <img src="./dist/img/panel-zeta.svg" alt="" class="products__logo">
                  </div>
                </div>
              </a>
              <a href="#" class="swiper-slide products__item products__item--red panel panel--white panel--shadow-blue">
                <div class="panel__content">
                  <div class="products__top">
                    <div class="products__title products__title--blue">Авторазборка</div>
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
                    <div class="products__title products__title--yellow">Управление ТК</div>
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
        </div>
      </section>
    </div>
    <div class="container__footer"><? include './partials/_footer.html'?></div>
  </div>
</body>
</html>
