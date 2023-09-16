<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'competitions'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--black">
        <div class="wrapper">
          <h1 class="section__title">Создаём индивидуальную ИТ-платформу для решения задач в разных отраслях бизнеса</h1>
          <div class="anchors">
            <a href="#" class="anchors__item panel panel--yellow">
              <div class="panel__content">
                <img src="./dist/img/anchor-car.svg" alt="" class="anchors__image">
                <div class="anchors__bottom">
                  <div class="anchors__title">Автобизнес</div>
                  <div class="anchors__arrow"></div>
                </div>
              </div>
            </a>
            <a href="#" class="anchors__item panel panel--red">
              <div class="panel__content">
                <img src="./dist/img/anchor-vending.svg" alt="" class="anchors__image">
                <div class="anchors__bottom">
                  <div class="anchors__title">Вендинг</div>
                  <div class="anchors__arrow"></div>
                </div>
              </div>
            </a>
            <a href="#" class="anchors__item panel panel--blue">
              <div class="panel__content">
                <img src="./dist/img/anchor-time.svg" alt="" class="anchors__image">
                <div class="anchors__bottom">
                  <div class="anchors__title">Повременные услуги</div>
                  <div class="anchors__arrow"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="panel__head panel__head--yellow"></div>
        <div class="wrapper">
          <h2 class="section__title">Автобизнес</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Автоматизируем обработку больших массивов данных: наименования поставщиков, товаров, VIN-номеров, артикулов и подбор аналогов для оригинальных запчастей</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Создаём отдельную платформу для доступа и управления базами данных</li>
                <li>Внедряем в ваш ИТ-ресурс только нужный функционал</li>
                <li>Предоставляем актуальные данные в режиме реального времени как из внешних баз данных ТД, так и от ваших поставщиков Веб сервисы</li>
              </ul>
            </div>
          </div>
          <div class="block-group block-group--3">
            <div class="block-group__item panel panel--no-shadow panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Категоризация по брендам</div>
                <div class="panel__text">официальному названию марки/производителя, альтернативным вариантам названия группы брендов</div>
              </div>
            </div>
            <div class="block-group__item panel panel--black panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Поиск аналогов товаров, отвечающих запросу клиента</div>
                <div class="panel__text">официальному названию марки/производителя, альтернативным вариантам названия группы брендов</div>
              </div>
            </div>
            <div class="block-group__item panel panel--yellow panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Оптимизация складских ресурсов</div>
                  <img src="./dist/img/anchor-car.svg" alt="" class="panel__image">
                </div>
                <div class="panel__text">сбыт в первую очередь чужих остатков, неликвидных позиций, контроль наличия маржинальных и частотных позиций</div>
              </div>
            </div>
        </div>
        </div>
      </section>
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">Наши кейсы по Автобизнесу</h2>
          <div class="swiper js-cases-swiper">
            <div class="cases js-cases swiper-wrapper">
              <a href="#" class="swiper-slide cases__item panel panel--white"">
                <div class="panel__head panel__head--yellow"></div>
                <div class="panel__content case">
                  <div class="case__title">АТОЛ онлайн и&nbsp;1С: готовое решение для&nbsp;интеграции</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                  <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--yellow"></div>
                <div class="panel__content case">
                  <div class="case__title">Подсистема учета б/у запчастей в торговой конфигурации 1С</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
