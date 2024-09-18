<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'product'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <div class="anchor" id="top"></div>
      <section class="section product-page" >
        <div class="wrapper">
          <div class="product-page__title">Zeta Веб-сервисы (Zeta WSG)</div>
          <div class="product-page__subtitle">решение, собравшее веб-сервисы различных поставщиков автозапчастей в&nbsp;один удобный API</div>
          <div class="product-page__tags">
            <a href="#" class="panel panel--white panel--no-shadow product-page__tags-item">Описание API</a>
            <a href="#" class="panel panel--white panel--no-shadow product-page__tags-item">База знаний</a>
            <a href="#" class="panel panel--white panel--no-shadow product-page__tags-item">Что&nbsp;нового в&nbsp;версии</a>
            <a href="#" class="product-page__tags-item">Обновление</a>
          </div>
          <div class="product-page__links">
            <a href="#schema" class="panel panel--red panel--shadow-white product-page__links-item">Схема работы</a>
            <a href="#why" class="panel panel--red panel--shadow-white product-page__links-item">Зачем нужен</a>
            <a href="#benefits" class="panel panel--red panel--shadow-white product-page__links-item">Преимущества</a>
            <a href="#how" class="panel panel--red panel--shadow-white product-page__links-item">Как&nbsp;работать</a>
            <a href="#who" class="panel panel--red panel--shadow-white product-page__links-item">Кому подойдёт</a>
            <a href="#tariffs" class="panel panel--red panel--shadow-white product-page__links-item">Тарифы</a>
            <a href="#services" class="panel panel--red panel--shadow-white product-page__links-item">Подключённые веб-сервисы</a>
          </div>
        </div>
        <img src="./i/zeta-wsg-bg.jpg" alt="backgdound illustration" class="product-page__image">
      </section>
      <div class="anchor" id="schema"></div>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title section__title--with-button">Общая схема работы:
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="text-wrapper text-wrapper--links">
            <div class="text-wrapper__links link-list">
              <div class="link-list__header">Полезные ссылки</div>
              <a href="#api_description.php" class="button button--black button--sm button--no-shadow">Описание API</a>
              <a href="#knowledge_base.php" class="button button--black button--sm button--no-shadow">База знаний</a>
              <a href="#whats_new.php" class="button button--black button--sm button--no-shadow">Что нового в версии</a>
              <a href="#update.php" class="button button--black button--sm button--no-shadow">Обновление</a>
            </div>
            <div class="text-wrapper__text">Веб-сервис&nbsp;— это&nbsp;механизм, позволяющий взаимодействовать с&nbsp;информационной системой извне, используя заранее определённый набор команд для&nbsp;получения или&nbsp;передачи данных в&nbsp;определённом формате.</div>
          </div>
          <div class="text-wrapper">
            <a href="./i/menyu-atol-onlain 1.jpg" data-fancybox="screenshots" class="swiper-slide screenshots__item">
              <img src="./i/menyu-atol-onlain 1.jpg" alt="screenshot 1" class="screenshots__img">
            </a>
          </div>
          <div class="anchor" id="why"></div>
          <h2 class="section__title section__title--with-button">Зачем это нужно?
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Zeta Веб-сервисы объединяет веб-сервисы различных поставщиков автотоваров в&nbsp;один сервис</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Если&nbsp;вы&nbsp;продаёте автозапчасти и&nbsp;автотовары под&nbsp;заказ и&nbsp;используете остатки ваших поставщиков, то&nbsp;наверняка задумывались, как&nbsp;получить информацию о&nbsp;ценах и&nbsp;наличии как&nbsp;можно быстрее</li>
                <li>Об&nbsp;этом думают и&nbsp;ваши поставщики, реализуя со&nbsp;своей стороны сервисы онлайн-проценки (API) и&nbsp;заказа товара без&nbsp;участия своих менеджеров.</li>
              </ul>
              <button class="button cols__button button--full-width button--red button--bg" data-modal="contact-form" data-modal-title="Заполните данные, чтобы заказать презентацию">Заказать&nbsp;презентацию</button>
            </div>
          </div>
        </div>
      </section>
      <div class="anchor" id="benefits"></div>
      <section class="section section--grey">
        <div class="wrapper">
          <h2 class="section__title section__title--with-button">Основные преимущества:
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="benefits">
            <div class="panel benefits__item panel--no-shadow" data-modal="info1">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Подключение к множеству поставщиков за один раз</div>
                  <img src="./i/036-project management.svg" alt="project management illustration" class="benefits__image">
                </div>
                <div class="panel__bottom">
                  <div class="panel__link">Подробнее</div>
                </div>
              </div>
            </div>
            <div class="panel benefits__item panel--no-shadow" data-modal="info2">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Лёгкая интеграция с использованием RESTful API</div>
                  <img src="./i/047-big data.svg" alt="big data illustration" class="benefits__image">
                </div>
                <div class="panel__bottom">
                  <div class="panel__link">Подробнее</div>
                </div>
              </div>
            </div>
            <div class="panel benefits__item panel--no-shadow" data-modal="info3">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Сопоставление брендов и использование «эталонных» брендов автозапчастей</div>
                  <img src="./i/006-product management.svg" alt="project management illustration" class="benefits__image">
                </div>
                <div class="panel__bottom">
                  <div class="panel__link">Подробнее</div>
                </div>
              </div>
            </div>
            <div class="panel benefits__item panel--no-shadow" data-modal="info4">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="panel__title">Быстрая и удобная проценка и заказ товаров</div>
                  <img src="./i/007-sales.svg" alt="sales illustration" class="benefits__image">
                </div>
                <div class="panel__bottom">
                  <div class="panel__link">Подробнее</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="anchor" id="how"></div>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title section__title--with-button">Как работать с веб-сервисами?
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Вы можете использовать наш шлюз веб-сервисов в любой информационной системе</div>
            </div>
            <div class="cols__item">
              <ul class="ul">
                <li>Это может быть ваш сайт, информационная система, а также наши решения — Zeta Рабочее место менеджера (Zeta РММ) или система продаж Zeta Web.</li>
                <li>С помощью удобного интерфейса, основанного на «тонких» формах 1С, вы можете управлять своими веб-сервисами, используя их для проценки и заказа товара в нужной вам среде.</li>
              </ul>
            </div>
          </div>
          <h2 class="section__title section__title--with-button">Кому подойдёт решение?
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="block-group block-group--2">
            <a href="#" class="block-group__item panel panel--black panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Если вы продавец, у вас есть поставщики</div>
                <div class="panel__text">и вы хотите использовать их товары в вашей информационной системе — то наш сервис и другие наши решения, помогут вам в этом</div>
              </div>
            </a>
            <a href="#" class="block-group__item panel panel--no-shadow">
              <div class="panel__content">
                <div class="panel__title">Если вы поставщик</div>
                <div class="panel__text">и имеете свой веб-сервис или хотите разместиться у нас с помощью парсинга, то вы также можете подключиться к WSG</div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <div class="anchor" id="tariffs"></div>
      <section class="section section--grey">
        <div class="wrapper">
          <h2 class="section__title section__title--with-button">Тарифы
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="cols">
            <div class="cols__item">
              <div class="section__subtitle">Zeta Веб-сервисы</div>
            </div>
            <div class="cols__item">
              На любом из тарифов WSG вы можете самостоятельно настроить любое количество веб-сервисов поставщиков.
            </div>
          </div>
          <div class="tariffs">
            <a href="#" class="products__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="products__title">Промо</div>
                  <div class="products__price hide-md-down">Бесплатно</div>
                </div>
                <div class="products__text">В рамках тарифа «Промо» предоставляется доступ на 2 недели без ограничений.</div>
                <div class="panel__bottom hide-md-up">
                  <div class="products__price">Бесплатно</div>
                </div>
                <img src="https://placehold.co/58x16" alt="" class="panel__image">
              </div>
            </a>
            <a href="#" class="products__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="products__title">Ежедневный (списание в конце дня за каждый включённый веб-сервис)</div>
                  <div class="products__price hide-md-down">17 ₽/день</div>
                </div>
                <div class="products__text">В рамках тарифа предоставляется неограниченное количество запросов</div>
                <div class="panel__bottom hide-md-up">
                  <div class="products__price">17 ₽/день</div>
                </div>
                <img src="https://placehold.co/58x16" alt="" class="panel__image">
              </div>
            </a>
            <a href="#" class="products__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="products__title">Тариф A (списание раз в месяц в день активации тарифа)</div>
                  <div class="products__price hide-md-down">1 000 ₽/месяц</div>
                </div>
                <div class="products__text">В рамках тарифа предоставляется 1 500 запросов</div>
                <div class="panel__bottom hide-md-up">
                  <div class="products__price">1 000 ₽/месяц</div>
                </div>
                <img src="https://placehold.co/58x16" alt="" class="panel__image">
              </div>
            </a>
            <a href="#" class="products__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="products__title">Тариф B (списание раз в месяц в день активации тарифа)</div>
                  <div class="products__price hide-md-down">2 000 ₽/месяц</div>
                </div>
                <div class="products__text">В рамках тарифа предоставляется 5 000 запросов</div>
                <div class="panel__bottom hide-md-up">
                  <div class="products__price">2 000 ₽/месяц</div>
                </div>
                <img src="https://placehold.co/58x16" alt="" class="panel__image">
              </div>
            </a>
            <a href="#" class="products__item panel panel--white panel--no-shadow">
              <div class="panel__content">
                <div class="panel__top">
                  <div class="products__title">Тариф С</div>
                  <div class="products__price hide-md-down">Индивидуальный расчёт</div>
                </div>
                <div class="products__text">В рамках тарифа «Промо» предоставляется доступ на 2 недели без ограничений.</div>
                <div class="panel__bottom hide-md-up">
                  <div class="products__price">Индивидуальный расчёт</div>
                </div>
                <img src="https://placehold.co/58x16" alt="" class="panel__image">
              </div>
            </a>
          </div>
          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Оставьте заявку для бесплатной консультации</div>
            <button class="button-panel__button button button--white button--bg" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
      <div class="anchor" id="services"></div>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title section__title--with-button">Веб-сервисы, доступные к подключению
            <a href="#" class="scroll-top-button scroll-top-button--red"></a>
          </h2>
          <div class="web-services">
            <div class="web-services__item"><img src="./i/web-services/image 221.png" alt=""><span>ABS-Auto</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 222.png" alt=""><span>Autopiter</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 223.png" alt=""><span>ABS-Auto</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 224.png" alt=""><span>AvtoTO</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 225.png" alt=""><span>Emex</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 226.png" alt=""><span>Exist</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 227.png" alt=""><span>Ixora</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 228.png" alt=""><span>MX Group</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 229.png" alt=""><span>PartGrade</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 230.png" alt=""><span>Parttrade</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 231.png" alt=""><span>Trinity Parts</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 232.png" alt=""><span>West Car</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 233.png" alt=""><span>АВИ (OnlineZakaz)</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 234.png" alt=""><span>Авто-Евро</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 235.png" alt=""><span>Автоконтинент</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 236.png" alt=""><span>Автоспутник</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 237.png" alt=""><span>АвтоСтелс</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 238.png" alt=""><span>АвтоТрейд</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 239.png" alt=""><span>Армтек</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 240.png" alt=""><span>БАВ-Движение</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 241.png" alt=""><span>Берг</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 242.png" alt=""><span>Глобус (GLOB.US)</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 243.png" alt=""><span>Дизель Маркет</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 244.png" alt=""><span>Корона Авто</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 245.png" alt=""><span>Микадо</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 246.png" alt=""><span>Москворечье</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 247.png" alt=""><span>Омега</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 248.png" alt=""><span>Оптимум Трейдинг</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 249.png" alt=""><span>ПартКом</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 250.png" alt=""><span>Росско</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 251.png" alt=""><span>Рувал</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 252.png" alt=""><span>РусИмпортКомплект</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 253.png" alt=""><span>ТИСС (TISS)</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 254.png" alt=""><span>Торк Авто</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 255.png" alt=""><span>Торк Трак</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 256.png" alt=""><span>Фаворит</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 257.png" alt=""><span>Форвард Авто Партс</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 258.png" alt=""><span>Форум-Авто</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 259.png" alt=""><span>Шате-М</span></div>
            <div class="web-services__item"><img src="./i/web-services/image 260.png" alt=""><span>Юником</span></div>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
  <div class="modal" id="info1">
    <div class="modal__bg js-modal-exit"></div>
    <div class="modal__container">
      <button class="modal__close js-modal-exit"></button>
      <div class="modal__title modal__title--small js-title">
        Подключение к множеству поставщиков за один раз
      </div>
      <div class="modal__content">
        <p>Для того, чтобы работать с конкретным веб-сервисом, его необходимо «подключит». Ваш программист должен связаться с поставщиком, получить техническую документацию с описанием и запрограммировать какой‑либо код, позволяющий использовать необходимые функции веб-сервиса.</p>
        <p>Стоит учитывать, что каждый поставщик решает задачу по созданию веб-сервиса в соответствии с собственным видением задачи, техническими возможностями и компетенциями специалистов. И поэтому веб-сервисы, выполняющие похожие функции, могут иметь разную разную структуру и их надо программировать заново для каждого поставщика.</p>
        <p>Именно поэтому подключение множества поставщиков к своей информационой системе достаточно хлопотное и не самое простое занятие. Наш сервис полностью решит для вас этот вопрос.</p>
      </div>
    </div>
  </div>
</body>
</html>
