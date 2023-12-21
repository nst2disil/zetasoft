<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'blog-item'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">
            Необычная франча или храни порядок и порядок сохранит тебя
          </h2>
          <div class="post">
            <div class="post__sidebar">
              <div class="article__date">23.11.2023</div>
              <div class="article__time">10 минут</div>
              <div class="tags__list">
                <a href="#" class="button button--sm button--black button--no-shadow tags__link">Искусственный интеллект</a>
              </div>
            </div>
            <div class="post__content">
              <h3>Всем добрый день!</h3>
              <p>
                Для начала, давайте познакомимся. Меня зовут Сергей Зольколин, и я директор компании «Зета Софт».<br/>
                Такая форма общения для нас немного в новинку, но мы попробуем сделать её достаточно интересной. Поэтому, я сформирую небольшое введение.<br/>
                Сотрудники у нас умные и хорошие, и, что важно - настоящие профи своего дела.<br/>
                Каждый из нас будет писать о том, что ему интересно – в том числе, о тех продуктах, вещах и решениях, которые он развивает в рамках компании.<br/>
                Какие-то статьи будут немного более технические, какие-то – наоборот, общего плана – но мы искренне надеемся, что Вам понравится.<br/>
                Наша компания сильна своим коллективом – у нас отличные мозги, «прямые» руки и приличный опыт в отраслях, которыми мы занимаемся. Мы редко делаем «абы что», и почти всегда добиваемся результата – лишь бы Заказчик этого действительно хотел.<br/>
                Кроме услуг, мы разрабатываем и поддерживаем линейку наших продуктов – но о всём этом немного позднее.<br/>
                </p>
                <p>  До новых встреч!</p>

                <p>  Искренне ваш,<br/>
                Сергей Зольколин</p>
                
                <img src="https://globalwfm.com/wp-content/uploads/2022/08/Should-You-Return-To-Office-Work-Pros-And-Cons.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="wrapper">
          <h2 class="section__title">
            Другие статьи
          </h2>
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
            <div class="panel article__item">
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
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 