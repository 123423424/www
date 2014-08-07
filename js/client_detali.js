$(document).ready(function(){ 	

/*
$('#order-panel').click(function(event) {
	$('#detali-order').trigger('click');
	alert('ddd');
});


$('#detali-order').click(function(event) {
	//$('#detali-order').click();
	$('#detali-order').click();
});

// (2)
var d =1;
function sec() { 
	if (d == 1) {
		$('#detali-order').addClass('collapsed'); 
		d = 0;
	} else {
		$('#detali-order').remove('collapsed'); 
		d = 1;
	}
  
}
setInterval(sec, 2000) // использовать функцию

*/

$('#collapseOne').on('show.bs.collapse', function () {
  $('h4.panel-title').html('<div class="dropup"><b class="caret"></b> Свернуть задание</div>');
})

$('#collapseOne').on('hide.bs.collapse', function () {
  $('h4.panel-title').html('<b class="caret"></b> Развернуть задание ');
})


//Добавление горизонтальной черты после диалогов
$('.dial').append('<hr />');


//$(".dialogue").scrollTop(500);

// установим обработчик события scroll, элементу с идентификатором foo
var mz=$(".ajax-exmpl");

$('.dialogue').scroll(function(){
	if ($(".dialogue").scrollTop() == 0){
		mz.clone().prependTo(".dialogue") .show("slow");
		$chScrollPositions =  $('#scroll-id').offset().top;
		$(".dialogue").scrollTo($chScrollPositions);  alert($chScrollPositions);


	}



});



});







 