<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="block1">
      <header class="head">
        <div class="nav-bar">
          <h3>Эльбрусская прохлада</h3>
          <p class="nav-bar text">Главная</p>
          <p class="nav-bar text">Каталог</p>
          <p class="nav-bar text">Как заказать</p>
          <p class="nav-bar text">Отзывы</p>
          <p class="nav-bar text">О нас</p>
          <p class="nav-bar text">Контакты</p>
        </div>
        <div>
          <p class="nav-bar number">+7 928 076 14 98</p>
          <button class="nav-bar button">Заказать обратный звонок</button>
        </div>
        <img class="burger-icon" src="/img/burger.png" alt="" />
      </header>
      <div class="first-block">
        <div class="first-block__main">
          <p class="first-block__main-text">
            Оптовые поставки минеральной воды и безалкогольных напитков
          </p>
        </div>
        <div class="first-block__slider">
          <div class="myslide">
            <img class="desctop" src="<?php bloginfo('template_directory') ?>/img/tarxun.png" alt="" />
            <img class="mobile" src="<?php bloginfo('template_directory') ?>/img/tarhun_mobile.png" alt="" />
          </div>
          <div class="myslide">
            <img class="desctop" src="<?php bloginfo('template_directory') ?>/img/water.png" alt="" />
            <img class="mobile" src="<?php bloginfo('template_directory') ?>/img/water_mobile.png" alt="" />
          </div>
          <div class="myslide">
            <img class="desctop" src="<?php bloginfo('template_directory') ?>/img/vishnya.png" alt="" />
            <img class="mobile" src="<?php bloginfo('template_directory') ?>/img/vishnya_mobile.png" alt="" />
          </div>
          <div class="myslide">
            <img class="desctop" src="<?php bloginfo('template_directory') ?>/img/kvas.png" alt="" />
            <img class="mobile" src="<?php bloginfo('template_directory') ?>/img/kvas_mobile.png" alt="" />
          </div>
          <div class="first-block__slider-eclipse">
            <div class="slider-image"></div>
            <div class="slider-image"></div>
            <div class="slider-image"></div>
            <div class="slider-image"></div>
          </div>
          <div class="slider-running-line"></div>
        </div>
        <img class="slider-back-image grass1" src="<?php bloginfo('template_directory') ?>/img/grass1.png" alt="" />
        <img class="slider-back-image grass2" src="<?php bloginfo('template_directory') ?>/img/grass2.png" alt="" />
        <img class="slider-back-image grass3" src="<?php bloginfo('template_directory') ?>/img/grass3.png" alt="" />
        <img
          class="slider-back-image grass1-mobile"
          src="<?php bloginfo('template_directory') ?>/img/grass1_mobile.png"
          alt=""
        />
        <img
          class="slider-back-image grass2-mobile"
          src="<?php bloginfo('template_directory') ?>/img/grass2_mobile.png"
          alt=""
        />
        <img
          class="slider-back-image grass3-mobile"
          src="<?php bloginfo('template_directory') ?>/img/grass3_mobile.png"
          alt=""
        />
      </div>
    </div>
    <div class="block2">
      <div class="of-us">
        <p class="of-us_text">Немного о нас</p>

        <div class="of-us_slider-item">
          <div class="slider-line"></div>
          <div class="of-us_arrow">
            <img class="of-us_arrow_prew" src="<?php bloginfo('template_directory') ?>/img/prev.png" alt="" />
            <img class="of-us_arrow_next" src="<?php bloginfo('template_directory') ?>/img/next.png" alt="" />
          </div>
        </div>
      </div>
      <div class="second-slider">
        <p class="desc">
          ООО "Эльбрусская прохлада"- отптовые продажи безалкогольных напитков
          от производителя.Широкий ассортимент лимонадов,минеральной воды,разных
          сементов.Артезианская питьевая вода,добывается из скважины глубиной
          230 м. Автоматизированная система розлива исключает любые загрязнения
          в процессе производства, а отсутствие поблизости крупных предприятий и
          сельхозугодий гарантирует чистоту добываемой воды.
        </p>
        <div class="slider-overflow">
          <div class="slider-item-prev-next">
            <div class="slider-item">
              <img src="<?php bloginfo('template_directory') ?>/img/percent.png" alt="" />
              <p class="slider-item_text">
                Индивидуальные скидки в зависимости от объема покупки
              </p>
            </div>
            <div class="slider-item">
              <img src="<?php bloginfo('template_directory') ?>/img/percent.png" alt="" />
              <p class="slider-item_text">
                Индивидуальные скидки в зависимости от объема покупки
              </p>
            </div>
            <div class="slider-item">
              <img src="<?php bloginfo('template_directory') ?>/img/percent.png" alt="" />
              <p class="slider-item_text">
                Индивидуальные скидки в зависимости от объема покупки
              </p>
            </div>
            <div class="slider-item">
              <img src="<?php bloginfo('template_directory') ?>/img/percent.png" alt="" />
              <p class="slider-item_text">
                Индивидуальные скидки в зависимости от объема покупки
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="left-image">
        <img class="mobile-img" src="<?php bloginfo('template_directory') ?>/img/left_block.png" alt="" />
        <form action="">
          <input placeholder="Имя" type="text" />
          <input placeholder="E-mail" type="text" />
          <button class="nav-bar button submit">Отправить</button>
        </form>
      </div>
    </div>
  </body>
  <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</html>
