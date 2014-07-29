<?php
	defined('CONSTANT5A') or die(); 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
  <![endif]-->
  <!--[if IE 7]>
  <html class="no-js lt-ie9 lt-ie8">
    <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9">
      <![endif]-->
      <!--[if gt IE 8]>
      <!-->

      <html class="no-js">
        <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Сделать заказ | Автомат5+</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/1.css">

        <!-- Дата -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <!-- /Дата -->

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src="datepicker-fr.js"></script>

</head>

<body  class="bs-docs-home">

        <!-- Modal  Login-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content panel panel-primary">
              <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title panel-title" id="myModalLabel">Вход / Регистрация</h3>
              </div>
              <div class="modal-body">
                <form role="form">
                  <div class="form-group has-success has-feedback">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
                  <div class="form-group has-error has-feedback">
                    <label for="exampleInputPassword1">Пароль</label>

                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>

                    <p class="bg-danger padding10">Введен не верный пароль</p>
                  </div>
                  <div class="form-group">

                    <a href="">Забыли пароль? Восстановить.</a>
                  </div>

                  <div class="modal-footer">
                    <div class="btn-group btn-group-justified">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default">Зарегистрироваться</button>
                      </div>
                      <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Войти</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal  geo-->
        <div class="modal fade" id="geo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content panel panel-primary">
              <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title panel-title" id="myModalLabel">Выберите город</h3>
              </div>
              <div class="modal-body lead">
                <a href="" class="choice" data-geo="Moskva">Москва</a>
                <br />
                <a href="" class="choice" data-geo="Piter">Санкт-петербург</a>
                <br />
                <a href="" class="choice" data-geo="Novosib">Новосибирск</a>
                <br />
              </div>

              <div class="modal-footer">
                <div class="text-left">
                  Если вашего города нет в списке, вы можете  связаться с нами
                  <a href="/контакты.html" target="_blank">удобным для вас способом</a>
                  .
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="sr-only" href="#content">Перейти к основному содержанию</a>

        <!-- header -->
        <header id="top" class="navbar navbar-static-top bs-docs-nav" role="banner">
          <div class="container">

            <!-- Кнопка сворачивания -->
            <div class="navbar-header">
              <button class="navbar-toggle" data-target=".bs-navbar-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="menu" >Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>

              <a class="navbar-brand hidden-xs" href="/">5+ автомат</a>
              <a class="navbar-brand visible-xs" href="/">А+5</a>

              <!-- Телефон navbar-brand-xs -->

              <a class="navbar-brand navbar-brand60 pointer city visible-xs navbar-brand-xs p-centr"  data-toggle="modal" data-target="#geo">
                <span class="geoI">
                  (383) 380-22-00
                  <br />
                  <span class="dotted font60 " >Новосибирск</span>
                </span>
              </a>

            </div>

            <div class="row">
              <nav class="collapse navbar-collapse bs-navbar-collapse" id='q1'  role="navigation">
                <!-- меню -->
                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="/oplata.html">ОПЛАТА</a>
                    </li>
                    <li>
                      <a class="hidden-sm" href="/гарантии.html">ГАРАНТИИ</a>
                    </li>
                    <li>
                      <a href="/условия-работы.html">УСЛОВИЯ</a>
                    </li>

                    <li>
                      <a href="/услуги.html">УСЛУГИ</a>
                    </li>
                    <li>
                      <a href="/контакты.html">КОНТАКТЫ</a>
                    </li>

                  </ul>
                </div>
                <!-- Телефон  -->
                <a class="navbar-brand navbar-brand60 pointer city hidden-xs"  data-toggle="modal" data-target="#geo">
                  <span class="geoI">
                    (383) 380-22-00
                    <br />
                    <span class="dotted font60 " >Новосибирск</span>
                  </span>
                </a>
                <div  class="col-lg-offset-1 col-md-2  col-md-offset-1 col-sm-1 col-xs-12 ">
                  <!-- логин  -->
                  <ul class="nav navbar-nav">
                    <li>
                      <a class="pointer" id="login"  data-toggle="modal" data-target="#myModal" >
                        Вход или
                        <br />
                        Регистрация
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
              <!-- /row --> </div>

          </div>
        </header>

        <!-- Слайдер -->
        <div id="content" class="bs-docs-header">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 col-md-8 title-lead">
                <div id="tyt">tyt</div>

                <h1>Сделать заказ</h1>
                <p>Два простых шага</p>
              </div>

              <div class="col-sm-5 col-md-4 title-lead">
                <p class="lead">
                  <!-- Кнопки "Заказать" -->
                  <!-- <a class="btn btn-outline-inverse btn-lg  btn-w170 btn-mgb10" href="/заказать-работу.html">Сделать заказ</a>
                <a class="btn btn-outline-inverse btn-lg pd btn-w170  btn-mgb10" href="/заказать-работу.html">Узнать стоимость</a>
                -->
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Тело страницы -->
      <div class="bs-docs-featurette my-not-padding">
        <div class="container">
          <div class="row">
            <div  class="col-xs-2 "></div>
            <div  class="col-xs-8 ">




             <!-- Работа с файлами -->
                      <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
          <div id="drop">            
            <input type="file" name="upl" multiple />
          </div>

          <ul>
            <!-- The file uploads will be shown here -->
          </ul>

        </form>
        <div id="info-intro"></div>

