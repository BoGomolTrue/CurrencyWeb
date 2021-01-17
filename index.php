<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
     <!-- Пример логотипа сайта-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
      <!--Название сайта, которое пишется во вкладке-->
    <title>Курс валют</title>
      <!-- -->
</head>
<body>
    <!-- Хедер сайта, при желании можно что-то добавить-->
    <header>
        <nav class="menu">
        </nav>
    </header>
    <!-- -->
     <!-- Контент, который показан на странице. Подгружается из content.php-->
    <div id="page-content">
        <div class="container">
            <div class="content">
                <div class="row" style="align-content: center;" id="cont">
                    <form action="modules/content.php" id="data_one" method="POST">
                    <?php
                        /*Подгрузка контента*/
                        include('modules/content.php');
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- -->
    <!-- Окно ошибки, если неверно введены данные (изначально скрыто)!-->
    <nav class="footer-menu" id="footer-menu">
        <div class="center">
            <span style="font-size: 16px; color: wheat;">Валюта не была выбрана</span>
        </div>
    </nav>
    <!-- -->
    <!-- Анимация, которая показывается при открытии сайта (использована готовая)!-->
    <style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #E67E22 url(http://hello-site.ru//main/images/preloads/grid.svg) center center no-repeat;background-size:41px;}</style>
    <div id="hellopreloader"><div id="hellopreloader_preload"></div></div>
    <script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},500);};</script>
     <!-- -->
</body>
<!-- Футер сайта, при желании можно что-то добавить-->
<footer>
<nav class="footerbody">
        <div class="footer-input">
        </div>
    </nav>
</footer>
<!---->
<script src="js/script.js"></script>
</html>