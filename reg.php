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
      <section class="section section--main">
        <div class="wrapper">
          <h1 class="section__title">Регистрация</h1>
          <div class="reg-form">
          </div>
          <form class="reg-form" action="/reg" method="POST">
            <input type="text" name="login" placeholder="ФИО" class="input" required>
            <input type="text" name="login" placeholder="Организация" class="input">
            <input type="text" name="login" placeholder="Почта" class="input" required>
            <input type="password" name="password" placeholder="Пароль" class="input" required>
            <input type="password" name="password" placeholder="Подтверждение пароля" class="input" required>
            <input type="text" name="phone" placeholder="ФИО" class="input" required>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Отправить" class="form__submit button button--block button--bg button--yellow">
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