<!-- JavaScript Includes -->
    
    <script src="file/assets/js/jquery.knob.js"></script>

    <!-- jQuery File Upload Dependencies -->
    <script src="file/assets/js/jquery.ui.widget.js"></script>
    <script src="file/assets/js/jquery.iframe-transport.js"></script>
    <script src="file/assets/js/jquery.fileupload.js"></script>
    
    <!-- Our main JS file -->
    <script src="file/assets/js/script.js"></script>

 <!-- /Работа с файлами -->




              <!-- Инструкция по оплате -->

              <form action="POST" class="form-horizontal" role="form" oninput="log(event)" >
                <!-- Шаг 1 Информация о заказе-->
                <div class="step1">
                  <h2 class="bs-docs-featurette-title">Шаг 1. Информация о заказе</h2>
                  <br />
                  <div class="form-group">
                    <label for="check1" class="col-sm-2 control-label">Тип</label>
                    <div class="col-sm-10">

                      <select id="check1" class="form-control" style="" size="1" name="check1" >
                        <option selected="" value="">выберите тип работы</option>
                        <option value="диплом">диплом</option>
                        <option value="главы к диплому">главы к диплому</option>
                        <option value="курсовая">курсовая</option>
                        <option value="реферат">реферат</option>
                        <option value="контрольная работа">контрольная работа</option>
                        <option value="самостоятельная работа">самостоятельная работа</option>
                        <option value="бизнес-план ">бизнес-план</option>
                        <option value="билеты к экзаменам (вопросы)">билеты к экзаменам (вопросы)</option>
                        <option value="диссертация">диссертация</option>
                        <option value="доклад">доклад</option>
                        <option value="задачи">задачи</option>
                        <option value="исследование, аналитическая работа">исследование, аналитическая работа</option>
                        <option value="лабораторная работа">лабораторная работа</option>
                        <option value="отчет по практике (дневник)">отчет по практике (дневник)</option>
                        <option value="перевод">перевод</option>
                        <option value="презентация">презентация</option>
                        <option value="рецензия">рецензия</option>
                        <option value="сочинение">сочинение</option>
                        <option value="статья ">статья</option>
                        <option value="тесты">тесты</option>
                        <option value="чертеж">чертеж</option>
                        <option value="шпаргалки">шпаргалки</option>
                        <option value="эссе">эссе</option>
                        <option value="творческая работа">творческая работа</option>
                        <option value="РГЗ">РГЗ</option>
                        <option value="рерайтинг ">рерайтинг</option>
                        <option value="другое">другое</option>
                      </select>
                    </div>
                    <p class="form-mess bg-danger padding10">Вы не указали тип работы</p>
                    
                  </div>
                  <p id='check1-info' class="help-block">Если затрудняетесь с определениме типа, выберите пункт "другое" и укажите свой вариант</p>

                  <div id="vis2">
                    
                  

                  <div id = "form-other" class="form-group">
                    <label for="other" class="col-sm-2 control-label">Другое</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="other" placeholder="Напишите тип работы" name="other" ></div>
                    <br />
                  </div>

                  <div class="form-group">
                    <label for="name_topic" class="col-sm-2 control-label">Тема</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" 
              id="name_topic" name="name_topic"></div>
                    <p class="form-mess bg-danger padding10">Укажите тему работы</p>
                  </div>

                  <div class="form-group">
                    <label for="item_name" class="col-sm-2 control-label">Предмет</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" 
              id="item_name" name="item_name" placeholder="Например ЭКОНОМИКА"></div>
                    <p id="item_name-mass" class="form-mess bg-danger padding10">Укажите название предмета</p>
                    
                  </div>
                  <p id='item_name-info' class="help-block">Рекомендация: Название предмета записать без сокращений</p>


                  <div id="vis3"> <!--  /#vis3 -->

                  

                  <div class="form-group">
                    <label for="datepicker" class="col-sm-2 control-label">Срок</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  id="datepicker" name="datepicker"></div>
                    <p class="form-mess bg-danger padding10">Укажите срок сдачи</p>
                   
                  </div>
                   <p class="help-block col-sm-offset-2">
                      ВАЖНО: Обратите внимание. Работа будет отправлена в течение указанного дня. Если срок известен более точный, его нужно написать в требованиях к работе (ниже). Укажите когда хотите получить готовую работу.
                    </p>

                  <div class="form-group">
                    <label for="name_sources" class="col-sm-2 control-label">Объем</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" 
              id="name_sources" name="name_sources" placeholder="Пример: 25 страниц- записка и 8 листов А1 чертежей" ></div>
                    <p class="form-mess bg-danger padding10">Укажите объем</p>
                  </div>

                  <div class="form-group">
                    <label for="name_requirement" class="col-sm-2 control-label">Требования</label>
                    <div class="col-sm-10">
                      <textarea id="name_requirement" name="name_requirement" class="form-control"  rows="0" ></textarea>
                      <p class="help-block">
                        Рекомендация: описать наиболее подробно задание и время отправки Вам готовой работы
                      </p>
                    </div>
                  </div>
                  <div id="file-group">

                  <div class="form-group">
                    <label for="exampleInputFile0" class="col-sm-2" >Фаил</label>
                    <div class="col-sm-6">
                      <input type="file" id="exampleInputFile0" name="exampleInputFile[0]" class="exampleInputFile btn btn-default"></div>
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-success file-add"> <strong>+</strong>
                        Добавить ещё
                      </button>
                    </div>
                  </div>

     

                  </div>
                  </div> <!-- /#vis3 -->

                  </div> <!-- /#vis2 -->






                  <!-- Конопка дальше к шагу 2 -->
                  <div class="btn-group">
                    <button type="button" id="page1" class="btn btn-primary">Дальше</button>
                  </div>

                </div>
                <!-- Шаг 2 -->
                <div class="step2">
                  <h2 class="bs-docs-featurette-title">Шаг 2. Контактная информация</h2>
                  <div class="lead">Ваши контакты:</div>
                  <div class="form-group">
                    <label for="name_name" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" 
              id="name_name" name="name_name" ></div>
                    <p class="form-mess bg-danger padding10">Укажите Ваше имя</p>
                  </div>
                  <div class="form-group">
                    <label for="name_phone" class="col-sm-2 control-label">Телефон</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" 
              id="name_phone" name="name_phone"  placeholder="Пример:+7-913-123-12-12"></div>
                    <p class="form-mess bg-danger padding10">Укажите Ваш телефон</p>
                  </div>
                  <div class="form-group">
                    <label for="name_mail" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="text" name="name_mail"  class="form-control" 
              id="name_mail"></div>
                    <p class="form-mess bg-danger padding10">Укажите Вашу почту</p>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <label for="name_vk" class="control-label">
                        Ссылка на Вашу страницу ВКонтакте для связи (не обязательно):
                      </label>
                      <input type="text" class="form-control" 
              id="name_vk" name="name_vk" placeholder="Пример: http://vk.com/diplom55555  или diplom55555"></div>
                  </div>
                  <hr />

                  <div class="col-sm-offset-2  col-sm-10">
                    <div class="lead margin-bottom-not">Уточняющие (не обяательно)</div>
                    <div class="form-group">

                      <label for="name_institution" class="control-label">Название учебного заведения</label>

                      <input type="text" class="form-control" 
              id="name_institution" name="name_institution" placeholder="Например НГУЭУ"></div>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name_volume" class="col-sm-4 control-label">Антиплагиат</label>
                          <div class="col-sm-8">
                            <input type="text" name="name_volume" class="form-control" 
              id="name_volume" ></div>
                        </div>
                      </div>
                      <div class="col-sm-6">

                        <div class="form-group">
                          <label for="name_institution" class="col-sm-4 control-label">Курс</label>
                          <div class="col-sm-8">
                            <input type="text" name="name_institution" class="form-control" 
              id="name_institution"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-group">
                    <button type="button" id="page2-repet" class="btn btn-default">Назад</button>
                    <button type="button" id="page3" class="btn btn-primary">Отправить</button>
                  </div>
                </div>
              </form>
            </div>
            <div  class="col-xs-2 "></div>
          </div>
        </div>
        <br />
      </div>

      <footer class="bs-docs-footer" role="contentinfo">
        <div class="container">

          <p>
            <a href="http://bootstrap-3.ru/">Предложения</a>
            по улучшению.
          </p>
          <ul class="bs-docs-footer-links muted">
            <li>Теукущая версия v4.1.1</li>
            <li>·</li>

            <li>
              <a target="_blank" href="/bootstraptheme.php">Инофрмация студентам</a>
            </li>
            <li>·</li>
            <li>
              <a href="/about.php">О проекте</a>
            </li>
            <li>·</li>
            <li>
              <a target="_blank" href="http://blog.getbootstrap.com/">Официальная группа</a>
            </li>
            <li>·</li>
            <li>
              <a target="_blank" href="https://github.com/twbs/bootstrap/issues?state=open">Вопросы</a>
            </li>
            <li>·</li>
            <li>
              <a target="_blank" href="https://github.com/twbs/bootstrap/releases">Партнерам</a>
            </li>
            <li>·</li>
            <li>
              <a target="_blank" href="https://github.com/twbs/bootstrap/releases">Авторам</a>
              (отправить резюме)
            </li>
          </ul>
          <div class="text-center">
            Спроектирован и построен с любовью компанией
            <a target="_blank" href="http://сайтсайтов.рф/">СайтСайтов</a>
            .
          </div>
        </div>
      </footer>
      <script src="js/vendor/bootstrap.js"></script>

      <script src="js/plugins.js"></script>

      <script src="js/main_order.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

      <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>

      <script type="text/javascript">
    ymaps.ready(init);
    function init () {
        var myMap = new ymaps.Map("map", {
                center: [ 55.033478 , 82.923247],
                zoom: 15,
            // Включим поведения по умолчанию (default)
            // и добавим масштабирование колесом мыши.
            behaviors:['default', 'scrollZoom']
            }),  

        // Метка, содержимое балуна которой загружается с помощью AJAX. Новосибирск
            placemark2 = new ymaps.Placemark([55.033897 , 82.930196], {
                iconContent: "Автомат5+",            
            }, {
                preset: "twirl#blueStretchyIcon",
                
            });  

        myMap.geoObjects.add(placemark2); 

        //Управление
        // В метод add можно передать строковый идентификатор
        // элемента управления и его параметры.
        myMap.controls
            // Кнопка изменения масштаба.
            .add('zoomControl', { left: 5, top: 5 })

        myMap.controls
            .add(trafficControl)
            // В конструкторе элемента управления можно задавать расширенные
            // параметры, например, тип карты в обзорной карте.
            .add(new ymaps.control.MiniMap({
                type: 'yandex#publicMap'
            }));
    }
    </script>

</body>
    </html>