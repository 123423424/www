<?php
	defined('CONSTANT5A') or die();  
?>
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
            Спроектирован с любовью 
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