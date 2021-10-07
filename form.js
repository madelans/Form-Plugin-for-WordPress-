

$(document).on('ready', function(){
    var form_count= 1, previous_form, next_form, total_forms;
    total_forms= $('fieldset').length;

    $('.next_form').on('click', function(){
        var click = $(this);
        console.log(click, "cliiickkkk");
        previous_form=$(this).parent();
        next_form=$(this).parent().next();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(++form_count);
    });
    $('.previous-form').on('click', function(){
        previous_form= $(this).parent();
        next_form= $(this).parent().prev();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(--form_count);
    });
    setProgressBarValue(form_count);
    function setProgressBarValue(value) {
        var percent= parseFloat(100/ total_forms) * value;
        percent= percent.toFixed();
        $('.progress-bar') .css('width', percent+'%') .html(percent+'%');
    }

   //MANEJAR EL ENVIO Y VALIDACION FORMULARIO 

    $('#car_form').on('submit', function(event){
        var error_message='';
        if(!$('#nombre').val()){
            error_message+='<br>Por favor, ingrese su nombre';
        }
        if(!$('#telefono').val()){
            error_message+='<br>Por favor, ingrese un número de telefono';
        }
        if(!$('#email').val()){
            error_message+='<br>Por favor, ingrese un email';
        }
        if(!$('#ubicacion').val()){
            error_message+='<br>Por favor, ingrese una ubicación';
        }
        if(error_message){
            $('.alert-success').removeClass('hide').html(error_message);
            return false;
        } else {
        return true;
        }
    });
  });

