<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'vacancy'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <div class="vacancy-info">
            <h1 class="section__title">
              <span>Разработчик 1С (Middle)</span>
              <div class="vacancy-info__stack stack">
                <img src="./dist/img/stack_c.png" alt="C++ icon" title="C++" class="stack__item">
                <img src="./dist/img/stack_c.png" alt="C++ icon" title="C++" class="stack__item">
                <img src="./dist/img/stack_c.png" alt="C++ icon" title="C++" class="stack__item">
              </div>
            </h1>
            <div class="section__subtitle">от 150 000 до 200 000 руб. на руки</div>
            <button class="button button--block button--big button--yellow button--mobile-full-width vacancy-info__button" data-modal="contact-form">Откликнуться</button>
          </div>
          <div class="vacancy-list">
            <div class="vacancy-list__item">
              <h2 class="section__title">Чего ожидать от работы:</h2>
              <div class="vacancy-list__detail">
                <ul class="ul">
                  <li>Поставленный рабочий процесс</li>
                  <li>Интересной и интенсивной работы над разноплановыми задачами</li>
                  <li>Отсутствия простоя из-за нехватки задач — они есть всегда</li>
                  <li>Компетентного руководителя и крутых коллег</li>
                  <li>Возможность на 100% дистанционной работы (но можно и в офисе)</li>
                  <li>Возможность обучения и роста до Senior-разработчика</li>
                  <li>Оформление по ТК РФ, белые выплаты</li>
                  <li>Мы аккредитованная IT-компания</li>
                </ul>
              </div>
            </div>
            <div class="vacancy-list__item">
              <h2 class="section__title">Как мы работаем с задачами:</h2>
              <div class="vacancy-list__detail">
                <ul class="ul">
                  <li>В работе программиста мы используем передовые для 1С (на самом деле, общепринятые вне 1С) процессы и практики</li>
                  <li>канбан для задач (чтобы не переключаться на разные дела в течение дня, а делать то, что надо)</li>
                  <li>аналитиков для общения с клиентами (95% общения программиста проходит внутри компании)</li>
                  <li>подробную и качественную постановку задач</li>
                  <li>BSL Language Server для проверки кода</li>
                  <li>Vanessa automation для тестирования</li>
                  <li>хранилища для контроля версий (git)</li>
                  <li>на подходе CI / CD</li>
                </ul>
              </div>
            </div>
            <div class="vacancy-list__item">
              <h2 class="section__title">Что должен делать разработчик:</h2>
              <div class="vacancy-list__detail">
                <ul class="ul">
                  <li>Взять новое задание, прочитать и понять постановку, написанную аналитиком</li>
                  <li>Понять задание (если что-то не понятно выяснить все перед тем как делать)</li>
                  <li>Написать качественный программный код для реализации этой постановки в соответствии со стандартами 1С</li>
                  <li>Продвинуть задачу по канбану согласно рабочему процессу</li>
                  <li>Объяснить аналитику, как теперь все работает, взять следующую задачу</li>
                </ul>
              </div>
            </div>
            <div class="vacancy-list__item">
              <h2 class="section__title">Что для нас важно:</h2>
              <div class="vacancy-list__detail">
                <ul class="ul">
                  <li>Опыт разработки на платформе 1С от 3х лет</li>
                  <li>Опыт внедрения/доработки конфигураций 1С: УТ/КА/ERP/БП (в любом сочетании)</li>
                  <li>Желателен опыт работы с интеграциями (web(http)-сервисы и пр.)</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="button-panel panel panel--black panel--no-shadow">
            <div class="button-panel__text">Оставьте свой отклик на вакансию</div>
            <button class="button-panel__button button button--block button--white button--big" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 