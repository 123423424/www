var numberFile=0;
var chFile = 0;

// использование Math.round() даст неравномерное распределение!
function getRandomInt()
{
  return Math.floor(Math.random() * (999999 - 100000 + 1)) + 100000;
}

$(function(){

    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({


        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
            numberFile++;

           
           if(numberFile > 20){
                
                if (chFile==0) {
                                $('#info-intro').append("<div id='info-file'>Максимальное количество файлов равно 20. <br /> Попробуйте заархивировать файлы</div>");
                                chFile = 1;
                            }
                return; }

            


            //alert(data.files[0].name)    ;
                    // Выводим сообщение о допустимых типах файлов
            if(data.files[0]['type'] == 'application/octet-stream' || data.files[0]['type'] == ''){ 
                $('#info-intro').append("<div id='info-file'>Нельзя загружать файлы с этим расширением. Воспользуйтесь архиватором RAR: <a href='http://www.win-rar.ru/download/winrar/' target='_blanc' >Скачать</a></div>");
                return; }

 // Выводим сообщение о допустимых объема файла
            if(data.files[0].size > 19000000){ 
                $('#info-intro').append("<div id='info-file'>Нельзя загружать файлы больше 19MB. Воспользуйтесь сервисами: <a href='https://disk.yandex.ru' target='_blanc' >Яндекс.Диск </a> или  <a href='http://files.mail.ru/' target='_blanc' >Файлы Mail.Ru  </a>. И напишите ссылку в требованиях к проекту. Спасибо.</div>");
                return; }

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span><div class="proc">Процес</div></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + (data.files[0].size) + '<strong></strong></i><br />');
           
                         
            var z = tpl.find('p');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();           
            
            },

        progress: function(e, data){
            var n; 

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();
           data.context.find('.proc').html(progress+'%').change(); 
            data.context.find('input').html(data.loaded)
           

            if(progress == 100){
                var nfile = getRandomInt();
           // var allname = nfile+'-'+ data.files[0].name;
           // alert (allname);

               // data.context.removeClass('working');
                $.ajax({
                	type: "POST",
                	url: "file/name.php",
                    headers: {'cookie': document.cookie},	
                    data: { name: data.files[0].name , new2name: nfile }
                	})
                	.done(function( msg ) {
                	                   			 
                			$('#fn').html(msg); //В                                      
                            data.context.append('<strong class ="syper">'+msg+'</strong>');    			
                	});
                 
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });



    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});