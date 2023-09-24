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
          <h1 class="section__title">Создаём индивидуальную ИТ-платформу для&nbsp;решения задач в&nbsp;разных отраслях бизнеса</h1>
          <div class="anchors">
            <a href="#autobusiness" class="anchors__item panel panel--yellow">
              <div class="panel__content">
                <img src="./dist/img/anchor-car.svg" alt="" class="anchors__image">
                <div class="anchors__bottom">
                  <div class="anchors__title">Автобизнес</div>
                  <div class="anchors__arrow"></div>
                </div>
              </div>
            </a>
            <a href="#vending" class="anchors__item panel panel--red">
              <div class="panel__content">
                <img src="./dist/img/anchor-vending.svg" alt="" class="anchors__image">
                <div class="anchors__bottom">
                  <div class="anchors__title">Вендинг</div>
                  <div class="anchors__arrow"></div>
                </div>
              </div>
            </a>
            <a href="#services" class="anchors__item panel panel--blue">
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
      <section class="section" id="autobusiness">
        <div class="panel__head panel__head--yellow"></div>
        <div class="wrapper">
          <h2 class="section__title">Автобизнес</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Автоматизируем обработку больших массивов данных: наименования поставщиков, товаров, VIN-номеров, артикулов и&nbsp;подбор аналогов для&nbsp;оригинальных запчастей</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Создаём отдельную платформу для&nbsp;доступа и&nbsp;управления базами данных</li>
                <li>Внедряем в&nbsp;ваш&nbsp;ИТ-ресурс только нужный функционал</li>
                <li>Предоставляем актуальные данные в&nbsp;режиме реального времени как&nbsp;из&nbsp;внешних баз&nbsp;данных ТД, так&nbsp;и&nbsp;от&nbsp;ваших поставщиков Веб&nbsp;сервисы</li>
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
                <div class="panel__title">Поиск аналогов товаров,<br>отвечающих запросу клиента</div>
                <div class="panel__text">официальному названию марки/производителя, альтернативным вариантам названия группы брендов</div>
              </div>
            </div>
            <div class="block-group__item panel panel--yellow panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Оптимизация складских ресурсов</div>
                  <img src="./dist/img/anchor-car.svg" alt="" class="panel__image">
                </div>
                <div class="panel__text">сбыт в&nbsp;первую очередь чужих остатков, неликвидных позиций, контроль наличия маржинальных и&nbsp;частотных позиций</div>
              </div>
            </div>
        </div>
        </div>
      </section>
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">Наши кейсы по Автобизнесу</h2>
          <div class="swiper js-competitions-auto-swiper">
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
      <section class="section" id="vending">
        <div class="panel__head panel__head--red"></div>
        <div class="wrapper">
          <h2 class="section__title">Вендинг</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Сопровождение бизнеса вендинговых автоматов: от&nbsp;контроля продаж и&nbsp;остатков до&nbsp;автоматизации взаимодействия склада с&nbsp;операторами</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Обслуживаем автоматы в электронном виде</li>
                <li>Контролируем работу операторов, обслуживающих аппараты</li>
                <li>Осуществляем мониторинг и планирование загрузки</li>
                <li>Настраиваем интеграцию с внешними сервисами и системами</li>
                <li>Проводим анализ статистики</li>
              </ul>
            </div>
          </div>
          <div class="block-group block-group--2">
            <a href="#" class="block-group__item panel panel--no-shadow panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Установка комплексного продукта собственной разработки ZETA вендинг</div>
                <div class="panel__link">узнать о продукте</div>
                <img src="./dist/img/panel-zeta.svg" alt="иллюстрация" class="panel__image">

              </div>
            </a>
            <div class="block-group__item panel panel--red panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Разработка ИТ-системы с нуля</div>
                  <img src="./dist/img/anchor-vending.svg" alt="" class="panel__image">
                </div>
                <div class="panel__text">или&nbsp;отдельного сервиса для&nbsp;контроля за&nbsp;определёнными этапами бизнес-процесса</div>
              </div>
            </div>
        </div>
        </div>
      </section>
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">Наши кейсы по Вендингу</h2>
          <div class="swiper js-competitions-vending-swiper">
            <div class="cases swiper-wrapper">
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--blue"></div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Учёт в&nbsp;вендинговом бизнесе»</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение для ООО «Оптима»</div>
                  <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--blue-dark"></div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Учёт в&nbsp;вендинговом бизнесе»</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Оставьте заявку для&nbsp;бесплатной консультации </div>
            <button class="button-panel__button button button--block button--big" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
      <section class="section" id="services">
        <div class="panel__head panel__head--blue"></div>
        <div class="wrapper">
          <h2 class="section__title">Повременные услуги</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Учёт времени в&nbsp;консалтинге или&nbsp;другой деятельности, где&nbsp;час&nbsp;является единицей измерения&nbsp;стоимости</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>консалтинг</li>
                <li>юридические</li>
                <li>бухгалтерские услуги</li>
              </ul>
            </div>
          </div>
          <div class="block-group block-group--2">
            <div class="block-group__item panel panel--black panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Мониторинг и управление рабочей нагрузкой сотрудников по проектам</div>
              </div>
            </div>
            <div class="block-group__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Анализ ресурсного потенциала</div>
                <div class="panel__text">определите, кто&nbsp;из&nbsp;сотрудников недо-, а&nbsp;кто&nbsp;перегружен, оптимизируйте рабочую нагрузку и&nbsp;снизьте собственную себестоимость</div>
              </div>
            </div>
            <div class="block-group__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Прогноз вашей рабочей нагрузки на&nbsp;месяцы вперёд</div>
              </div>
            </div>
            <div class="block-group__item panel panel--blue panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Создание прозрачного процесса определения себестоимости</div>
                  <img src="./dist/img/anchor-time.svg" alt="" class="panel__image">
                </div>
                <div class="panel__text">а также ценообразования с последующим попаданием в акты оказанных услуг </div>
              </div>
            </div>
        </div>
        </div>
      </section>
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <h2 class="section__title">Наши кейсы по Вендингу</h2>
          <div class="swiper js-competitions-vending-swiper">
            <div class="cases swiper-wrapper">
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--yellow"></div>
                <div class="panel__content case">
                  <div class="case__title">Автоматизация учета кадровых ресурсов на основе подхода GTD</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--blue-dark"></div>
                <div class="panel__content case">
                  <div class="case__title">Кейс Кеско Групп</div>
                  <img src="./dist/img/panel-zeta.svg" alt="zeta logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="#" class="swiper-slide cases__item panel panel--white">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content case">
                  <div class="case__title">Управлении консалтинговой компанией</div>
                  <img src="./dist/img/panel-1c.svg" alt="1c logo" class="case__image">
                  <div class="case__text">Подсистема предназначена для компаний, работающих в 1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Оставьте заявку для&nbsp;бесплатной консультации </div>
            <button class="button-panel__button button button--block button--big" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
