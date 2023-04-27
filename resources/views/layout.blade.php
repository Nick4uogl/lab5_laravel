<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(["resources/scss/app.scss"])
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="header__container">
          <a href="#" class="header__logo logo">
            <img src={logo} alt="" />
            <p class="logo__title">
              <span>Меблі</span> від дяді Жори
            </p>
          </a>
          <div onClick={handleOverlay}>
            <ul class="menu">
              <li class="menu__item menu__item--active">
                <a href="#">
                  Головна
                </a>
              </li>
              <li class="menu__item">
                <a href="#">
                  Про нас
                </a>
              </li>
              <li class="menu__item">
                <a href="#">
                  Товари
                </a>
              </li>
            </ul>
          </div>
          <div class="header__actions">
            <a href="tel:+380960981783" class="header__phone">
              <img src={phone} alt="" />
              <p>+380960981783</p>
            </a>
            <a href="#" class="header__basket">
              <img src={basket} alt="" />
            </a>
          </div>
            <div class="burger">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>
      </div>
    @yield('content')
    <div class="footer">
        <div class="footer__container">
          <a href="/" class="footer-logo">
            <p class="footer-logo__title">
              <span>Меблі</span> від дяді Жори
            </p>
          </a>
          <ul class="menu-footer">
            <li class="menu-footer__item">
              <a href="/#">Головна</a>
            </li>
            <li class="menu-footer__item">
              <a href="/#">Про нас</a>
            </li>
            <li class="menu-footer__item">
              <a href="/#">Товари</a>
            </li>
          </ul>
          <ul class="footer-social">
            <li class="footer-social__item">
              <a href="/#">
                <span>Instagram</span>
              </a>
            </li>
            <li class="footer-social__item">
              <a href="/#">
                <span>Telegram</span>
              </a>
            </li>
            <li class="footer-social__item">
              <a href="/#">
                
                <span>Facebook</span>
              </a>
            </li>
          </ul>
          <div class="footer-info">
            <p>Партизанська 1, с. Берестяне, Волинська область</p>
            <p>+380960981783</p>
            <p>kolianpylupc@gmail.com</p>
          </div>
        </div>
      </div>
</body>
</html>