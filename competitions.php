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
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
