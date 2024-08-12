//DOM elements
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};




//remove class from a set of items
const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

};

//return exect parent node of the element
const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

};

//get active button step number
const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {
       
        
        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};


//get active panel
const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

            activePanel = elem;

        }

    });

    return activePanel;

};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('js-active');

            setFormHeight(elem);

        }
    });

};

//set form height equal to current panel height
const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {
   console.log(e);
   
    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
       
        return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
});

const clearErrors = () => {
    document.querySelectorAll('.error').forEach(error => error.textContent = '');
};

const validateStep1 = () => {
    const full_name = document.getElementById('full_name').value.trim();
    let isValid = true;
    if (full_name === '') {
        document.getElementById('nameError').textContent = 'Full Name is required';
        isValid = false;
    }else{
        document.getElementById('nameError').textContent = ''; 
    }
    const mobile = document.getElementById('mobile').value.trim();
    if (mobile === '') {
        document.getElementById('mobileError').textContent = 'Mobile number is required';
        isValid = false;
    }else{
        document.getElementById('mobileError').textContent = '';
    }
  

    // console.log(isValid);
    return isValid;
};
//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {
    const eventTarget = e.target;
    if (validateStep1() == false) {
        return false;
    }
    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return ;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;
    } else {
        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
        elem.dataset.animation = newType;
    });
};

// selector onchange - changing animation
//   const animationSelect = document.querySelector('.pick-animation__select');

//   animationSelect.addEventListener('change', () => {
//     const newAnimationType = animationSelect.value;

//     setAnimationType(newAnimationType);
//   });
// image uploader scripts
//get checkbox value

function getCheckboxValue() {
    // Get the checkbox element
    var checkbox = document.getElementById('same_as_business');
    var business = document.getElementById('business_address').value;
    // Check if the checkbox is checked
    if (checkbox.checked) {
        var business = document.getElementById('home_address').value = business;
    } else {
        var business = document.getElementById('home_address').value = "";
    }
}


//add more
$(document).ready(function () {
    let i = 1;
    let addamount = 10;

    $("#add").click(function () {
        addamount += 10;
        console.log('amount: ' + addamount);
        i++;
        const dynamicFieldHTML = `
            <div><div class="row dynamic_field" id="dynamic_field${i}">
                <div class="form-group col-lg-5">
                    <label>RC Number:<span>*</span></label>
                    <input type="text" name="rc_number[]" placeholder="RC Number" class="form-control">
                </div>
                <div class="form-group col-lg-5">
                    <label>Upload RC:<span>*</span></label>
                    <input class="form-control" type="file" name="rc_image_front[]" aria-label="File browser" accept="image/*, .jpg, .png, .bmp, .heif, .svg">
                </div>
                <div class="form-group col-lg-2 mt-4">
                    <button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button>
                </div>
            </div></div>`;
        $('#dynamic_field').after(dynamicFieldHTML);

        // update form height
        setFormHeight();
    });




    $(document).on('click', '.btn_remove', function () {
        addamount -= 10;
        console.log('amount: ' + addamount);
        const button_id = $(this).attr("id");
        $('#dynamic_field' + button_id).remove();
    });



    $("#submit").on('click', function (event) {
        var formdata = $("#add_name").serialize();
        console.log(formdata);

        event.preventDefault()

        $.ajax({
            url: "action.php",
            type: "POST",
            data: formdata,
            cache: false,
            success: function (result) {
                alert(result);
                $("#add_name")[0].reset();
            }
        });

    });
});



var current_slide, next_slide, previous_slide;
var left, opacity, scale;
var animation;

var error = false;

