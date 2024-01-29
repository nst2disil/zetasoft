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
            <button class="categories__item js-case-category button button--white button--dot" data-case-category="">Все продукты</button>
            <button class="categories__item js-case-category button button--white button--active-blue button--dot" data-case-category="blue">Автозапчасти</button>
            <button class="categories__item js-case-category button button--white button--active-red button--dot" data-case-category="red">Вендинг</button>
            <button class="categories__item js-case-category button button--white button--active-blue-dark button--dot" data-case-category="blue-dark">Продажа времени</button>
            <button class="categories__item js-case-category button button--white button--active-green button--dot" data-case-category="green">Универсальный</button>
            <button class="categories__item js-case-category button button--white button--active-yellow button--dot" data-case-category="yellow">1C</button>
          </div>
        </div>
        <div class="js-cases">
          <div class="cases-wrapper">
            <div class="wrapper cases">

          

          
          
          
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">АТОЛ Онлайн и 1С: готовое решение для интеграции</div>
                  <div class="case__text">Для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Подсистема учета б/у запчастей в торговой конфигурации 1С</div>
                  <div class="case__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Учет в вендинговом бизнесе</div>
                  <div class="case__text">Определили наименее прибыльные товары и, заменив их на другие, увеличили выручку с автоматов на 25%</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Кеско групп</div>
                  <div class="case__text">Бухгалтерское взаимодействие в рамках холдинга или других компаниях со сложной организационной структурой</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Авансовые отчеты </div>
                  <div class="case__text">Снижение затрат клиента и, в свою очередь, его клиентов. Порядок в документообороте: корректность и своевременность ввода</div>
                </div>
              </a>

            </div>
          </div>
          <div class="cases-wrapper">
            <div class="wrapper cases">
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Оптимизация производительности в УТ 11.1</div>
                  <div class="case__text">Внедрение APDEX, международного стандарта оценки производительности информационных систем</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">GTD</div>
                  <div class="case__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                </div>
              </a>
              <a href="./case.html" class="cases__item panel panel--decoration-red" data-case-category="red">
                <div class="panel__head">
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение для ООО «Оптима»</div>
                  <div class="case__text">Выявили недобросовестного оператора, который уменьшал выручку компании</div>
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
