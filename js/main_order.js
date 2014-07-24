

// Календарь
 $(function() {
$( "#datepicker" ).datepicker({
showOtherMonths: true,
selectOtherMonths: true,
showButtonPanel: true,
 changeMonth: true,
changeYear: true,
dateFormat: 'dd.mm.yy'
});
});
//Формат календаря
$.datepicker.regional['ru'] = {
  closeText: 'Закрыть',
  prevText: '<Пред',
  nextText: 'След>',
  currentText: 'Сегодня',
  monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
  'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
  monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
  'Июл','Авг','Сен','Окт','Ноя','Дек'],
  dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
  dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
  dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
  weekHeader: 'Не',
  dateFormat: 'dd.mm.yy',
  firstDay: 1,
  isRTL: false,
  showMonthAfterYear: false,
  yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);

function checkId (nId,nexP) {  
  if (nId.val() == "") {  
    nId.parents(".form-group").addClass("has-error")
    .children('.form-mess').show("slow");
    return 0;   
    }  
    return nexP;
  }

function cleanId (nId) {  
     nId.change(function() {
      nId.parents(".form-group").removeClass("has-error")
        .children('.form-mess').hide("slow");
    });
  }  

function log(event) {
  if (  ($( "#name_topic" ).val() !='') && ($( "#item_name" ).val()!='' )) {    
  $("#vis3" ).show("slow");
  $("#item_name-info" ).hide("slow");

  }
  
}



//Первый шаг: установка слушателя изменений
cleanId($("#check1"))
cleanId($("#name_topic"))
cleanId($("#item_name"))
cleanId($("#datepicker"))
cleanId($("#name_sources"))



//При выборе пункта  "Диплом" 
$("#check1" ).change(function() {
  $("#check1-info" ).hide("slow");
  $("#vis2" ).show("slow");
     
  i = $( "#check1" ).val();
  //Замена "предмета" на "кафедру"
  if (i=='диплом' || i=='главы к диплому') {
      n = 1;
      $("label[for=item_name]" ) .html('Кафедра');
      $("#item_name-info" ) .html('Напишите название кафедры, по которой выпускаетесь.<br /> Рекомендация: Название кафедры записать без сокращений');
      $("#item_name-mass" ) .html('Укажите название кафедры');

    }
    else {
       $("label[for=item_name]" ) .html('Предмет'); 
       $("#item_name-info" ) .html('Рекомендация: Название предмета записать без сокращений'); 
       $("#item_name-mass" ) .html('Укажите название предмета');  
    }

  if (i=='другое') {
      n = 1;
      $("#form-other" ) .show("slow");}
  else if (i=='') {
      $("#vis2" ).hide("slow");
      $( "#form-other" ) .hide("slow");
            n = 0;}
    else {
      if (n == 1){
            $( "#form-other" ) .hide("slow");
            n = 0;
          }
      }  
});

$("#name_topic" ).change(function() {
  if (  ($( "#name_topic" ).val() !='') && ($( "#item_name" ).val()!='' )) {
  $("#vis3" ).show("slow");
  }
});

$("#item_name" ).change(function() {
  if (  ($( "#name_topic" ).val() !='') && ($( "#item_name" ).val()!='' )) {
  $("#vis3" ).show("slow");
  }
});


//Клик по кнопки "дальше" Шаг1
$("#page1") .click(function() {
  var nexPage = 1;
  if ($("#check1").val() == ""){
      nexPage = checkId($("#check1"),nexPage)} 
  else if 
    (($( "#name_topic" ).val() =='') || ($( "#item_name" ).val()=='' )) 
  {   
      if ($( "#name_topic" ).val() =="")  {
    nexPage = checkId($("#name_topic"),nexPage)}  

    if ($( "#item_name" ).val()=="" ){
      nexPage = checkId($("#item_name"),nexPage)}
    }
   else {    
      if ($( "#datepicker" ).val() =="")  {
    nexPage = checkId($("#datepicker"),nexPage)
    }  
    if ($( "#name_sources" ).val() =="")  {
    nexPage = checkId($("#name_sources"),nexPage)
    }  
   }    
   //Показать вторую страницу
     if (nexPage ==1) {
      $(".step1").fadeOut( 300, 0 );
      $(".step2").delay(400).fadeTo( 300, 1 );    
   }
});

//Кнопка обратно Шаг2
$("#page2-repet") .click(function() {   
    $(".step2").hide();
    $(".step1").show(); 
});


//Второй шаг
cleanId($("#name_name"))
cleanId($("#name_phone"))
cleanId($("#name_mail"))

$("#page3") .click(function() {  
  var nexPage = 1;
  nexPage = checkId($("#name_name"),nexPage)
  nexPage = checkId($("#name_phone"),nexPage)
  nexPage = checkId($("#name_mail"),nexPage)   
   if (nexPage ==1) {
    alert('ok')    
   }
});


var numF =1, chNum = 0;

//Фаил + Добавить еще
$( document ).on( "click", ".file-add", function() {
         var cod = "<div class='form-group'> <label for='exampleInputFile"+numF+"' class='col-sm-2' >Фаил</label><div class='col-sm-6'><input type='file' id='exampleInputFile"+numF+"' name='exampleInputFile["+numF+"]'class='exampleInputFile btn btn-default'></div><div class='col-sm-4'> <button type='button' class='btn btn-success file-add'> <strong>+</strong> Добавить ещё</button> </div></div>"
    
    if (numF < 20) {      
       $("#file-group").append(cod);
       numF ++;}
    if ((numF == 20) && (chNum ==0)) { 
    $('#file-group').append( "<p class='help-block'>Максимальное количество файлов равно 20. <br /> Попробуйте заархивировать файлы</p>" );
    chNum =1;
       }

    });

$(document).on("change", "input .exampleInputFile", function(event){
  var file = event.target.files[0];  
  if (file.size > 1){
    alert('rrrr')
  }
  
});









