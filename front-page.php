<!doctype html>
<html class="no-js" lang="en">
  <head>
      <title>Международный конкурс чтецов «Живая классика»</title>
    <?php if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ELATED_ASSETS_ROOT ?>/css/app.css?v=11">
  </head>
  <body>

    <!-- <script data-since='22.11.2018' data-scale='0.1' src='//eterfund.ru/js/autoblur/autoblur.js'></script> -->
    <div class="top_menu">
      <a href="#" class="selected">Конкурс юных чтецов</a>
      <a href="http://school-letopis.ru">Школьная летопись</a>
      <a href="http://культслед.рф">Культурный след</a>
      <a href="http://liveccamp.ru">Творческий лагерь</a>
      <?php
        $code = '[popup_trigger id="5586" tag="a" classes=""]Педагогический форум[/popup_trigger]';
        echo do_shortcode(wp_kses_post($code));
      ?>
    </div>

    <div class="mobile-menu-backdrop"></div>
    <div class="mobile-menu">
      <div class="close" id="menu-close">
        <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/close-button.svg">
      </div>
      <div class="top_menu">
        <a href="#" class="selected">Конкурс юных чтецов</a>
        <a href="http://school-letopis.ru">Школьная летопись</a>
        <a href="http://культслед.рф">Культурный след</a>
        <a href="http://liveccamp.ru">Творческий лагерь</a>
        <?php
          $code = '[popup_trigger id="5586" tag="a" classes=""]Педагогический форум[/popup_trigger]';
          echo do_shortcode(wp_kses_post($code));
        ?>
      </div>
      <div class="links">
        <a href="https://www.youtube.com/playlist?list=PLf7KJ2k0kNfCOHg0rdbU2cvDG1G64jKu7">Лекторий «Просвещение»</a>
        <a href="/ratings">Рейтинги</a>
      </div>
      <div class="buttons">
        <button class="white" type="button" name="button" class="singin" onclick="window.location.href='/lk'">
          <span class="button-icon icon-user-icon"></span>
          Вход
        </button>
        <button class="blue" type="button" name="button" class="registr" onclick="window.location.href='/registration/'">Регистрация</button>
      </div>
      <div class="social">
        <a href="https://vk.com/young_readers" target="blank">
          <span class="icon-vk-icon"></span>
        </a>
        <a href="https://www.facebook.com/youngreaders.ru/" target="blank">
          <span class="icon-fb-icon"></span>
        </a>
        <a href="https://www.instagram.com/live_classics/" target="blank">
          <span class="icon-insta-icon"></span>
        </a>
        <a href="https://twitter.com/liveclassics">
          <span class="icon-tw-icon"></span>
        </a>
        <a href="https://www.youtube.com/channel/UC4Y9DufmY6uBF9H_P0-qjpg" target="blank">
          <span class="icon-tube-icon"></span>
        </a>
      </div>
    </div>

    <div class="main">
      <div class="header">
        <div class="limiter">
          <a href="/" class="logo-wrapper">
            <img class="logo" src="<?php echo ELATED_ASSETS_ROOT ?>/img/logo.svg" alt="logo">
          </a>
          <button class='menu-open' id='menu-open'>
            <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/menu-icon.svg" alt="Меню" class="menu-icon">
            <span class="button-text">Меню</span>
          </button>
          <div class="content">
  <!-- В разработке
            <a href="#">ЖК 365</a>
  -->
            <a href="https://www.youtube.com/playlist?list=PLf7KJ2k0kNfCOHg0rdbU2cvDG1G64jKu7">Лекторий «Просвещение»</a>
            <a href="/ratings">Рейтинги</a>
            <div class="soc">
              <a href="https://vk.com/young_readers" target="blank">
                <span class="icon-vk-icon"></span>
              </a>
              <a href="https://www.facebook.com/youngreaders.ru/" target="blank">
                <span class="icon-fb-icon"></span>
              </a>
              <a href="https://www.instagram.com/live_classics/" target="blank">
                <span class="icon-insta-icon"></span>
              </a>
              <a href="https://twitter.com/liveclassics">
                <span class="icon-tw-icon"></span>
              </a>
              <a href="https://www.youtube.com/channel/UC4Y9DufmY6uBF9H_P0-qjpg" target="blank">
                <span class="icon-tube-icon"></span>
              </a>
            </div>
            <button class="white small" type="button" name="button" onclick="window.location.href='/lk'">
              <span class="button-icon icon-user-icon"></span>
              Вход
            </button>
            <button class="blue small" type="button" name="button" onclick="window.location.href='/registration/'">Регистрация</button>
          </div>
        </div>
      </div>
      <div class="header-placeholder">

      </div>

      <div class="text">
        <div class="above-the-line">
          <img class="logo" src="<?php echo ELATED_ASSETS_ROOT ?>/img/man-on-book-logo.svg">
          <p class="text-blue">
            Международный конкурс<br>
            юных чтецов
          </p>
        </div>
        <hr>
        <h1>Прими участие в конкурсе</h1>
