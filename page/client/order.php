<?php
	defined('CONSTANT5A') or die();    
    include "head_part.php"; // это подключит страницу хедер
?>
 <!-- Полоса прокуртки начало -->
    <!-- styles needed by jScrollPane - include in your own sites -->
    <link type="text/css" href="//<?=$_SERVER['SERVER_NAME']?>/scrollline/style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
    <!-- the mousewheel plugin -->
    <script type="text/javascript" src="//<?=$_SERVER['SERVER_NAME']?>/scrollline/script/jquery.mousewheel.js"></script>
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="//<?=$_SERVER['SERVER_NAME']?>/scrollline/script/jquery.jscrollpane.js"></script>  
<script type="text/javascript">
$(function()
{

	var settings = {
		showArrows: true,
		autoReinitialise: true /*, 
		animateScroll: true*/

	};
	var pane = $('.scroll-pane');
	pane.jScrollPane(settings);
	var contentPane = pane.data('jsp').getContentPane();

	var api = pane.data('jsp');
	api.scrollTo(0, 10); 

	function ddd()
		{
			// Note, there is also scrollToX and scrollToY methods if you only
			// want to scroll in one dimension
			api.scrollTo(0, 1500);
			return false;
		}

	setTimeout(function() {ddd()}, 600); 


 // $('.scroll-pane').jScrollPane();
  
});
</script>
  <!-- / Полоса прокуртки конец -->



     

        <main id="content" class="bs-docs-masthead p-top10" role="main">
          <div class="container">

            <div class="row">
              <div class="col-sm-7 col-md-8 title-lead">
                <h1>Детали проекта</h1>
              </div>
              <div class="col-sm-5 col-md-4 title-lead p-top20 h90">
                <p class="lead">
                  <a class="btn btn-outline-inverse btn-lg btn-success" href="/заказать-работу.html"> <strong>+</strong>
                    Новый проект
                  </a>
                </p>
              </div>
            </div>
          </div>

        </main>






        <div class="bs-docs-featurette">
          <div class="container text-left">
            <div class="row">
              <div  class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                <button type="button" class="btn btn-warning mg-bott
