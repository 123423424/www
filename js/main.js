
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




// $.ajax({
// type: "POST",
// url: "ip.php",
// data: { name: "John", location: "Boston" }
// })
// .done(function( msg ) {
// 	if (msg == '<div class="red">37.193.135.88</div>')
// 	 $('#gorod').html('да');
// 	else $('#gorod').html(msg);

// });
