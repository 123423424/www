
//"Открыть" форму регистрации и ввода
$('a#login').click(function (e) {
  e.preventDefault()
  $('#form1').addClass("modal").css('display', 'block');//overflow-y: scroll; .modal-open
  $('body').addClass("modal-open");  
  $('#form-log').show("slow")  
})

//Функция "закрыть" форму регистрации и ввода
function closeLogin (){ 
     $('#form1').removeClass("modal").css('display', 'none')
     $('body').removeClass("modal-open");  
    $('#form-log').hide("slow")
    $('.bs-docs-home ').css('overflow', 'auto') 
    }

//Закрыть форму регистрации и входа
$('#form-log-close').click(closeLogin);

//Закрыть форму регистрации и входа
$('#btn-log-close').click(closeLogin);

// Вращение класса .radi
// var time = 0;
// function func() {
// 	time +=1;
//   $('.radi').css('transform', 'rotate('+time+'deg)');
// }
// setInterval(func, 20);



// function setCookie (name, value, expires, path, domain, secure) {
//       document.cookie = name + "=" + escape(value) +
//         ((expires) ? "; expires=" + expires : "") +
//         ((path) ? "; path=" + path : "") +
//         ((domain) ? "; domain=" + domain : "") +
//         ((secure) ? "; secure" : "");
// }

// //setCookie("ipGeoCookie3", "bar9", "Mon, 01-Jan-2001 00:00:00 GMT", "/");
// setCookie("ipGeoCookieB", "bbb");
// myVar = getCookie("ipGeoCookie");
// $('#coo').html(myVar).css( "color", "red");

function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return(setStr);
}


// Определение города
var myVar , msg2;
myVar = getCookie("ipGeoCookie");
myVar = decodeURIComponent(myVar);
	//Если нет КУКИ
if (myVar != "null"){
	$.ajax({
	type: "POST",
	url: "ip/example.php"
	// ,	data: { name: "Jo2h3n" }
	})
	.done(function( msg ) {
			 msg2 = msg;
			$('.geoI').html(decodeURIComponent(msg));

			//$('#tyt').html('myVar='+ myVar+'/msg3-null = '+msg2).css( "color", "red");
	});
}
	//Если куки установлена
else {
	$('.geoI').html(decodeURIComponent(myVar));	
 } 


//Выбор другого города
$('.choice') .click(function(event) {	
	event.preventDefault();
	  var geo;
   geo = $( this ).data('geo');
$.ajax({
	type: "POST",
	url: "ip/example.php"
	 ,	data: { name: geo }
	})
	.done(function( msg ) {
			 msg2 = msg;
			$('.geoI').html(decodeURIComponent(msg));
			
	});
	$('.close') .click();  
}); 


//Отображение без скачеков
$(document).ready(function(){ 	
	//Плавное отображение страницы
	$('body').animate({opacity: 1},300 );
});