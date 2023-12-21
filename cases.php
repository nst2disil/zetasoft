<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'cases'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--grey">
        <div class="wrapper">
          <h2 class="section__title">Кейсы</h2>
          <div class="categories">
            <button class="categories__item js-case-category button button--white button--active-blue button--dot" data-case-category="blue">Автозапчасти</button>
            <button class="categories__item js-case-category button button--white button--active-red button--dot" data-case-category="red">Вендинг</button>
            <button class="categories__item js-case-category button button--white button--active-blue-dark button--dot" data-case-category="blue-dark">Продажа времени</button>
            <button class="categories__item js-case-category button button--white button--active-green button--dot" data-case-category="green">Универсальный</button>
            <button class="categories__item js-case-category button button--white button--active-yellow button--dot" data-case-category="yellow">1C</button>
            <button class="categories__item js-case-category button button--white button--dot" data-case-category="">Все продукты</button>
          </div>
        </div>
        <div class="js-cases">
          <div class="cases-wrapper">
            <div class="wrapper cases">
              <a href="#" class="cases__item panel" data-fill="data-case-category; getRandomColor" data-html-repeat="5">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image" data-fill="src; getPanelLogo">
                </div>
                <div class="panel__content case">
                  <div class="case__title" data-fill="innerText; generateLoremIpsumString; [5, 12]"></div>
                  <div class="case__text" data-fill="innerText; generateLoremIpsumString; [10, 20]"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="cases-wrapper">
            <div class="wrapper cases">
              <a href="#" class="cases__item panel" data-fill="data-case-category; getRandomColor" data-html-repeat="5">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image" data-fill="src; getPanelLogo">
                </div>
                <div class="panel__content case">
                  <div class="case__title" data-fill="innerText; generateLoremIpsumString; [5, 12]"></div>
                  <div class="case__text" data-fill="innerText; generateLoremIpsumString; [10, 20]"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="cases-wrapper">
            <div class="wrapper cases">
              <a href="#" class="cases__item panel" data-fill="data-case-category; getRandomColor" data-html-repeat="5">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image" data-fill="src; getPanelLogo">
                </div>
                <div class="panel__content case">
                  <div class="case__title" data-fill="innerText; generateLoremIpsumString; [5, 12]"></div>
                  <div class="case__text" data-fill="innerText; generateLoremIpsumString; [10, 20]"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="paginator">
            <button class="paginator__first">В начало</button>
            <div class="paginator__page">...</div>
            <button class="paginator__page paginator__page--active">4</button>
            <button class="paginator__page">5</button>
            <button class="paginator__page">6</button>
            <div class="paginator__page">...</div>
            <button class="paginator__last">Дальше</button>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Протестируйте вашу бизнес-задачу бесплатно</div>
            <button class="button-panel__button button button--white button--bg" data-modal="contact-form" data-modal-title="Заполните данные, чтобы протестировать вашу бизнес-задачу">Поставить&nbsp;задачу</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
