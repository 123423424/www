<?php
	defined('CONSTANT5A') or die();    
    include "head_part.php"; // это подключит страницу хедер
?>

<main id="content" class="bs-docs-masthead p-top10" role="main">
          <div class="container"> 
          
<div class="row">
	<div class="col-sm-7 col-md-8 title-lead">
		<h1>Мои проекты</h1>
	</div>
	<div class="col-sm-5 col-md-4 title-lead p-top20 h90">
	<p class="lead">
<a class="btn btn-outline-inverse btn-lg btn-success" href="/заказать-работу.html"><strong>+</strong> Новый проект</a>
</p>
	</div>
</div>
</div>

        </main> 

        <div class="bs-docs-featurette">
        <div class="container">
          <table id = 'orders' class="table table-striped text-left">
<thead>
<tr>
<th>Название</th>
<th>Срок до</th>
<th>Статус</th>
<th>Переписка</th>
</tr>
</thead>
<tbody>

<tr data-nomer = "1311123" >
<td>131112 <br />
Уголовщина и все что с ней связанно. Уголовное право. Контрольная работа.
</td>
<td>30.08.2014</td>
<td>Оплата</td>
<td><span class="glyphicon glyphicon-envelope f-size30 collor-mess"></span></td>
</tr>

<tr>
<td>131112 <br />
Уголовщина и все что с ней связанно. Уголовное право. Контрольная работа.
</td>
<td>30.08.2014</td>
<td>Оплата</td>
<td><span class="glyphicon glyphicon-envelope f-size30 collor-mess"></span></td>
</tr>

<tr>
<td>131112 <br />
Уголовщина и все что с ней связанно. Уголовное право. Контрольная работа.
</td>
<td>30.08.2014</td>
<td>Оплата</td>
<td><span class="glyphicon glyphicon-envelope f-size30 "></span></td>
</tr>

<tr>
<td>131112 <br />
Уголовщина и все что с ней связанно. Уголовное право. Контрольная работа.
</td>
<td>30.08.2014</td>
<td>Оплата</td>
<td><span class="glyphicon glyphicon-envelope f-size30"></span></td>
</tr>

</tbody>
</table>
        </div></div>

<script src="//<?=$_SERVER['SERVER_NAME']?>/js/client.js"></script>

<?php    
    include "foot_part.php"; // это подключит футерк
?>