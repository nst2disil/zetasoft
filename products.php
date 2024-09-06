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
      <!-- до лучших времен
      <section class="section section--collapsed">
        <div class="wrapper">
          <h2 class="section__title">Наши продукты</h1>
          <div class="our-products">
            <div class="our-products__title">При&nbsp;покупке решения для&nbsp;интеграции АТОЛ и&nbsp;1С подписка на&nbsp;6&nbsp;месяцев обновлений бесплатно</div>
            <img src="./i/tip-arrow.svg" alt="arrow" class="our-products__arrow">
            <div class="our-products__button-container">
              <div class="our-products__button-title">Наши продукты зарегистрированы в&nbsp;реестре ПО</div>
              <button class="button  button--bg button--mobile-full-width button--cyan our-products__button" data-modal="contact-form">подписка на продукты Зетасофт</button>
            </div>
          </div>
        </div>
      </section>-->
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">
            Продукты и сервисы
          </h2>
          <div class="categories">
            <a href="" class="categories__item button  button--dot">Все продукты</a>
            <a href="#filter-by-blue" class="categories__item js-case-category button button--cyan  button--dot">Автозапчасти</a>
            <a href="#filter-by-red" class="categories__item js-case-category button button--red  button--dot">Вендинг</a>
            <a href="#filter-by-blue-dark" class="categories__item js-case-category button button--blue  button--dot">Продажа времени</a>
            <a href="#filter-by-green" class="categories__item js-case-category button button--green  button--dot">Универсальный</a>
            <a href="#filter-by-yellow" class="categories__item js-case-category button button--yellow  button--dot">1C</a>
          </div>
          <div class="cols cols--products-zeta">
            <div class="cols__item">
              <h3 class="section__title">Коробочные решения</h3>
              <div class="swiper swiper--m" data-swiper-id="products">
                <div class="products products--solutions swiper-wrapper">
                  <div class="swiper-slide products__item products__item--cross panel panel--shadow-yellow">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__name products__name--red">ЗетаВеб</div>
                        <div class="products__price hide-md-down">От 132 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 132 000 ₽</div>
                        </div>
                        <img src="https://placehold.co/60x60" alt="" class="products__image">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide products__item products__item--cross panel panel--shadow-blue">
                    <div class="panel__head panel__head--blue panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__name products__name--red">ЗетаВеб</div>
                        <div class="products__price hide-md-down">От 132 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 132 000 ₽</div>
                        </div>
                        <img src="https://placehold.co/60x60" alt="" class="products__image">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide products__item products__item--cross panel panel--shadow-red">
                    <div class="panel__head panel__head--red panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__name products__name--red">ЗетаВеб</div>
                        <div class="products__price hide-md-down">От 132 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 132 000 ₽</div>
                        </div>
                        <img src="https://placehold.co/60x60" alt="" class="products__image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              </div>
            <div class="cols__item">
              <h3 class="section__title">Наработки и методики</h3>
              <div class="swiper swiper--m" data-swiper-id="systems">
                <div class="products swiper-wrapper products--methodics">
                  <div class="swiper-slide products__item panel products__item--zeta panel--shadow-black">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__name products__name--red">Учёт времени</div>
                        <div class="products__price hide-md-down">От 50 000 ₽</div>
                      </div>
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 50 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide products__item panel products__item--zeta panel--shadow-black">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__name products__name--red">Учёт времени</div>
                        <div class="products__price hide-md-down">От 50 000 ₽</div>
                      </div>
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 50 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide products__item panel products__item--zeta panel--shadow-black">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__name products__name--red">Учёт времени</div>
                        <div class="products__price hide-md-down">От 50 000 ₽</div>
                      </div>
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 50 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide products__item panel products__item--zeta panel--shadow-black">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__name products__name--red">Учёт времени</div>
                        <div class="products__price hide-md-down">От 50 000 ₽</div>
                      </div>
                      <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <a href="#" class="panel__link">Подробнее</a>
                          <div class="products__price hide-md-up">От 50 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">
              <img src="./i/panel-1c.svg" alt="1c logo" class="button-panel__image">
              Продукты 1С
            </div>
            <a href="./products1c.html" class="button-panel__button button button--white button--bg">Выбрать продукт</a>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
