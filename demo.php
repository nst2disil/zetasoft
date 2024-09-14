<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'products'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h1 class="section__title">
            h1 заголовок
          </h1>
          <div class="section__subtitle">
            подзаголовок
          </div>
          <h2 class="section__title">
            h2 заголовок
          </h2>
          <h2 class="section__subtitle">
            h2 подзаголовок
          </h2>
          <h3 class="section__title">
            h3 заголовок
          </h3>
          <div class="cols">
            <div class="cols__item">
              <h3 class="section__title">Колонка 1</h3>
              Содержимое колонки
            </div>
            <div class="cols__item">
              <h3 class="section__title">Колонка 2</h3>
              Содержимое колонки

            </div>
          </div>
          <div class="anchor" id="panels"><!--Пункт назначения якоря--></div>
          <div class="demo">
            <div class="demo__panels">
              <div class="panel">
                <div class="panel__content">Панель</div>
              </div>
              <div class="panel panel--no-shadow">
                <div class="panel__content">Панель без тени</div>
              </div>
              <div class="panel panel--shadow-red">
                <div class="panel__content">Панель с кастомной тенью</div>
              </div>
              <a class="panel panel--clickable" href="#buttons">
                <div class="panel__content">Кликабельная панель + якорь</div>
              </a> 
              <div class="panel panel--red">
                <div class="panel__content">Панель цветная</div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">Панель с шапкой</div>
              </div>
              <div class="panel">
                <div class="panel__head panel__head--red panel__head--reverse"></div>
                <div class="panel__content">Панель с ревёрснутой шапкой</div>
              </div>
              <div class="panel panel--sm">
                <div class="panel__head panel__head--red"></div>
                <div class="panel__content">Панель по меньше!!!</div>
              </div>
              <div class="panel panel--shadow-yellow">
                <div class="panel__head panel__head--yellow panel__head--reverse">
                  <div class="panel__top">
                    <div class="products__name products__name--red">Карточка кейса</div>
                    <div class="products__price hide-md-down">От 132 000 ₽</div>
                  </div>
                </div>
                <div class="panel__content">
                  <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                  <div class="panel__bottom">
                    <div class="bottom__block">
                      <a href="#" class="panel__link">Подробнее</a>
                      <div class="products__price hide-md-up">От 132 000 ₽</div>
                    </div>
                    <img src="https://placehold.co/60x60" alt="" class="products__image">
                  </div>
                </div>
              </div>
              <a href="#serviceDetail" class="panel panel--compact panel--shadow-black" data-tab-id="service1c1">
                <div class="panel__head panel__head--yellow panel__head--reverse">
                  <div class="panel__top">
                    <div class="products__title">Длинное название карточки</div>
                    <div class="products__price hide-md-down">13 000 ₽</div>
                  </div>
                </div>
                <div class="panel__content">
                  <div class="products__text">Карточка-ссылка без кнопки подробнее, и с картинкой справа. Шапка реверснута, цена на месте и выводится адаптивно</div>
                  <div class="panel__bottom hide-md-up">
                    <div class="bottom__block">
                      <div class="products__price">13 000 ₽</div>
                    </div>
                  </div>
                  <img src="https://placehold.co/60x60" alt="" class="products__image">
                </div>
              </a>
              <a href="#serviceDetail" class="panel panel--compact panel--no-price panel--shadow-black" data-tab-id="service1c1">
                <div class="panel__head panel__head--yellow panel__head--reverse">
                  <div class="panel__top">
                    <div class="products__title">Короткое</div>
                  </div>
                </div>
                <div class="panel__content">
                  <div class="products__text">Карточка-ссылка без кнопки подробнее и без цены, и с картинкой побольше справа. Шапка реверснута, цена на месте и выводится адаптивно</div>
                  <img src="https://placehold.co/80x80" alt="" class="products__image">
                </div>
              </a>
              <div class="panel products--methodics">
                <div class="panel__content">
                  <div class="panel__top">
                    <div class="products__name">Панель методики</div>
                    <div class="products__price hide-md-down">От 50 000 ₽</div>
                  </div>
                  <div class="products__text">Текст решили подгонять таким образом, чтолы он вписывался в карточку, на эскизе было две строки, поэтому тут тоже две</div>
                  <div class="panel__bottom">
                    <div class="bottom__block">
                      <a href="#" class="panel__link">Подробнее</a>
                      <div class="products__price hide-md-up">От 50 000 ₽</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel__content cols">
                  <div class="cols__item">Непонятно зачем она вообще существует, но на сайте есть пара мест использования</div>
                  <div class="cols__item">Встречайте, знаменитая панелька с двумя колонками!</div>
                </div>
              </div>
            </div>
            <div class="anchor" id="buttons"><!--Пункт назначения якоря--></div>
            <div class="demo__buttons">
              <button class="button">Кнопка</button>
              <a class="button" href="#panels">Кнопка-ссылка якорь (или просто ссылка)</a>
              <button class="button button--red">Красная кнопка</button>
              <button class="button button--blue button--active-yellow js-demo-active-button">Кнопка с сохранением нажатия</button>
              <button class="button button--bg">Кнопка ПОБОЛЬШЕ</button>
              <button class="button button--sm">Кнопка по менше</button>
              <button class="button button--mobile-full-width">Кнопка, которая на мобиле будет во всю ширину</button>
              <button class="button button--no-decoration">Кнопка без оформления</button>
            </div>
            <div class="demo__items">
              <div class="button-panel panel panel--yellow panel--no-shadow">
                <div class="button-panel__text">Панель с кнопкой</div>
                <button class="button-panel__button button button--white button--bg" data-modal="contact-form" data-modal-title="Кастомный заголовок окна">Кнопка вызова попапа</button>
              </div>
              <p>Для вызова попапа его нужно добавить в код:
                <code>
                  &lt;div class=&quot;modal&quot; id=&quot;contact-form&quot;&gt;...&lt;/div&gt;
                </code>
              </p>
            </div>
            <div class="demo__items">
              <div class="block-group block-group--2">
                <div class="block-group__item panel panel--no-shadow">
                  <div class="panel__content">Блок 1 из 2</div>
                  <img src="./i/032-data visualization.svg" alt="иллюстрация" class="panel__image">
                </div>
                <div class="block-group__item panel panel--black panel--no-shadow">
                  <div class="panel__content">Блок 2 из 2</div>
                  <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
                </div>
              </div>
              <div class="block-group block-group--3">
                <div class="block-group__item panel panel--no-shadow">
                  <div class="panel__content">Блок 1 из 3</div>
                  <img src="./i/032-data visualization.svg" alt="иллюстрация" class="panel__image">
                </div>
                <div class="block-group__item panel panel--black panel--no-shadow">
                  <div class="panel__content">Блок 2 из 3</div>
                  <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
                </div>
                <a class="block-group__item panel panel--cyan" href="./services.html#big-business">
                  <div class="panel__content">
                    <div class="">Очень большой блок (с сылкой)</div>
                    <div class="panel__link">Подробнее</div>
                    <img src="./i/025-structured data.svg" alt="иллюстрация" class="panel__image">
                  </div>
                </a>
              </div>
              <div class="block-group block-group--4">
                <div class="block-group__item panel panel--no-shadow">
                  <div class="panel__content">Аналогичная история, только про 4 блока</div>
                  <img src="./i/032-data visualization.svg" alt="иллюстрация" class="panel__image">
                </div>
                <div class="block-group__item panel panel--green panel--no-shadow">
                  <div class="panel__content">Блок 2 из 4</div>
                  <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
                </div>
                <div class="block-group__item panel panel--red panel--no-shadow">
                  <div class="panel__content">Блок 3 из 4</div>
                  <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
                </div>
                <div class="block-group__item panel panel--yellow panel--no-shadow">
                  <div class="panel__content">Блок 4 из 4</div>
                  <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
                </div>
              </div>
            </div>
            <div class="demo__blog">
              <h2 class="section__title mb-0">Власти внедряют налог на воздух</h2>
              <div class="section__subtitle">как правильно дышать, чтобы сэкономить</div>
              <p class="p">Вчерашним вечером правительство объявило о нововведении, которое уже вызвало бурю обсуждений в соцсетях — с 1 октября вводится налог на воздух. Представитель Министерства ресурсов и фантазий заявил, что современный человек дышит слишком часто и, что уж говорить, бесплатно. "Мы долго закрывали глаза на этот факт, но пришло время честно взвесить, сколько кислорода человек потребляет в год", — сообщил чиновник. Теперь за каждый вдох придется заплатить символические 0,05 копейки. Однако важно отметить: выдохи пока остаются бесплатными.</p>
              <img class="blog__img fl" src="https://sun9-50.userapi.com/impg/PYJkzKkIS8JCXR4TaL8Zz0N1fDDo6KOV-PIjtg/h2IszihtROA.jpg?size=1024x1024&quality=96&sign=9589bb1dcf9e441fe6b830e5063bc634&type=album" alt="Иллюстрация">
              <p class="p tac">Вместе с этим, министр здравоохранения на пресс-конференции рассказал, как оптимизировать дыхание для снижения налоговой нагрузки. По его словам, люди должны переходить на "размеренное дыхание". Новая стратегия предполагает делать один вдох в течение 30 секунд. Придерживаясь этой техники, граждане смогут не только сэкономить, но и улучшить свое здоровье. "Спешка с дыханием только вредит организму", — подчеркнул министр, предложив провести общенациональный марафон "Дыши глубже, плати меньше".</p>
              <p class="p">Как это нововведение скажется на бизнесе — пока остается загадкой. Специалисты по фитнесу уже обеспокоены тем, что занятия йогой и бегом станут роскошью. А владельцы спортзалов задумались о внедрении новых тарифов за посещение. Зато в сети появились ролики с лайфхаками, как правильно задерживать дыхание на рабочем месте, чтобы снизить затраты.</p>
            </div>
            <div class="demo__blog">
              <section>
                <h3 class="section__title">Классы для выравнивания текста</h3>
                <p class="tal">Класс <code>.tal</code> выравнивает текст по левому краю.</p>
                <p class="tac">Класс <code>.tac</code> выравнивает текст по центру.</p>
                <p class="tar">Класс <code>.tar</code> выравнивает текст по правому краю.</p>
              </section>

              <section>
                <h3 class="section__title">Классы для плавающих элементов</h3>
                <p><code>.fl</code> и <code>.fr</code> используются для управления плавающими элементами, такими как изображения. Пример ниже демонстрирует их применение:</p>
                <div>
                  <img src="https://via.placeholder.com/100" class="fl" alt="Левая картинка">
                  <img src="https://via.placeholder.com/100" class="fr" alt="Правая картинка">
                  <p>Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. Текст между картинками, выравнен по умолчанию. </p>
                </div>
              </section>

              <section>
                <h3 class="section__title">Классы для отступов сверху и снизу</h3>
                <p class="mt-0 mb-0">Классы <code>.mt-0</code> и <code>.mb-0</code> устанавливают отступы в 0 пикселей сверху и снизу соответственно.</p>
                <p class="mt-6 mb-6">Классы <code>.mt-6</code> и <code>.mb-6</code> устанавливают отступы в 6 пикселей сверху и снизу соответственно.</p>
                <p class="mt-12 mb-12">Классы <code>.mt-12</code> и <code>.mb-12</code> устанавливают отступы в 12 пикселей сверху и снизу соответственно.</p>
                <p class="mt-18 mb-18">Классы <code>.mt-18</code> и <code>.mb-18</code> устанавливают отступы в 18 пикселей сверху и снизу соответственно.</p>
                <p class="mt-24 mb-24">Классы <code>.mt-24</code> и <code>.mb-24</code> устанавливают отступы в 24 пикселя сверху и снизу соответственно.</p>
                <p class="mt-32 mb-32">Классы <code>.mt-32</code> и <code>.mb-32</code> устанавливают отступы в 32 пикселя сверху и снизу соответственно.</p>
                <p class="mt-48 mb-48">Классы <code>.mt-48</code> и <code>.mb-48</code> устанавливают отступы в 48 пикселей сверху и снизу соответственно.</p>
                <p class="mt-64 mb-64">Классы <code>.mt-64</code> и <code>.mb-64</code> устанавливают отступы в 64 пикселя сверху и снизу соответственно.</p>
              </section>
              <h2 class="section__title">
                Заголовок с ссылкой
                <a class="title-link fs-16" href="#">Интересная ссылка</a>
              </h2>
              <h2 class="section__title">
                Заголовок с кнопкой
                <button class="button button--red button--sm">Мы всё дальше от бога</button>
              </h2>
              <h2 class="section__title" data-counter="13">
                Заголовок со счётчиком
              </h2>
              <p>Теперь для использования счетчика мы просто добавляем аттрибут <code>&lt;h3 class="section__title" data-counter="13"&gt;&lt;/h3&gt;</code></p>

              <section>
                <h3 class="section__title">Классы для изменения размера шрифта</h3>
                <p class="fs-16">Класс <code>.fs-16</code> устанавливает размер шрифта 16 пикселей.</p>
                <p class="fs-20">Класс <code>.fs-20</code> устанавливает размер шрифта 20 пикселей.</p>
                <p class="fs-24">Класс <code>.fs-24</code> устанавливает размер шрифта 24 пикселя.</p>
                <p class="fs-32">Класс <code>.fs-32</code> устанавливает размер шрифта 32 пикселя.</p>
                
              </section>
            </div>
          </div>

        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          Секция черная
          <p class="text-wrapper">
            Блок с акцетом на тексте, имеет ограниченную ширину и спозиционирован по центру. Может быть <code>p</code> или <code>div</code>, разница только в автоматических отступах
          </p>
        </div>
      </section>
      <section class="section section--grey">
        <div class="wrapper">
          <h2 class="title">Серая секция с табами</h2>
          <div class="demo js-tabs-wrapper">
            <div class="demo__buttons">
              <button class="button button--red" data-tabs-toggler-id="red">Желтая кнопка</button>
              <button class="button button--yellow" data-tabs-toggler-id="yellow">Зеленая кнопка</button>
              <button class="button button--green" data-tabs-toggler-id="green">Красная кнопка</button>
            </div>
            <div class="demo__tabs">
              <div class="panel" data-tabs-item-id="default"><div class="panel__content">Чёрная панель</div></div>
              <div class="panel panel--red" data-tabs-item-id="red"><div class="panel__content">Желтая панель</div></div>
              <div class="panel panel--yellow" data-tabs-item-id="yellow"><div class="panel__content">Зеленая панель</div></div>
              <div class="panel panel--green" data-tabs-item-id="green"><div class="panel__content">Красная панель</div></div>
            </div>
            <p>Тут секретов нет. Общему контейнеру с табами даём класс <code>.js-tabs-wrapper</code>, чтобы не мешать разные табы друг с другом. Всем переключателям даём аттрибут <code>data-tabs-toggler-id="айдишник таба"</code>, а всем табам даётм аттрибут <code>data-tabs-item-id="айдишник таба"</code>. Дефолтному табу всегда даём айдишник <code>data-tabs-item-id="default"</code></p>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
