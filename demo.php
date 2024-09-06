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
          <h1 class="section__title">
            h1 заголовок
          </h1>
          <div class="section__subtitle">
            подзаголовок
          </div>
          <h2 class="section__title">
            h2 заголовок
          </h2>
          <h2 class="section__subtitle">
            h2 подзаголовок
          </h2>
          <h3 class="section__title">
            h3 заголовок
          </h3>
          <div class="cols">
            <div class="cols__item">
              <h3 class="section__title">Колонка 1</h3>
              Содержимое колонки
            </div>
            <div class="cols__item">
              <h3 class="section__title">Колонка 2</h3>
              Содержимое колонки

            </div>
          </div>
          <div class="anchor" id="panels"><!--Пункт назначения якоря--></div>
          <div class="demo">
            <div class="demo__panels">
              <div class="panel">
                <div class="panel__content">Панель</div>
              </div>
              <div class="panel panel--no-shadow">
                <div class="panel__content">Панель без тени</div>
              </div>
              <div class="panel panel--shadow-red">
                <div class="panel__content">Панель с кастомной тенью</div>
              </div>
              <a class="panel panel--clickable" href="#buttons">
                <div class="panel__content">Кликабельная панель + якорь</div>
              </a> 
              <div class="panel panel--red">
                <div class="panel__content">Панель цветная</div>
              </div>
              <div class="panel panel--black">
                <div class="panel__content">Панель черная</div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">Панель с шапкой</div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red panel__head--reverse"></div>
                <div class="panel__content">Панель с ревёрснутой шапкой</div>
              </div>
              <div class="panel panel--sm">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">Панель по меньше!!!</div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">
                  <div class="panel__top">
                    <div class="panel__title">Заголовок панели</div>
                    <img src="./i/anchor-car.svg" alt="" class="panel__image">
                  </div>
                  <div class="panel__text">Текст панели</div>
                </div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">
                  <div class="panel__top">
                    <div class="panel__title">Заголовок панели</div>
                    <img src="./i/anchor-car.svg" alt="" class="panel__image">
                  </div>
                  <div class="panel__text">Текст панели</div>
                </div>
              </div>
              <div class="panel panel--shadow-yellow">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__name products__name--red">Карточка кейса</div>
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
            <div class="anchor" id="buttons"><!--Пункт назначения якоря--></div>
            <div class="demo__buttons">
              <button class="button">Кнопка</button>
              <a class="button" href="#panels">Кнопка-ссылка якорь (или просто ссылка)</a>
              <button class="button button--red">Красная кнопка</button>
              <button class="button button--blue button--active-yellow js-demo-active-button">Кнопка с сохранением нажатия</button>
              <button class="button button--bg">Кнопка ПОБОЛЬШЕ</button>
              <button class="button button--sm">Кнопка по менше</button>
              <button class="button button--mobile-full-width">Кнопка, которая на мобиле будет во всю ширину</button>
              <button class="button button--no-decoration">Кнопка без оформления</button>
            </div>
            <div class="demo__items">
              <div class="button-panel panel panel--yellow panel--no-shadow">
                <div class="button-panel__text">Панель с кнопкой</div>
                <button class="button-panel__button button button--white button--bg" data-modal="contact-form" data-modal-title="Кастомный заголовок окна">Кнопка вызова попапа</button>
              </div>
              <p>На странице должен быть попап с указанным айдишником
                <pre>
                  &lt;div class=&quot;modal&quot; id=&quot;contact-form&quot;&gt;&lt;/div&gt;
                </pre>
              </p>
            </div>
          </div>

        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          Секция черная
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
