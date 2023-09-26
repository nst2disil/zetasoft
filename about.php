<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'about'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Контакты</h2>
          <div class="about">
            <div class="panel panel--no-shadow panel--black about__addresses addresses">
              <div class="panel__content">
                <div class="addresses__item addresses__item--separator">
                  <div class="about__title addresses__location">Санкт-Петербург</div>
                  <div class="addresses__details">
                    <a href="tel:+78124906789" class="addresses__contact">+7 812 490-67-89</a>
                    <a href="mailto:info@zetasoft.ru" class="addresses__contact addresses__contact--email">info@zetasoft.ru</a>
                    <div class="panel__text">197342, г. Санкт-Петербург, ул. Белоостровская,д. 17, к. 2, лит. А (б/ц «Авантаж»), 5 эт., офис №413</div>
                  </div>
                </div>
                <div class="addresses__item">
                  <div class="about__title addresses__location">Москва</div>
                  <div class="addresses__details">
                    <a href="tel:+74992726264" class="addresses__contact">+7 499 272-62-64</a>
                  </div>
                </div>
                <div class="addresses__item">
                  <div class="about__title addresses__location">Болгария</div>
                  <div class="addresses__details">
                    <a href="tel:+359879106775" class="addresses__contact">+359 87-910-67-75</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="panel panel--no-shadow panel--yellow about__bank-info">
              <div class="panel__content">
                <div class="about__title">Банковские реквизиты:</div>
                <div class="panel__text">
                  ООО «ЗетаСофт»<br>
                  ИНН: 7813200760<br>
                  КПП: 781401001<br>
                  ОКПО: 72453948<br>
                  ОГРН: 1047820011690<br>
                  ОКВЭД: 72.20; 72.10; 72.30<br>
                  ОКАТО: 40270000000<br>
                  Р/сч.: 40702810632280001931<br>
                  в филиале «Санкт-Петербургский»<br>
                  АО «АЛЬФА-БАНК»<br>
                  К/сч.: 30101810600000000786<br>
                  БИК: 044030786<br>
                </div>
              </div>
            </div>
          </div>
          <div class="map">
            <a href="https://yandex.ru/maps/org/avantage/1177424322/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Avantage</a><a href="https://yandex.ru/maps/2/saint-petersburg/category/business_center/184107509/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Бизнес-центр в Санкт‑Петербурге</a><iframe src="https://yandex.ru/map-widget/v1/?ll=30.321697%2C59.986661&mode=search&oid=1177424322&ol=biz&z=14.31" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