<!--        <p class="black">прямо сейчас и получи книгу в подарок</p> -->
        <div class="buttons">
          <a href='/registration'>
            <button class="blue">
              Участвовать
            </button>
          </a>
          <a href='#rules'>
            <button class="white">
              <span class="button-icon icon-exclame-icon"></span>
              Правила участия
            </button>
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="block-2">
      <div class="imgs">

      </div>
      <div class="text">
        <p class="star">Онлайн конкурс</p>
        <h2>ЖИВАЯ КЛАССИКА 365</h2>
        <p>В рамках Конкурса участники в возрасте от 10 до 16 лет читают вслух отрывки из своих любимых прозаических произведений. Соревнование проходит только на русском языке. Участие для всех конкурсантов является бесплатным.
    Конкурс проходит в 5 этапов: школьный, районный и региональный туры, а затем финал в международном детском центре «Артек» и суперфинал на Красной площади в Москве.</p>
        <div class="buttons">
          <button class="blue" type="button" name="button" onclick="window.location.href='/registration/'">Участвовать</button>
          <button class="white" type="button" name="button">Подробнее</button>
        </div>
      </div>
    </div> -->

    <div class="block-3">
      <div class="items">
        <div class="">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/camp.png" alt="Лагерь «Артек»">
          <p class="h">Выиграй<br> путёвку</p>
          <p>в международный детский<br> центр «Артек»</p>
        </div>
        <div class="">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/red-square.png" alt="Красная площадь">
          <p class="h">Выступи на<br> <span class="red">Красной площади</span></p>
          <p>в Москве на финальном<br> этапе конкурса</p>
        </div>
        <div class="">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/graduate.png" alt="ГИТИС">
          <p class="h">Поступи<br> в ГИТИС</p>
          <p>Российский университет<br> театрального искусства</p>
        </div>
      </div>
      <div class="buttons">
        <?php
          $code = '[popup_trigger id="5539" tag="button" classes="white"]<span class="button-icon icon-plus-icon"></span>Ещё возможности[/popup_trigger]';
          echo do_shortcode(wp_kses_post($code));
        ?>
      </div>
    </div>

    <div class="video">
      <video poster="<?php echo ELATED_ASSETS_ROOT ?>/img/video-preview.jpg" id="bg_video" webkit-playsinline playsinline muted loop>
        <source src="<?php echo ELATED_ASSETS_ROOT ?>/video/bg_video.mp4" type="video/mp4">
      </video>
      <div class="overlay">
        <?php
          $code = '[popup_trigger id="5544" tag="button" classes="white large bg-fill text-blue video-trigger"]
          <span class="button-icon icon-play-icon"></span>
          Смотреть видео о конкурсе
          [/popup_trigger]';
          echo do_shortcode(wp_kses_post($code));
        ?>
      </div>
    </div>

    <div class="block-4" id="rules">
      <h2>Как принять участие?</h2>
      <div class="items">
        <div class="">
          <p class="number">1</p>
          <p class="h"><a href="/registration" class="link-hover">Зарегистрируйся</a></p>
          <p>Пройди регистрацию в личном кабинете на нашем сайте</p>
        </div>
        <div class="">
          <p class="number">2</p>
          <p class="h">Выбери отрывок</p>
          <p>Отрывок из любого понравившегося прозаического произведения и выучи</p>
        </div>
        <div class="">
          <p class="number">3...</p>
          <p class="h">Загрузи или жди</p>
          <p>Загрузи своё видео в личный кабинет или жди классного этапа*</p>
        </div>
      </div>
      <div class="buttons">
        <?php
          $code = '[popup_trigger id="5544" tag="button" classes="white"]
          <span class="button-icon icon-play-icon"></span>Как принять участие. Видео
          [/popup_trigger]';
          echo do_shortcode(wp_kses_post($code));
        ?>
        <?php
          $code = '[popup_trigger id="5551" tag="button" classes="white"]
          <span class="button-icon icon-exclame-icon"></span>Положение о конкурсе
          [/popup_trigger]';
          echo do_shortcode(wp_kses_post($code));
        ?>
      </div>
      <div class="dates">
        * классный этап будет проходить с 1 по 15 февраля 2019 года
      </div>
    </div>

    <div class="karta">
      <h2>85 регионов России, 80 стран</h2>
      <div id="region-map" data-lat='35' data-lon='0' data-zoom='2'></div>
    </div>

    <div class="block-5">
      <h2>Жюри конкурса</h2>
      <div class="items">
        <div class="item">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/juri1.png" alt="">
          <div class="info">
            <h4 class="h">Григорий Заславский</h4>
            <p>Театральный критик, ректор ГИТИСа</p>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/juri2.png" alt="">
          <div class="info">
            <h4 class="h">Андрей Соколов</h4>
            <p>Актёр и режиссёр театра и кино, продюсер</p>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/juri3.png" alt="">
          <div class="info">
            <h4 class="h">Елена Захарова</h4>
            <p>Российская актриса театра и кино</p>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo ELATED_ASSETS_ROOT ?>/img/juri4.png" alt="">
          <div class="info">
            <h4 class="h">Андрей Усачёв</h4>
            <p>Детский писатель, поэт и драматург</p>
          </div>
        </div>
      </div>
    </div>

    <div class="images">
        <?php
          $code = '[instagram-feed]';
          echo do_shortcode(wp_kses_post($code));
        ?>
    </div>

    <div class="partners">
      <h2>Партнёры конкурса</h2>
      <h3>Генеральные партнёры:</h3>
      <div class="items">
        <div class="item">
          <a href="https://www.prosv.ru/" target="blank">
            <img class="prosveschenie" src="<?php echo ELATED_ASSETS_ROOT ?>/img/prosveschenie.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="https://www.nornickel.ru/" target="blank">
            <img class="nornikel" src="<?php echo ELATED_ASSETS_ROOT ?>/img/nornikel.png" alt="">
          </a>
        </div>
      </div>

      <h3>Партнёры:</h3>
      <div class="items">
        <div class="item">
          <a href="https://artek.org/" target="blank">
            <img class="artek" src="<?php echo ELATED_ASSETS_ROOT ?>/img/logo1.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="https://www.gitis.net/" target="blank">
            <img class="gitis" src="<?php echo ELATED_ASSETS_ROOT ?>/img/logo2.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="http://cfund.ru/" target="blank">
            <img class="pravoobl" src="<?php echo ELATED_ASSETS_ROOT ?>/img/pravoobl.png" alt="">
          </a>
        </div>
      </div>

      <div class="items spread">
        <div class="item">
          <h3>Под патронатом:</h3>
          <div class="items">
            <div class="item">
              <a href="https://edu.gov.ru/" target="blank">
                <img class="minobr" src="<?php echo ELATED_ASSETS_ROOT ?>/img/minobr.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="item">
          <h3>С использованием Гранта<br>Президента РФ:</h3>
          <div class="items">
            <div class="item">
              <a href="https://президентскиегранты.рф/" target="blank">
                <img class="book24" style="margin: 41px" src="<?php echo ELATED_ASSETS_ROOT ?>/img/pregrant.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

      <h3>Генеральные информационные партнёры:</h3>
      <div class="items wrap">
        <div class="item">
          <a href="https://tvkultura.ru/" target="blank">
            <img class="tvcultura" src="<?php echo ELATED_ASSETS_ROOT ?>/img/tvcultura.jpg" alt="">
          </a>
        </div>
        <div class="item">
          <a href="https://iz.ru/" target="blank">
            <img class="izvestia" src="<?php echo ELATED_ASSETS_ROOT ?>/img/izvestia.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="https://echo.msk.ru/" target="blank">
            <img class="echomsk" src="<?php echo ELATED_ASSETS_ROOT ?>/img/echomsk.jpg" alt="">
          </a>
        </div>
        <div class="item">
          <a href="http://ug.ru/" target="blank">
            <img class="uchgazeta" src="<?php echo ELATED_ASSETS_ROOT ?>/img/uchgazeta.png" alt="">
          </a>
        </div>
        <div class="item">
          <a href="https://ria.ru/sn/" target="blank">
            <img class="socnavigator" src="<?php echo ELATED_ASSETS_ROOT ?>/img/socnavigator.png" alt="">
          </a>
        </div>
      </div>
    </div>

    <div class="bottom-menu">
      <div class="container">
        <div class="menus">
          <div class="menu menu1">
            <p class="h">Живая классика</p>
            <a href="/registration/">Регистрация</a><br>
            <a href="/usloviya/">Правила участия</a><br>
            <a href="/usloviya">Положение о конкурсе</a><br>