col-xs-12 col-sm-3 col-sm-offset-9 ">
                  <span class="glyphicon glyphicon-pencil "></span>
                  Редактировать
                </button>
                <table class="table table-striped text-left">
                  <tbody>
                    <tr>
                      <td>
                        Номер заказа: <strong>131112</strong>
                        <small> <em>04/08/2014</em>
                        </small>
                      </td>
                      <td>
                        Срок:
                        <strong>11.08.2014</strong>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        Тема:
                        <strong>Уголовное право.</strong>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Предмет:                        
                        <strong>Уголовное право.</strong>
                      </td>
                      <td>
                        Тип:
                        <strong>контрольная работа</strong>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <div class="">
                  <div id='order-panel' class=" btn btn-info" data-toggle="collapse" data-target="#collapseOne" >
                    <h4 class="panel-title"> <b class=" caret"></b>
                      Развернуть задание
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table table-striped text-left">
                        <tbody>
                          <tr>
                            <td>
                              ВУЗ:
                              <strong>НГУЭУ (нархоз)</strong>
                            </td>
                            <td>
                              Курс:
                              <strong></strong>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              Объем:
                              <strong>по заданию</strong>
                            </td>
                            <td>
                              Антиплагиат:
                              <strong>80%</strong>
                            </td>
                          </tr>

                          <tr>
                            <td colspan="2">
                              Требования к работе:
                              <strong>Уголовное право ч.2 . Контрольная. Вариант 5
                                <span>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nisi cum explicabo soluta totam odit tempore qui reprehenderit dignissimos! Deserunt, cupiditate. Dolore eos autem at distinctio, fugiat repellendus cum culpa!
                                </span>
                                <span>
                                  Sunt fuga ex debitis rerum harum ratione, commodi dicta accusamus non quae ullam cupiditate natus quod temporibus maiores, voluptatem enim dolorum veritatis, aliquam consequatur animi a. Ea ratione, voluptatem odio.
                                </span>
                                <span>
                                  Animi voluptatibus aut, eum, laudantium eligendi dignissimos aliquid quis reprehenderit fugit minus quos minima adipisci earum magnam deserunt, soluta maxime totam reiciendis similique voluptas. Placeat quas, ipsam nihil maxime odio.
                                </span>
                                <span>
                                  Aliquid soluta dicta asperiores voluptatum dolorem repudiandae architecto est nobis ut sapiente inventore beatae excepturi placeat, adipisci labore, tenetur dignissimos enim, voluptates! Optio officia, velit earum perferendis, nam fugit veniam!
                                </span></strong> 
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              Файлы:
                              <strong><br />
                                53dfae12470b0--Metodicheskie_ukazania_Ugolovnoe_pravo.pdf
                                <br />
                                53dfae12470b0--Metodicheskie_ukazania_Ugolovnoe_pravo.pdf
                                <br />
                                53dfae12470b0--Metodicheskie_ukazania_Ugolovnoe_pravo.pdf
                                <br />
                                53dfae12470b0--Metodicheskie_ukazania_Ugolovnoe_pravo.pdf
                                <br /></strong> 
                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
                <hr />

                <h2>Чат</h2> <div id="ffff"></div>
                <div class="Chat">
                  <div class="dialogue btn-mgb10">
                  <div class="scroll-pane">
                      <div id="contentcontainer">
                    


                      

                        <div id="add-mess_bl"></div>
                        <div class="ajax-exmpl">
                          <div class="dial dialogue-author">
                            <div class="row">
                              <div class="name-mess col-xs-12">Ксения (автор2)</div>
                              <div class="col-xs-9 col-md-10">
                                <span>Lorem ipsum dolor sit.</span>
                                <span>Ab deleniti accusantium consequuntur!</span>
                                <span>Error, consequuntur aspernatur obcaecati.</span>
                                <span>Inventore neque, repellat odit.</span>
                              </div>
                              <div class="col-xs-3 col-md-2">04.08.14</div>
                            </div>
                          </div>
                        </div>
                        <div  class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">
                              Cкрол тут!!!
                              <a id ='scroll-id' href="#top5" name="top5">dddd</a>
                            </div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>
                          </div>
                        </div>
                        <div class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">Ксения (автор)</div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>

                          </div>
                        </div>
                        <div class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">Ксения (автор5)</div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>
                          </div>
                        </div>
                        <div class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">Ксения (автор5)</div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>
                          </div>
                        </div>
                        <div class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">Ксения (автор5)</div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>
                          </div>
                        </div>
                        <div class="dial dialogue-author">
                          <div class="row">
                            <div class="name-mess col-xs-12">Ксения (автор5)</div>
                            <div class="col-xs-9 col-md-10">
                              <span>Lorem ipsum dolor sit.</span>
                              <span>Ab deleniti accusantium consequuntur!</span>
                              <span>Error, consequuntur aspernatur obcaecati.</span>
                              <span>Inventore neque, repellat odit.</span>
                            </div>
                            <div class="col-xs-3 col-md-2">04.08.14</div>
                          </div>
                        </div>
                        <!-- Indicates a successful or positive action -->
                        <div id='bt-add_mess' class="dial" >
                          <button type="button"  class="btn btn-success col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">+показать еще 10 сообщений</button> <br />
                        </div>
                      
</div>
                      <!-- / contentcontainer --> </div>
                    
                    <!-- / scroll-pane --> </div>
                  <!-- / dialogue -->

                  <div class="message ">
                    <form class="form-horizontal" role="form" method="post" action="upload.php">

                      <div class="form-group">
                        <label class="col-sm-2 col-xs-4 control-label" for="mess-order">Сообщение</label>
                        <div class="col-sm-7 col-xs-8  btn-mgb10">
                          <textarea id="mess-order" class="form-control" placeholder="" rows="0" name="name_requirement"></textarea>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                          <button type="button" class="btn btn-success col-sm-12 col-xs-5 btn-mgb10">+Прикрепить фаил</button>
                          <div type="button" class="col-xs-2 visible-xs"></div>
                          <button type="button" class="btn btn-primary col-sm-12 col-xs-5 ">Отправить</button>
                        </div>
                      </div>
                      <!-- / form-group --> </form>
                  </div>
                  <!-- / message -->

                  

                </div>
                <!-- / Chat --> </div>
            </div>
            <!-- / row --> </div>
          <!-- / container --> </div>
        <!-- / bs-docs-featurette -->









        <script src="//<?=$_SERVER['SERVER_NAME']?>/js/client_detali.js"></script>

<?php    
    include "foot_part.php"; // это подключит футерк
?>