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
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Кейсы</h2>
          <div class="categories">
            <button class="categories__item js-case-category button button--blue button--block button--dot" data-case-category="blue">Автозапчасти</button>
            <button class="categories__item js-case-category button button--red button--block button--dot" data-case-category="red">Вендинг</button>
            <button class="categories__item js-case-category button button--blue-dark button--block button--dot" data-case-category="blue-dark">Продажа времени</button>
            <button class="categories__item js-case-category button button--green button--block button--dot" data-case-category="green">Универсальный</button>
            <button class="categories__item js-case-category button button--yellow button--block button--dot" data-case-category="yellow">1C</button>
            <a href="#" class="categories__item button button--block button--dot">Все продукты</a>
          </div>
          <div class="cases js-cases">
            <a href="#" class="cases__item panel panel--white" data-case-category="green">
              <div class="panel__head panel__head--yellow"></div>
              <div class="panel__content case">
                <div class="case__title">Автоматизация учета кадровых ресурсов на основе подхода GTD</div>
                <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white"  data-case-category="red">
              <div class="panel__head panel__head--red"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel" data-case-category="yellow">
              <div class="panel__head panel__head--yellow"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Управление торговым комплексом»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white">
              <div class="panel__head panel__head--red"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel" data-case-category="blue">
              <div class="panel__head panel__head--blue"></div>
              <div class="panel__content case">
                <div class="case__title">АТОЛ онлайн и&nbsp;1С: готовое решение для&nbsp;интеграции</div>
                <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white" data-case-category="blue-dark">
              <div class="panel__head panel__head--yellow"></div>
              <div class="panel__content case">
                <div class="case__title">Подсистема учета б/у запчастей в торговой конфигурации 1С</div>
                <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel" data-case-category="yellow">
              <div class="panel__head panel__head--yellow"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Управление торговым комплексом»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white">
              <div class="panel__head panel__head--red"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel" data-case-category="blue">
              <div class="panel__head panel__head--blue"></div>
              <div class="panel__content case">
                <div class="case__title">АТОЛ онлайн и&nbsp;1С: готовое решение для&nbsp;интеграции</div>
                <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white">
              <div class="panel__head panel__head--yellow"></div>
              <div class="panel__content case">
                <div class="case__title">Автоматизация учета кадровых ресурсов на основе подхода GTD</div>
                <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white">
              <div class="panel__head panel__head--red"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
            <a href="#" class="cases__item panel panel--white">
              <div class="panel__head panel__head--red"></div>
              <div class="panel__content case">
                <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
              </div>
            </a>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
