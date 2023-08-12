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
          <h1 class="section__title">Автоматизируем бизнес-процессы с помощью собственных IT-решений и продуктов 1С</h1>
          <div class="tools">
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler">Kanban</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Это система постановки задач и организации рабочих процессов для эффективного достижения поставленных целей, которая предполагает максимальную прозрачность продвижения работ</div>
                </div>
              </div>              
            </div>
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler button--blue-light">Gherkin</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Итеративный подход к управлению проектами и разработке программного обеспечения, который помогает командам быстрее и с меньшими проблемами поставлять ценность клиентам</div>
                </div>
              </div>
              
            </div>
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler button--blue">CI/CD</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Набор принципов и практик, которые позволяют разработчикам чаще и надежнее развертывать изменения программного обеспечения</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler button--red">Git</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Развитая система контроля версий с активной поддержкой и открытым исходным кодом, которую используют тысячи разработчиков во всем мире</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler button--yellow">База знаний</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Онлайн-библиотека, в которой хранится информация о продукте или проекте</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button button--block js-tool-toggler">Контроль качества кода</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm panel--black-head">
                  <div class="panel__head">
                    <button class="panel__close button js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Минимизация ошибок перед выпуском программного обеспечения, проверка на наличие недостатков и дефектов с целью минимизации ошибок перед выпуском программного обеспечения</div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="section section--black-head">
        <div class="wrapper">
          <h2 class="section__title">Этапы работы по задаче</h2>
          <div class="steps">
            <div class="steps__item">
              <div class="steps__item-number">1</div>
              <div class="steps__item-text">Принимаем задачу в виде бизнес-потребности</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/037-data analysis.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">2</div>
              <div class="steps__item-text">Аналитик вместе с клиентом превращают потребность в сценарий действий по определённой методике</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/022-iteration.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">3</div>
              <div class="steps__item-text">Утверждаем сценарий и передаём его архитектору для выбора наилучшего варианта решения</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/006-confirmation.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">4</div>
              <div class="steps__item-text">Формируем бюджет решения и передаём в разработку</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/011-calculator.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">5</div>
              <div class="steps__item-text">Наши разработчики пишут профессиональный код</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/031-statistics.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">6</div>
              <div class="steps__item-text">Внедряем результат совместно с клиентом и аналитиком</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/017-light bulb.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">7</div>
              <div class="steps__item-text">Описываем бизнес-процесс и прикладные инструкции в базе знаний</div>
              <img class="steps__item-image" alt="step illustration" src="./dist/img/icons/analytics-b/042-data storage.svg">
            </div>
          </div>

          <div class="callback-panel panel panel--yellow">
            <div class="callback-panel__text">Протестируйте вашу бизнес-задачу бесплатно</div>
            <button class="callback-panel__button button button--block" data-modal="contact-form">Поставить задачу</button>
          </div>
          <div class="modal" id="contact-form">
            <div class="modal__bg js-modal-exit"></div>
            <div class="modal__container">

              <button class="modal__close js-modal-exit"></button>
              <div class="modal__title">
                Заполните данные для бесплатной консультации
              </div>
              <form class="modal__form form">
                <input type="text" name="name" placeholder="Имя" class="input" required>
                <input type="text" name="phone" placeholder="+7" class="input" required>
                <input type="text" name="email" placeholder="E-mail" class="input" required>
                <textarea class="input form__textarea" name="comment" placeholder="Комментарий" rows="10"></textarea>
                <input type="submit" value="Отправить" class="form__submit button button--block button--yellow">
                <span class="form__tip">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных</span>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><? include './partials/_footer.html'?></div>
  </div>
</body>
</html>
