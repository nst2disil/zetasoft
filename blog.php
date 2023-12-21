<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'blog'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title section__title--search">
            Блог
            <form class="search" action="">
              <input type="text" class="search__input" name="q" placeholder="Введите ключевое слово">
              <button type="submit" class="search__submit"></button>
            </form>
          </h2>
          <div class="blog">
            <ul class="tags__list tags__list--top js-tag-list">
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Все статьи</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Автобизнес</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Вендинг</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Продажа времени</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Универсальные</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">1С</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Частное мнение</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">ЗетаВеб</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Аналитика</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Devops</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Искусственный интеллект</a></li>
              <li class="tags__item"><a href="#" class="button button--sm button--black button--no-shadow tags__link">Гит</a></li>
              </li>
            </ul>
            <div class="custom-select js-custom-select">
              <div class="custom-select__box js-custom-select__box">
                <span class="custom-select__selected-option js-custom-select__selected-option">Выберите тег</span>
                <span class="custom-select__arrow"></span>
              </div>
              <div class="custom-select__options-container js-custom-select__options-container">
                <div class="custom-select__option js-custom-select__option">Все статьи</div>
                <div class="custom-select__option js-custom-select__option">Автобизнес</div>
                <div class="custom-select__option js-custom-select__option">Вендинг</div>
                <div class="custom-select__option js-custom-select__option">Продажа времени</div>
                <div class="custom-select__option js-custom-select__option">Универсальные</div>
                <div class="custom-select__option js-custom-select__option">1С</div>
                <div class="custom-select__option js-custom-select__option">Частное мнение</div>
                <div class="custom-select__option js-custom-select__option">ЗетаВеб</div>
                <div class="custom-select__option js-custom-select__option">Аналитика</div>
                <div class="custom-select__option js-custom-select__option">Devops</div>
                <div class="custom-select__option js-custom-select__option">Искусственный интеллект</div>
                <div class="custom-select__option js-custom-select__option">Гит</div>
              </div>
            </div>
            <div class="article__list">
              <div class="panel article__item">
                <div class="panel__content">
                  <div class="article__info">
                    <div class="article__date">23.11.2023</div>
                    <div class="article__time">10 минут</div>
                    <div class="article__tags-list tags__list">
                      <a href="#" class="button button--sm button--black button--no-shadow tags__link">Искусственный интеллект</a>
                    </div>
                  </div>
                  <div class="article__title">Номенклатура в автозапчастях или где есть подводные камни</div>
                  <div class="article__text">В «Технопарке Санкт-Петербурга» открылся первый демонстрационный полигон российских ИТ-вендоров – площадка, созданная в рамках концепции технологического развития страны до 2030 года и призванная поддерживать разработки, обеспечивающие независимость от зарубежного ПО.</div>
                  <a href="blog-item.html" class="article__link">Читать дальше</a>
                </div>
              </div>
              <div class="panel article__item">
                <div class="panel__content">
                  <div class="article__info">
                    <div class="article__date">23.11.2023</div>
                    <div class="article__time">10 минут</div>
                    <div class="article__tags-list tags__list">
                      <a href="#" class="button button--sm button--black button--no-shadow tags__link">Искусственный интеллект</a>
                    </div>
                  </div>
                  <div class="article__title">Номенклатура в автозапчастях или где есть подводные камни</div>
                  <div class="article__text">В «Технопарке Санкт-Петербурга» открылся первый демонстрационный полигон российских ИТ-вендоров – площадка, созданная в рамках концепции технологического развития страны до 2030 года и призванная поддерживать разработки, обеспечивающие независимость от зарубежного ПО.</div>
                  <a href="blog-item.html" class="article__link">Читать дальше</a>
                </div>
              </div>
              <div class="panel article__item" data-html-repeat="6">
                <div class="panel__content">
                  <div class="article__info">
                    <div class="article__date">23.11.2023</div>
                    <div class="article__time">10 минут</div>
                    <div class="article__tags-list tags__list">
                      <a href="#" class="button button--sm button--black button--no-shadow tags__link" data-fill="innerText; getRandomTag"></a>
                    </div>
                  </div>
                  <div class="article__title" data-fill="innerText; generateLoremIpsumString; [5, 12]"></div>
                  <div class="article__text" data-fill="innerText; generateLoremIpsumString; [15, 30]"></div>
                  <a href="blog-item.html" class="article__link">Читать дальше</a>
                </div>
              </div>
            </div>
            <div class="paginator">
              <button class="paginator__first">В начало</button>
              <div class="paginator__page">...</div>
              <button class="paginator__page paginator__page--active">4</button>
              <button class="paginator__page">5</button>
              <button class="paginator__page">6</button>
              <div class="paginator__page">...</div>
              <button class="paginator__last">Дальше</button>
            </div>
            <div class="button-panel panel panel--yellow panel--no-shadow">
              <div class="button-panel__text">Оставьте заявку для&nbsp;бесплатной консультации </div>
              <button class="button-panel__button button button--white button--bg" data-modal="contact-form">оставить заявку</button>
            </div>
          </div>
          
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 