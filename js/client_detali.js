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


//$(".jspContainer").scrollTop(500);


// Загрузка 10 диалогов
var uploadDialog=1;
var uploadBatt=1;
$('.scroll-pane').scroll(function(){
	if ($(".scroll-pane").scrollTop() == 0){
		
		//alert('ddd');
		if (uploadBatt !=1){$("#bt-add_mess").prependTo("#add-mess_bl").show("slow"); 	}	
		//alert('ddd2');
		setTimeout(function() {
			uploadBatt++;
			//Показать чат, сделанно плавно, т.к. вначеле с первого диалога нужно переместить в нижний диалог
			$('.Chat').animate({opacity: 1},300 );			
		}, 600); 
	}
});

//Приссоединение диалога
$("#bt-add_mess").click(function() {
		$(".ajax-exmpl").clone().find(".name-mess").html(uploadDialog+' диалог.').end().prependTo("#add-mess_bl").show("slow").removeClass('ajax-exmpl');
		uploadDialog++;
		$("#scroll-id").trigger('click');
	//alert('ddd');

		//window.location = '#top5';	
		
});



}); //Конец (document).ready

/*
window.addEvent('domready', function() {
		new ScrollControl($('contentcontainer'), {'createControls': true});
	});


//Функция плавной перемотки - не работает
$(function(){
   $('a[href^="#"]').click(function(){     		
        var target1 = $(this).attr('id');
        $('html, body').animate({scrollTop: $(target1).offset().top} , 18000);
       alert('sss');
        return false; 
   }); 
});
*/

 