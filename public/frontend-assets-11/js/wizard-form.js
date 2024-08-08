function scroll_to_class(element_class, removed_height) {
    var scroll_to = $(element_class).offset().top - removed_height;
    if ($(window).scrollTop() != scroll_to) {
        $('.form-wizard').stop().animate({scrollTop: scroll_to}, 0);
    }
}

function bar_progress(progress_line_object, direction) {
    var number_of_steps = progress_line_object.data('number-of-steps');
    var now_value = progress_line_object.data('now-value');
    var new_value = 0;
    if (direction == 'right') {
        new_value = now_value + (100 / number_of_steps);
    } else if (direction == 'left') {
        new_value = now_value - (100 / number_of_steps);
    }
    progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function () {

    /*
        Form
    */
    $('.form-wizard fieldset:first').fadeIn('slow');

    $('.form-wizard .required').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.form-wizard .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        // navigation steps / progress steps
        var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
        var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');

        // fields validation
        parent_fieldset.find('.required').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });
        // fields validation

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                // change icons
                current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                // progress bar
                bar_progress(progress_line, 'right');
                // show next step
                $(this).next().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class($('.form-wizard'), 20);
            });
        }

    });

    // previous step
    $('.form-wizard .btn-previous').on('click', function () {
        // navigation steps / progress steps
        var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
        var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');

        $(this).parents('fieldset').fadeOut(400, function () {
            // change icons
            current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
            // progress bar
            bar_progress(progress_line, 'left');
            // show previous step
            $(this).prev().fadeIn();
            // scroll window to beginning of the form
            scroll_to_class($('.form-wizard'), 20);
        });
    });

    // submit
    $('.form-wizard').on('submit', function (e) {

        // fields validation
        $(this).find('.required').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });
        // fields validation

    });


});


// image uploader scripts

var $dropzone = $('.image_picker'),
    $droptarget = $('.drop_target'),
    $dropinput = $('#inputFile'),
    $dropimg = $('.image_preview'),
    $remover = $('[data-action="remove_current_image"]');

$dropzone.on('dragover', function () {
    $droptarget.addClass('dropping');
    return false;
});

$dropzone.on('dragend dragleave', function () {
    $droptarget.removeClass('dropping');
    return false;
});

$dropzone.on('drop', function (e) {
    $droptarget.removeClass('dropping');
    $droptarget.addClass('dropped');
    $remover.removeClass('disabled');
    e.preventDefault();

    var file = e.originalEvent.dataTransfer.files[0],
        reader = new FileReader();

    reader.onload = function (event) {
        $dropimg.css('background-image', 'url(' + event.target.result + ')');
    };

    console.log(file);
    reader.readAsDataURL(file);

    return false;
});

$dropinput.change(function (e) {
    $droptarget.addClass('dropped');
    $remover.removeClass('disabled');
    $('.image_title input').val('');

    var file = $dropinput.get(0).files[0],
        reader = new FileReader();

    reader.onload = function (event) {
        $dropimg.css('background-image', 'url(' + event.target.result + ')');
    }

    reader.readAsDataURL(file);
});

$remover.on('click', function () {
    $dropimg.css('background-image', '');
    $droptarget.removeClass('dropped');
    $remover.addClass('disabled');
    $('.image_title input').val('');
});

$('.image_title input').blur(function () {
    if ($(this).val() != '') {
        $droptarget.removeClass('dropped');
    }
});

// image uploader scripts
  //get checkbox value

  function getCheckboxValue() {
   
    // Get the checkbox element
    var checkbox = document.getElementById('same_as_business');
    var business = document.getElementById('business_address').value;
    // alert(business);
    // Check if the checkbox is checked
    if (checkbox.checked) {
        console.log('Checkbox is checked');
        console.log('Value:', checkbox.value);
        var business = document.getElementById('home_address').value = business;
    } else {
        var business = document.getElementById('home_address').value = "";
    }
}



//add more
$(document).ready(function(){
   
    var i = 1;
      var length;
      //var addamount = 0;
     var addamount = 10;
  
    $("#add").click(function(){
       addamount += 10;
       console.log('amount: ' + addamount);
     i++;
           $('#dynamic_field').after('<div class="row dynamic_field" id="dynamic_field'+i+'"><div class="form-group col-lg-5"><label>RC Number:<span>*</span></label><input type="text" name="rc_number[]" placeholder="RC Number" class="form-control required"></div><div class="form-group col-lg-5"><label>Upload RC:<span>*</span></label><input class="input file" type="file" name="rc_image[]" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required></div><div class="form-group col-lg-2 mt-4"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button></div></div>');
      });
  
    $(document).on('click', '.btn_remove', function(){  
      addamount -= 10;
      console.log('amount: ' + addamount);
        var button_id = $(this).attr("id");     
        $('#dynamic_field'+button_id+'').remove();  
      });
      
  
  
      $("#submit").on('click',function(event){
      var formdata = $("#add_name").serialize();
        console.log(formdata);
        
        event.preventDefault()
        
        $.ajax({
          url   :"action.php",
          type  :"POST",
          data  :formdata,
          cache :false,
          success:function(result){
            alert(result);
            $("#add_name")[0].reset();
          }
        });
        
      });
    });