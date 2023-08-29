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
    </div>
    <div class="container__footer"><? include './partials/_footer.html'?></div>
  </div>
</body>
</html>