// email validation
$("#email").keyup(function() {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test($("#email").val())) {
        $("#error-email").text('Please enter an Email addres.');
        $("#email").addClass("box_error");
        error = true;
    } else {
        $("#error-email").text('');
        error = false;
        $("#email").removeClass("box_error");
    }
});
// password validation
$("#pass").keyup(function() {
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();

    if (pass != '') {
        $("#error-pass").text('');
        error = false;
        $("#pass").removeClass("box_error");
    }
    if (pass != cpass && cpass != '') {
        $("#error-cpass").text('Password and Confirm Password is not matched.');
        error = true;
    } else {
        $("#error-cpass").text('');
        error = false;
    }
});
// confirm password validation
$("#cpass").keyup(function() {
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();

    if (pass != cpass) {
        $("#error-cpass").text('Please enter the same Password as above.');
        $("#cpass").addClass("box_error");
        error = true;
    } else {
        $("#error-cpass").text('');
        error = false;
        $("#cpass").removeClass("box_error");
    }
});
// twitter
$("#twitter").keyup(function() {
    var twitterReg = /https?:\/\/twitter\.com\/(#!\/)?[a-z0-9_]+$/;
    if (!twitterReg.test($("#twitter").val())) {
        $("#error-twitter").text('Twitter link is not valid.');
        $("#twitter").addClass("box_error");
        error = true;
    } else {
        $("#error-twitter").text('');
        error = false;
        $("#twitter").removeClass("box_error");
    }
});
// facebook
$("#facebook").keyup(function() {
    var facebookReg = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
    if (!facebookReg.test($("#facebook").val())) {
        $("#error-facebook").text('Facebook link is not valid.');
        $("#facebook").addClass("box_error");
        error = true;
    } else {
        $("#error-facebook").text('');
        error = false;
        $("#facebook").removeClass("box_error");
    }
});
// linkedin
$("#linkedin").keyup(function() {
    var linkedinReg = /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    if (!linkedinReg.test($("#linkedin").val())) {
        $("#error-linkedin").text('Linkedin link is not valid.');
        $("#linkedin").addClass("box_error");
        error = true;
    } else {
        $("#error-linkedin").text('');
        error = false;
        $("#linkedin").removeClass("box_error");
    }
});
// first name
$("#fname").keyup(function() {
    var fname = $("#fname").val();
    if (fname == '') {
        $("#error-fname").text('Enter your First name.');
        $("#fname").addClass("box_error");
        error = true;
    } else {
        $("#error-fname").text('');
        error = false;
    }
    if ((fname.length <= 2) || (fname.length > 20)) {
        $("#error-fname").text("User length must be between 2 and 20 Characters.");
        $("#fname").addClass("box_error");
        error = true;
    }
    if (!isNaN(fname)) {
        $("#error-fname").text("Only Characters are allowed.");
        $("#fname").addClass("box_error");
        error = true;
    } else {
        $("#fname").removeClass("box_error");
    }
});
// last name
$("#lname").keyup(function() {
    var lname = $("#lname").val();
    if (lname != lname) {
        $("#error-lname").text('Enter your Last name.');
        $("#lname").addClass("box_error");
        error = true;
    } else {
        $("#error-lname").text('');
        error = false;
    }
    if ((lname.length <= 2) || (lname.length > 20)) {
        $("#error-lname").text("User length must be between 2 and 20 Characters.");
        $("#lname").addClass("box_error");
        error = true;
    }
    if (!isNaN(lname)) {
        $("#error-lname").text("Only Characters are allowed.");
        $("#lname").addClass("box_error");
        error = true;
    } else {
        $("#lname").removeClass("box_error");
    }
});
// phone
$("#phone").keyup(function() {
    var phone = $("#phone").val();
    if (phone != phone) {
        $("#error-phone").text('Enter your Phone number.');
        $("#phone").addClass("box_error");
        error = true;
    } else {
        $("#error-phone").text('');
        error = false;
    }
    if (phone.length != 10) {
        $("#error-phone").text("Mobile number must be of 10 Digits only.");
        $("#phone").addClass("box_error");
        error = true;
    } else {
        $("#phone").removeClass("box_error");
    }
});
// address
$("#address").keyup(function() {
    var address = $("#address").val();
    if (address != address) {
        $("#error-address").text('Enter your Address.');
        $("#address").addClass("box_error");
        error = true;
    } else {
        $("#error-address").text('');
        error = false;
        $("#address").removeClass("box_error");
    }
});

// first step validation
$(".fs_next_btn").click(function() {
    // email
    if ($("#email").val() == '') {
        $("#error-email").text('Please enter an email address.');
        $("#email").addClass("box_error");
        error = true;
    } else {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($("#email").val())) {
            $("#error-email").text('Please insert a valid email address.');
            error = true;
        } else {
            $("#error-email").text('');
            $("#email").removeClass("box_error");
        }
    }
    // password
    if ($("#pass").val() == '') {
        $("#error-pass").text('Please enter a password.');
        $("#pass").addClass("box_error");
        error = true;
    }
    if ($("#cpass").val() == '') {
        $("#error-cpass").text('Please enter a Confirm password.');
        $("#cpass").addClass("box_error");
        error = true;
    } else {
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();

        if (pass != cpass) {
            $("#error-cpass").text('Please enter the same password as above.');
            error = true;
        } else {
            $("#error-cpass").text('');
            $("#pass").removeClass("box_error");
            $("#cpass").removeClass("box_error");
        }
    }
    // animation
    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }
});
// second step validation
$(".ss_next_btn").click(function() {
    // twitter
    if ($("#twitter").val() == '') {
        $("#error-twitter").text('twitter link is required.');
        $("#twitter").addClass("box_error");
        error = true;
    } else {
        var twitterReg = /https?:\/\/twitter\.com\/(#!\/)?[a-z0-9_]+$/;
        if (!twitterReg.test($("#twitter").val())) {
            $("#error-twitter").text('Twitter link is not valid.');
            error = true;
        } else {
            $("#error-twitter").text('');
            $("#twitter").removeClass("box_error");
        }
    }
    // facebook
    if ($("#facebook").val() == '') {
        $("#error-facebook").text('Facebook link is required.');
        $("#facebook").addClass("box_error");
        error = true;
    } else {
        var facebookReg = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
        if (!facebookReg.test($("#facebook").val())) {
            $("#error-facebook").text('Facebook link is not valid.');
            error = true;
            $("#facebook").addClass("box_error");
        } else {
            $("#error-facebook").text('');
        }
    }
    // linkedin
    if ($("#linkedin").val() == '') {
        $("#error-linkedin").text('Linkedin link is required.');
        $("#linkedin").addClass("box_error");
        error = true;
    } else {
        var linkedinReg = /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (!linkedinReg.test($("#linkedin").val())) {
            $("#error-linkedin").text('Linkedin link is not valid.');
            error = true;
        } else {
            $("#error-linkedin").text('');
            $("#linkedin").removeClass("box_error");
        }
    }

    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }

});

