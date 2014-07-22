
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

$("#page1") .click(function() {
  var v = $( "#check1" ).val();
  if (v == null) {
    alert ('ddddd')
  }
  else {alert (v)
  }

});


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







