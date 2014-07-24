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


//При выборе пункта  другое 
var i , n;
$("#check1" ).change(function() {
  i = $( "#check1" ).val();
  if (i=='другое') {
      n = 1;
      $("#form-other" ) .show("slow");}
    else {
      if (n == 1){
            $( "#form-other" ) .hide("slow");
            n = 0;

          }
      }
  
});


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


//Первый шаг
cleanId($("#check1"))
cleanId($("#name_topic"))
cleanId($("#item_name"))
cleanId($("#datepicker"))
cleanId($("#name_sources"))

$("#page1") .click(function() {
  var nexPage = 1;
  nexPage = checkId($("#check1"),nexPage)
  nexPage = checkId($("#name_topic"),nexPage)
  nexPage = checkId($("#item_name"),nexPage)
  nexPage = checkId($("#datepicker"),nexPage)
  nexPage = checkId($("#name_sources"),nexPage)
   
   if (nexPage ==1) {
    $(".step1").hide();
    $(".step2").show();
  
   }
});

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


var numF =1;
//Фаил + Добавить еще
$( document ).on( "click", ".file-add", function() {
         var cod = "<div class='form-group'> <label for='exampleInputFile' class='col-sm-2' >Фаил</label><div class='col-sm-6'><input type='file' id='exampleInputFile' name='exampleInputFile["+numF+"]'class='exampleInputFile btn btn-default'></div><div class='col-sm-4'> <button type='button' class='btn btn-success file-add'> <strong>+</strong> Добавить ещё</button> </div></div>"
           
   $("#file-group").append(cod);
   numF ++;
    });