// third step validation
$(".ts_next_btn").click(function() {
    // first name
    if ($("#fname").val() == '') {
        $("#error-fname").text('Enter your First name.');
        $("#fname").addClass("box_error");
        error = true;
    } else {
        var fname = $("#fname").val();
        if (fname != fname) {
            $("#error-fname").text('First name is required.');
            error = true;
        } else {
            $("#error-fname").text('');
            error = false;
            $("#fname").removeClass("box_error");
        }
        if ((fname.length <= 2) || (fname.length > 20)) {
            $("#error-fname").text("User length must be between 2 and 20 Characters.");
            error = true;
        }
        if (!isNaN(fname)) {
            $("#error-fname").text("Only Characters are allowed.");
            error = true;
        } else {
            $("#fname").removeClass("box_error");
        }
    }
    // last name
    if ($("#lname").val() == '') {
        $("#error-lname").text('Enter your Last name.');
        $("#lname").addClass("box_error");
        error = true;
    } else {
        var lname = $("#lname").val();
        if (lname != lname) {
            $("#error-lname").text('Last name is required.');
            error = true;
        } else {
            $("#error-lname").text('');
            error = false;
        }
        if ((lname.length <= 2) || (lname.length > 20)) {
            $("#error-lname").text("User length must be between 2 and 20 Characters.");
            error = true;
        } 
        if (!isNaN(lname)) {
            $("#error-lname").text("Only Characters are allowed.");
            error = true;
        } else {
            $("#lname").removeClass("box_error");
        }
    }
    // phone
    if ($("#phone").val() == '') {
        $("#error-phone").text('Enter your Phone number.');
        $("#phone").addClass("box_error");
        error = true;
    } else {
        var phone = $("#phone").val();
        if (phone != phone) {
            $("#error-phone").text('Phone number is required.');
            error = true;
        } else {
            $("#error-phone").text('');
            error = false;
        }
        if (phone.length != 10) {
            $("#error-phone").text("Mobile number must be of 10 Digits only.");
            error = true;
        } else {
            $("#phone").removeClass("box_error");
        }
    }
    // address
    if ($("#address").val() == '') {
        $("#error-address").text('Enter your Address.');
        $("#address").addClass("box_error");
        error = true;
    } else {
        var address = $("#address").val();
        if (address != address) {
            $("#error-address").text('Address is required.');
            error = true;
        } else {
            $("#error-address").text('');
            $("#address").removeClass("box_error");
            error = false;
        }
    }

    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }
});
// previous
$(".previous").click(function() {
    if (animation) return false;
    animation = true;

    current_slide = $(this).parent().parent();
    previous_slide = $(this).parent().parent().prev();

    $("#progress_header li").eq($(".multistep-box").index(current_slide)).removeClass("active");

    previous_slide.show();
    current_slide.animate({
        opacity: 0
    }, {
        step: function(now, mx) {
            scale = 0.8 + (1 - now) * 0.2;
            left = ((1 - now) * 50) + "%";
            opacity = 1 - now;
            current_slide.css({
                'left': left
            });
            previous_slide.css({
                'transform': 'scale(' + scale + ')',
                'opacity': opacity
            });
        },
        duration: 800,
        complete: function() {
            current_slide.hide();
            animation = false;
        },
        easing: 'easeInOutBack'
    });
});

$(".submit_btn").click(function() {
    if (!error){
        $(".main").addClass("form_submited");
    }
    return false;
})

