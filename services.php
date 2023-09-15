<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'services'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section section--main">
        <div class="wrapper">
          <h1 class="section__title">Автоматизируем любые бизнес-процессы</h1>
          <div class="services">
            <div class="services__item">
              <div class="panel panel--head-blue panel--no-shadow">
                <div class="panel__head">
                  <img src="./dist/img/icons/042-data-storage.svg" alt="graphic" class="panel__head-icon">
                </div>
                <div class="panel__content">
                  <div class="panel__text">сбор и обработку данных</div>
                </div>
              </div>
            </div>
            <div class="services__item">
              <div class="panel panel--head-blue-dark panel--no-shadow">
                <div class="panel__head">
                <img src="./dist/img/icons/039-file.svg" alt="graphic" class="panel__head-icon">
                </div>
                <div class="panel__content">
                  <div class="panel__text">формирование отчетов</div>
                </div>
              </div>
            </div>
            <div class="services__item">
              <div class="panel panel--head-red panel--no-shadow">
                <div class="panel__head">
                  <img src="./dist/img/icons/017-time.svg" alt="graphic" class="panel__head-icon">
                </div>
                <div class="panel__content">
                  <div class="panel__text">учет рабочего времени</div>
                </div>
              </div>
            </div>
            <div class="services__item">
              <div class="panel panel--head-yellow panel--no-shadow">
                <div class="panel__head">
                  <img src="./dist/img/icons/003-analytics.svg" alt="graphic" class="panel__head-icon">
                </div>
                <div class="panel__content">
                  <div class="panel__text">прогнозы и аналитику</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section--black section--two-cols">
        <div class="wrapper">
          <div class="section__col">
            <h2 class="section__title">Чем&nbsp;мы отличаемся от&nbsp;большинства франчайзи 1С в&nbsp;России?</h2>
            <img class="section__image" src="./dist/img/section-report.svg" alt="illustration">
          </div>
          <div class="section__col">
            <div class="diffs">
              <div class="diffs__item panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title">Процесс работы над&nbsp;задачей</div>
                  <div class="panel__text">Каждый этап выполняется в&nbsp;соответствии с&nbsp;высоким стандартом, мониторинг</div>
                </div>
              </div>
              <div class="diffs__item panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title">Квалификация сотрудников</div>
                  <div class="panel__text">Каждый специалист, будучи экспертом в&nbsp;своей области, гарантирует высокий стандарт результата</div>
                </div>
              </div>
              <div class="diffs__item panel panel--blue panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title">Глубокая отраслевая экспертиза</div>
                  <ul class="ul panel__list">
                    <li>Вендинг</li>
                    <li>Автобизнес</li>
                    <li>Торговый бизнес</li>
                    <li>ТРК и БЦ</li>
                  </ul>
                  <div class="panel__text">Сэкономим время на&nbsp;погружение команды в&nbsp;тему и&nbsp;предложим способы оптимизации бизнес-процессов</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Ваша задача разработки в 1С проходит следующие этапы</h2>
          <div class="stages">
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Описание задачи</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Работаем с&nbsp;сутью задачи: описываем её&nbsp;роль, взаимодействие с&nbsp;другими бизнес-процессами, предлагаем возможные варианты решения</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Сценарий</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Бизнес-аналитик совместно с вами прописывает все варианты развития событий, затем на их основе пишет сценарии на языке Gherkin</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Архитектура</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Утверждённый сценарий попадает к&nbsp;архитектору. Чем&nbsp;сложнее задача, тем&nbsp;больше времени и&nbsp;компетенций требуется от&nbsp;архитектора</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Бюджет</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Формируем бюджет проекта на&nbsp;основании построенной архитектуры и&nbsp;выбранного решения</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel panel--black panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Разработка</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Разработчики приступают к&nbsp;написанию кода исходя из описанной логики и&nbsp;способа технической реализации. Код&nbsp;формируется на&nbsp;основе стандартов 1С, хранится и&nbsp;версионируется в&nbsp;Git репозиториях. Надёжность процесса разработки гарантирует техническое обеспечение: защищённые хранилища, привязка кода в&nbsp;рамках задач, тестирование на&nbsp;окружениях, приближенных к&nbsp;реальным производственным средам</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Внедрение</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Бизнес-аналитик внедряет результат совместно с&nbsp;заказчиком</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Создание базы знаний</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">На&nbsp;основе сценария формируются инструкции по&nbsp;бизнес-процессу</div>
                </div>
              </div>
            </div>

          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Протестируйте вашу бизнес-задачу бесплатно</div>
            <button class="button-panel__button button button--block button--big" data-modal="contact-form">Поставить&nbsp;задачу</button>
          </div>
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">Сколько стоит?</h2>
          <div class="pricing">
            <a href="#" class="pricing__item panel panel--white panel--shadow-blue">
              <div class="panel__content">
                <div class="panel__title">Проект</div>
                <div class="panel__text">Оценим стоимость и предоставим коммерческое предложение после описания задачи, написания сценариев и составления архитектуры</div>
                <div class="panel__link">рассчитать проект<img src="./dist/img/panel-pricing1.svg" alt="" class="panel__image"></div>
              </div>
            </a>
            <a href="#" class="pricing__item panel panel--white panel--shadow-blue">
              <div class="panel__content">
                <div class="panel__title">Почасовая оплата</div>
                <div class="panel__text">Используем для&nbsp;консультаций, доработок и&nbsp;разработки, не&nbsp;требующей сценариев</div>
                <div class="panel__link">ПОСМОТРЕТЬ ПРАЙС<img src="./dist/img/panel-pricing2.svg" alt="" class="panel__image"></div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Драйвер развития большого бизнеса</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">С затратами на ИТ от 0,9&nbsp;млн<br/>рублей в месяц</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Создадим цифровую модель компании, которая классифицирует все&nbsp;бизнес-процессы в&nbsp;учётной системе</li>
                <li>На&nbsp;этом опытном образце можно моделировать и&nbsp;тестировать изменения любой степени детализации, не&nbsp;применяя их&nbsp;на&nbsp;практике: расставлять метрики, замерять скорость прохождения процессов и&nbsp;оценивать конечный результат</li>
                <li>На&nbsp;основе данных принимать стратегические решения для&nbsp;бизнеса</li>
              </ul>
            </div>
          </div>
          <div class="business-tips">
            <div class="business-tips__item panel panel--no-shadow panel--black">
              <div class="panel__content">
                <div class="panel__title">С помощью цифровой модели компании</div>
                <img src="./dist/img/panel-business-tip1.svg" alt="" class="panel__image hide-sm hide-md">
                <img src="./dist/img/panel-business-tip1m.svg" alt="" class="panel__image show-sm">
              </div>
            </div>
            <div class="business-tips__item panel panel--no-shadow">
              <div class="panel__content">
                <div class="panel__text">исключим проседание процессов в&nbsp;случае ухода ключевых сотрудников</div>
                <img src="./dist/img/panel-business-tip2.svg" alt="" class="panel__image">
              </div>
            </div>
            <div class="business-tips__item panel panel--no-shadow">
              <div class="panel__content">
                <div class="panel__text">выявим слабые места в&nbsp;бизнес-процессах, которые необходимо оптимизировать</div>
                <img src="./dist/img/panel-business-tip3.svg" alt="" class="panel__image">
              </div>
            </div>
            <div class="business-tips__item panel panel--no-shadow panel--blue">
              <div class="panel__content">
                <div class="panel__text">спрогнозируем результат внедрения управленческих решений</div>
                <img src="./dist/img/panel-business-tip4.svg" alt="" class="panel__image">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section--black section--no-min-height">
        <div class="wrapper">
          <div class="contact-big">
            <div class="contact-big__title">Остались еще вопросы?</div>
            <div class="contact-big__text">Если&nbsp;у&nbsp;вас появились вопросы по&nbsp;услугам, вы&nbsp;всегда можете задать их&nbsp;нашим специалистам</div>
            <img src="./dist/img/panel-contact-big.svg" alt="иллюстрация" class="contact-big__image">
            <button class="button button--block button--big contact-big__button" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