<!-- В разработке
            <a href="#">Живая классика 365</a><br>
-->
            <a href="https://www.youtube.com/playlist?list=PLf7KJ2k0kNfCOHg0rdbU2cvDG1G64jKu7">Лекторий «Просвещение»</a><br>
            <a href="/ratings">Рейтинги</a>
          </div>
          <div class="menu menu2">
            <p class="h">Наши проекты</p>
            <a href="#">Конкурс юных чтецов</a><br>
            <a href="http://school-letopis.ru">Школьная летопись</a><br>
            <a href="http://культслед.рф">Культурный след</a><br>
            <a href="http://liveccamp.ru">Творческий лагерь</a><br>
            <a href="/forum-2018">Педагогический форум</a>
          </div>
        </div>
        <p>Фонд Конкурса юных чтецов «Живая классика», 2018</p>
        <button class="blue" type="button" name="button" onclick="window.location.href='/wp-content/uploads/2018/09/Partneram_polnaya.pdf'">Стать партнёром</button>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="">
          <a class="mail link-hover" href="mailto:pochta@youngreaders.ru">pochta@youngreaders.ru</a>
        </div>
        <div class="soc">
          <a href="https://vk.com/young_readers" target="blank">
            <span class="icon-vk-icon"></span>
          </a>
          <a href="https://www.facebook.com/youngreaders.ru/" target="blank">
            <span class="icon-fb-icon"></span>
          </a>
          <a href="https://www.instagram.com/live_classics/" target="blank">
            <span class="icon-insta-icon"></span>
          </a>
          <a href="https://twitter.com/liveclassics">
            <span class="icon-tw-icon"></span>
          </a>
          <a href="https://www.youtube.com/channel/UC4Y9DufmY6uBF9H_P0-qjpg" target="blank">
            <span class="icon-tube-icon"></span>
          </a>
        </div>
      </div>
    </div>

    <script src="<?php echo ELATED_ASSETS_ROOT ?>/js/app.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<!--    <script src="//test.youngreaders.ru/assets/components/youngreaders/pages/dist/region-map.min.js"></script>-->
    <script>
      window.mobilecheck = function() {
        var check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
      };
      document.addEventListener('DOMContentLoaded', function () {
        var header = document.querySelector('.header');
        var menu = document.querySelector('.mobile-menu');
        var menuBackdrop = document.querySelector('.mobile-menu-backdrop');
        var menuOpen = document.querySelector('#menu-open');
        var menuClose = document.querySelector('#menu-close');
        var videoOpenButton = document.querySelector('.video-trigger');
        var video = document.querySelector('#bg_video');
        var videoPlaying = false;

        var headerPos = header.getBoundingClientRect().top + window.pageYOffset;
        function recomputeHeader () {
          header.className = (window.pageYOffset > headerPos) ? 'fixed header' : 'header';
        }

        function updateVideoState () {
          var videoRect = video.getBoundingClientRect();
          var scroll = window.pageYOffset;
          var screenHeight = document.documentElement.clientHeight;
          var y = videoRect.top;
          var shouldPlay = (y >= -videoRect.height) &&
                           (y <= screenHeight);
          if (shouldPlay && !videoPlaying) {
            video.play();
          } else if (!shouldPlay && videoPlaying) {
            video.pause();
          }
          videoPlaying = shouldPlay;
        }

        window.addEventListener('scroll', recomputeHeader, { passive: true });
        recomputeHeader();

        menuOpen.addEventListener('click', function () {
          var rect = menuOpen.getBoundingClientRect();
          var coords = (rect.x + rect.width/2) + 'px ' + (rect.y + rect.height/2) + 'px';
          menu.style.display = 'block';
          menu.style.clipPath = 'circle(0px at ' + coords + ')';
          menuBackdrop.style.display = 'block';
          setTimeout(function () {
            var size = Math.sqrt(Math.pow(window.innerWidth, 2) + Math.pow(window.innerHeight, 2));
            menu.style.clipPath = 'circle(' + size + 'px at ' + coords + ')';
            menuBackdrop.style.opacity = 1;
          }, 0);
        });

        menuClose.addEventListener('click', function () {
          var rect = menuOpen.getBoundingClientRect();
          var coords = (rect.x + rect.width/2) + 'px ' + (rect.y + rect.height/2) + 'px';
          menu.style.clipPath = 'circle(0px at ' + coords + ')';
          menuBackdrop.style.opacity = 0;
          setTimeout(function () {
            menuBackdrop.style.display = 'none';
            menu.style.display = 'none';
          }, 1000);
        });

        if (video) {
          videoOpenButton.addEventListener('click', function () {
            document.querySelector('#bg_video').pause();
          });
          // uncomment to disable mobile videos
          //if (!mobilecheck()) {
            window.addEventListener('scroll', updateVideoState, { passive: true });
            updateVideoState();
          //} else {
          //  video.parentElement.className = 'video fallback';
          //}
        }
      });
    </script>
    <?php if (!isset($_POST["ajaxReq"]) || $_POST["ajaxReq"] != 'yes') wp_footer(); ?>
  </body>
</html>
