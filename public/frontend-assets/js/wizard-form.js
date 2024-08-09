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
    stepNextBtnClass: 'js-btn-next' };
  
  
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
  
  //PREV/NEXT BTNS CLICK
  DOMstrings.stepsForm.addEventListener('click', e => {
  
    const eventTarget = e.target;
  
    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
      return;
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
  
  //selector onchange - changing animation
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
           $('#dynamic_field').after('<div class="row dynamic_field" id="dynamic_field'+i+'"><div class="form-group col-lg-5"><label>RC Number:<span>*</span></label><input type="text" name="rc_number[]" placeholder="RC Number" class="form-control required"></div><div class="form-group col-lg-5"><label>Upload RC:<span>*</span></label><input class="form-control" type="file" name="rc_image[]" aria-label="File browser" accept="image*/, .jpg, .png, .bmp, .heif, .svg" required></div><div class="form-group col-lg-2 mt-4"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button></div></div>');
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