$(document).ready(function () {
    // DOM elements
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll('.multisteps-form__progress-btn'),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next',
        userTypeInput: '#user_type',
        fullNameInput: '#full_name',
        phoneNumberInput: '#mobileNumber',
        alternatePhoneNumberInput: '#alternate_Mobile',
        userTypeError: '#userTypeError',
        alternatePhoneNumberError: '#alternateMobileError',
        nameError: '#nameError',
        mobileError: '#mobileError'
    };

    // Utility functions
    const removeClasses = (elements, className) => {
        elements.forEach(element => element.classList.remove(className));
    };

    const findParent = (element, parentClass) => {
        while (element && !element.classList.contains(parentClass)) {
            element = element.parentNode;
        }
        return element;
    };

    const getActiveStep = (element) => {
        return Array.from(DOMstrings.stepsBtns).indexOf(element);
    };

    const setActiveStep = (stepIndex) => {
        removeClasses(DOMstrings.stepsBtns, 'js-active');
        DOMstrings.stepsBtns.forEach((btn, index) => {
            if (index <= stepIndex) btn.classList.add('js-active');
        });
    };

    const getActivePanel = () => {
        return Array.from(DOMstrings.stepFormPanels).find(panel => panel.classList.contains('js-active'));
    };

    const setActivePanel = (panelIndex) => {
        removeClasses(DOMstrings.stepFormPanels, 'js-active');
        DOMstrings.stepFormPanels.forEach((panel, index) => {
            if (index === panelIndex) {
                panel.classList.add('js-active');
                adjustFormHeight(panel);
            }
        });
    };

    const adjustFormHeight = (activePanel) => {
        const height = activePanel.offsetHeight;
        DOMstrings.stepsForm.style.height = `${height}px`;
    };

    // Form validation functions
    const userTypeValidation = () => {
        const userType = $(DOMstrings.userTypeInput).val();
        if (userType === '') {
            $(DOMstrings.userTypeError).text('User Type is required.');
            return false;
        } else {
            $(DOMstrings.userTypeError).text('');
            return true;
        }
    }
    const validateFullName = () => {
        const fullName = $(DOMstrings.fullNameInput).val().trim();
        if (fullName === '') {
            $(DOMstrings.nameError).text('Full Name is required.');
            return false;
        } else if (fullName.length < 3) {
            $(DOMstrings.nameError).text('Full Name must be at least 3 characters long.');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(fullName)) {
            $(DOMstrings.nameError).text('Full Name can only contain letters and spaces.');
            return false;
        } else {
            $(DOMstrings.nameError).text('');
            return true;
        }
    };



    const validatePhoneNumber = () => {
        let phoneNumber = $(DOMstrings.phoneNumberInput).val().trim();
        phoneNumber = phoneNumber.replace(/\D/g, '').slice(0, 10); // Remove non-digits and limit to 10 digits
        $(DOMstrings.phoneNumberInput).val(phoneNumber); // Update input value

        const phonePattern = /^[0-9]{10}$/;
        if (phoneNumber === '') {
            $(DOMstrings.mobileError).text('Phone Number is required.');
            return false;
        } else if (!phonePattern.test(phoneNumber)) {
            $(DOMstrings.mobileError).text('Invalid Phone Number. It must be 10 digits.');
            return false;
        } else {
            $(DOMstrings.mobileError).text('');
            return true;
        }
    };

    const validateAlternatePhoneNumber = () => {
        let alternatePhoneNumber = $(DOMstrings.alternatePhoneNumberInput).val().trim();
        alternatePhoneNumber = alternatePhoneNumber.replace(/\D/g, '').slice(0, 10);
        $(DOMstrings.alternatePhoneNumberInput).val(alternatePhoneNumber);
        const phonePattern = /^[0-9]{10}$/;
        if (alternatePhoneNumber !== '' && !phonePattern.test(alternatePhoneNumber)) {
            $(DOMstrings.alternatePhoneNumberError).text('Invalid Alternate Phone Number. It must be 10 digits.');
            return false;
        } else {
            $(DOMstrings.alternatePhoneNumberError).text('');
            return true;
        }
    }

    // Validate fields on real-time input
    $(DOMstrings.fullNameInput).on('input', validateFullName);
    $(DOMstrings.phoneNumberInput).on('input', validatePhoneNumber);
    $(DOMstrings.alternatePhoneNumberInput).on('input', validateAlternatePhoneNumber);
    $(DOMstrings.userTypeInput).on('change', userTypeValidation);

    // Steps bar click function
    DOMstrings.stepsBar.addEventListener('click', (event) => {
        if (!event.target.classList.contains(DOMstrings.stepsBtnClass)) return;

        const stepIndex = getActiveStep(event.target);
        setActiveStep(stepIndex);
        setActivePanel(stepIndex);
    });

    // Prev/Next buttons click
    DOMstrings.stepsForm.addEventListener('click', (event) => {
        if (!event.target.classList.contains(DOMstrings.stepPrevBtnClass) && !event.target.classList.contains(DOMstrings.stepNextBtnClass)) return;

        // Validate on "Next" button click
        if (event.target.classList.contains(DOMstrings.stepNextBtnClass)) {
            const isValidName = validateFullName();
            const isValidPhone = validatePhoneNumber();
            const isValidAlternatePhone = validateAlternatePhoneNumber();
            const isValidUserType = userTypeValidation();
            if (!isValidName || !isValidPhone || !isValidAlternatePhone || !isValidUserType) return;
        }

        const currentPanel = findParent(event.target, DOMstrings.stepFormPanelClass);
        let panelIndex = Array.from(DOMstrings.stepFormPanels).indexOf(currentPanel);

        panelIndex += event.target.classList.contains(DOMstrings.stepPrevBtnClass) ? -1 : 1;

        setActiveStep(panelIndex);
        setActivePanel(panelIndex);
    });

    // Initial and resize form height adjustment
    const initializeFormHeight = () => {
        adjustFormHeight(getActivePanel());
    };

    initializeFormHeight();
    $(window).on('resize', initializeFormHeight);

    // Dynamic field addition/removal
    let fieldCount = 1;

    $("#add").click(function () {
        fieldCount++;
        const newField = `
            <div><div class="row dynamic_field" id="dynamic_field${fieldCount}">
                <div class="form-group col-lg-5">
                    <label>RC Number:<span>*</span></label>
                    <input type="text" name="rc_number[]" placeholder="RC Number" class="form-control">
                </div>
                <div class="form-group col-lg-5">
                    <label>Upload RC:<span>*</span></label>
                    <input class="form-control" type="file" name="rc_image_front[]" accept="image/*, .jpg, .png, .bmp, .heif, .svg">
                </div>
                <div class="form-group col-lg-2 mt-4">
                    <button type="button" name="remove" id="${fieldCount}" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button>
                </div>
            </div></div>`;
        $('#dynamic_field').after(newField);
        adjustFormHeight(getActivePanel());
    });

    $(document).on('click', '.btn_remove', function () {
        const fieldId = $(this).attr("id");
        $(`#dynamic_field${fieldId}`).remove();
        adjustFormHeight(getActivePanel());
    });
});
