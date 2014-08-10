
<?php
  defined('CONSTANT5A') or die();  $_SERVER['SERVER_NAME']
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
        <title> <?=$nomer_order?>  Мои проекты | Автомат5+</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/bootstrap.css">
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/bootstrap-theme.css">
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/main.css">
        <!-- Стиль для клиента -->
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/client.css">
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/1.css"> 
        <link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/css/client_ch.css">
        <!-- Дата -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/cupertino/jquery-ui.css">
        <!-- Дата 
        <script src="//<?=$_SERVER['SERVER_NAME']?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>  -->
        <script src="http://yandex.st/jquery/2.1.1/jquery.min.js"></script> 
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>       
       


  

<!-- Подключение скриптов и стилей в head -->
</head>
<!-- Ниже BODY -->
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
        
<header id="top" class="navbar navbar-static-top navbar-inverse  bs-docs-nav" role="banner">
       
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

              <a class="navbar-brand hidden-xs" href="/client">5+ автомат</a>
              <a class="navbar-brand visible-xs" href="/client">А+5</a>

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
                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="/client">Проекты    &nbsp; <span class="badge pull-right bg-red">4</span></a>
                    </li>
                    <li>
                      <a href="/условия-работы.html">  &nbsp;<span class="badge pull-right bg-blue">?</span></a>
                    </li>

                    <li>
                      <a class="hidden-sm" href="/гарантии.html"> <span class="glyphicon glyphicon-cog"> </span> Настройки</a> 
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

                <div  class=" col-md-2  col-sm-1 col-xs-12 ">
                  <!-- логин  -->
                  <ul class="nav navbar-nav">
                    <li>
                      <a class="pointer" data-toggle="modal" data-target="#myModal" > 
                      <span class="glyphicon glyphicon-user"></span>
                        Максим                       
                      </a> 
                    </li>   
                  </ul>
                </div>
                <div  class="col-md-2   col-sm-1 col-xs-12 ">
                  <!-- логин  -->
                  <ul class="nav navbar-nav">                   
                    <li>   
                    <a class="pointer"   data-toggle="modal" data-target="#myModal" >                 
                        Выход
                      </a> 
                    </li>

                  </ul>
                </div>



              </nav>
              <!-- /row --> </div>

          </div>
        </header>