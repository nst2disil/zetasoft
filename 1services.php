<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <? include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><? include './partials/_header.php'; ?></div>
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
            <img class="section__image" src="/dist/img/section-report.svg" alt="illustration">
          </div>
          <div class="section__col">
            <div class="diffs">
              <div class="diffs__item panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title">Процесс работы над задачей</div>
                  <div class="panel__text">Каждый этап выполняется в соответствии с высоким стандартом, мониторинг</div>
                </div>
              </div>
              <div class="diffs__item panel panel--white panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title">Квалификация сотрудников</div>
                  <div class="panel__text">Каждый специалист, будучи экспертом в своей области, гарантирует высокий стандарт результата</div>
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
                  <div class="panel__text">Сэкономим время на погружение команды в тему и предложим способы оптимизации бизнес-процессов</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="section">
        <div class="wrapper">
          <h2 class="section__title">Ваша задача разработки в 1С проходит следующие этапы</h2>
          <div class="stages">
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Описание задачи</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Работаем с сутью задачи: описываем её роль, взаимодействие с другими бизнес-процессами, предлагаем возможные варианты решения</div>
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
                  <div class="panel__text">Утверждённый сценарий попадает к архитектору. Чем сложнее задача, тем больше времени и компетенций требуется от архитектора</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Бюджет</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Формируем бюджет проекта на основании построенной архитектуры и выбранного решения</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel panel--black panel--no-shadow">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Разработка</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Разработчики приступают к написанию кода исходя из описанной логики и способа технической реализации. Код формируется на основе стандартов 1С, хранится и версионируется в Git репозиториях. Надёжность процесса разработки гарантирует техническое обеспечение: защищённые хранилища, привязка кода в рамках задач, тестирование на окружениях, приближенных к реальным производственным средам</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Внедрение</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">Бизнес-аналитик внедряет результат совместно с заказчиком</div>
                </div>
              </div>
            </div>
            <div class="stages__item">
              <div class="panel">
                <div class="panel__content">
                  <div class="panel__title"><span class="panel__title-text">Создание базы знаний</span><div class="stages__item-number"></div></div>
                  <div class="panel__text">На основе сценария формируются инструкции по бизнес-процессу</div>
                </div>
              </div>
            </div>

          </div>
          <div class="callback-panel panel panel--yellow panel--no-shadow">
            <div class="callback-panel__text">Протестируйте вашу бизнес-задачу бесплатно</div>
            <button class="callback-panel__button button button--block button--big" data-modal="contact-form">Поставить&nbsp;задачу</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container__footer"><? include './partials/_footer.html'?></div>
  </div>
</body>
</html>
