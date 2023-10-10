<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'vacancies'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Кто мы, что делаем, какие профессионалы нам нужны</h2>
          <div class="cols">
            <div class="cols__item"><div class="section__subtitle">На этой странице описаны рабочие процессы и актуальные вакансии нашей компании </div></div>
            <div class="cols__item"></div>
          </div>
          <div class="vacancies">
            <div class="vacancies__item panel panel--white panel--no-shadow">
              <div class="panel__content cols">
                <div class="cols__item">
                  <div class="panel__title">Маркетинг</div>
                  <div class="panel__text">За оформление внешних каналов коммуникации и лидогенерацию отвечает маркетинг. Создавать контент, оформлять презентационные материалы и каналы продаж — их зона ответственности</div>
                </div>
                <div class="cols__item"><div class="panel__title">Открытые вакансии</div></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 