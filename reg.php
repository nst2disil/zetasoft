<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'index'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header">
      <!-- copy inside <header id="ccphupper" -->
      <?php include './partials/_header.php'; ?>
      <!-- end copy inside <header id="ccphupper" -->
    </div>
    <div class="container__content">
      <!-- copy inside <section id="ccphworkarea" class="page_full-width"> -->
      <section class="section section--reg">
        <div class="wrapper">
          <h1 class="section__title">Регистрация</h1>
          <form class="reg-form" action="/reg" method="POST">
            <div class="reg-form__tip">Заполните, пожалуйста, форму, чтобы получить доступ в личный кабинет</div>
            <input type="text" name="login" placeholder="ФИО" class="input" required>
            <input type="text" name="company" placeholder="Организация" class="input">
            <input type="text" name="email" placeholder="Почта" data-mask="\S*@?\S*$" class="input" required>
            <input type="password" name="password" placeholder="Пароль" class="input" required>
            <input type="password" name="password" placeholder="Подтверждение пароля" class="input" required>
            <input type="text" name="phone" placeholder="+7(000)000-00-00" data-mask="+{7}(000)000-00-00" class="input js-phone-mask" required>
            <textarea name="" id="" cols="30" rows="5" placeholder="Комментарий" class="textarea"></textarea>
            <span class="reg-form__tip">Нажимая на кнопку «Отправить», я <a class="reg-form__link" href="#">даю согласие</a> на обработку персональных данных</span>
            <input type="submit" value="Отправить" class="reg-form__submit button button--block button--bg button--yellow">
          </form>
        </div>
      </section>
      <!-- end copy inside <section id="ccphworkarea" class="page_full-width"> -->

    </div>
    <div class="container__footer">
      <!-- copy inside <footer id="ccphbottom" class="footer"> -->
      <?php include './partials/_footer.html'?>
      <!-- end copy inside <footer id="ccphbottom" class="footer"> -->
    </div>
  </div>
</body>
</html>
