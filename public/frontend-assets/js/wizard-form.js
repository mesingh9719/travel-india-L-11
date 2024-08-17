$(document).ready(function() {
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
        mobileError: '#mobileError',
        panNumberinput: '#pan_number',
        panError: '#panError',
        panImageInput: '#pan_image',
        panImageError: '#panImageError',
        aadharNumberInput: '#aadhar_number',
        aadharError: '#aadharError',
        aadharImageFront: '#aadhar_image_front',
        aadharfrontError: '#aadharfrontError',
        aadharImageBack: '#aadhar_image_back',
        aadharbackError: '#aadharbackError',
        dlNumberInput: '#dl_number',
        dlError: '#dlError',
        dlimageInput: '#dl_image',
        dlImageError: '#dlImageError',
        rcNumberInput: 'rc_number',
        rcError: "#rcError",
        rcimagefrontError: '#rcimagefrontError',
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

    const validatepan_number = () => {
        let validatepan_number = $(DOMstrings.panNumberinput).val().trim();
        $(DOMstrings.panNumberinput).val(validatepan_number);
        const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
        if (validatepan_number == "") {
            $(DOMstrings.panError).text('Pan Number is required.');
            return false;
        } else if (!panRegex.test(validatepan_number)) {
            $(DOMstrings.panError).text('Invalid PAN number.');
            return false;
        } else {
            $(DOMstrings.panError).text('');
            return true;
        }
    }

    const validateAadharNumber = () => {
        let aadharNumber = $(DOMstrings.aadharNumberInput).val().trim();
        aadharNumber = aadharNumber.replace(/\D/g, '').slice(0, 10); // Remove non-digits and limit to 10 digits
        $(DOMstrings.aadharNumberInput).val(aadharNumber); // Update input value
        const phonePattern = /^[0-9]{10}$/;
        if (aadharNumber === '') {
            $(DOMstrings.aadharError).text('Aadhar Number is required.');
            return false;
        } else if (!phonePattern.test(aadharNumber)) {
            $(DOMstrings.aadharError).text('Invalid Aadhar Number. It must be 12 digits.');
            return false;
        } else {
            $(DOMstrings.aadharError).text('');
            return true;
        }
    };

    const validatePanCardImage = () => {
        let dlFileStaus = true;
        const fileInput = $(DOMstrings.panImageInput)[0];
        const files = fileInput.files;
        if (files.length > 0) {
            $(DOMstrings.panImageError).text('');
            dlFileStaus = true;
        } else {
            $(DOMstrings.panImageError).text("Please Upload Your Pan.");
            dlFileStaus = false;
        }
        return dlFileStaus;
    }
    const validateAaadharCardFrontImage = () => {
        let dlFileStaus = true;
        const fileInput = $(DOMstrings.aadharImageFront)[0];
        const files = fileInput.files;
        if (files.length > 0) {
            $(DOMstrings.aadharfrontError).text('');
            dlFileStaus = true;
        } else {
            $(DOMstrings.aadharfrontError).text("Please  Upload Your Front page of Aadhar.");
            dlFileStaus = false;
        }
        return dlFileStaus;
    }


    const validateAaadharCardBackImage = () => {
        let dlFileStaus = true;
        const fileInput = $(DOMstrings.aadharImageBack)[0];
        const files = fileInput.files;
        if (files.length > 0) {
            // Display the file names
            $(DOMstrings.aadharbackError).text('');
            dlFileStaus = true;
        } else {
            $(DOMstrings.aadharbackError).text("Please Upload Your Back page of Aadhar.");
            dlFileStaus = false;
        }
        return dlFileStaus;
    }

    const validateDLNumber = () => {
        let dlNumber = $(DOMstrings.dlNumberInput).val().trim();
        $(DOMstrings.dlNumberInput).val(dlNumber); // Update input value
        const dlPattern = /^[A-Za-z0-9]{10}$/;
        if (dlNumber === '') {
            $(DOMstrings.dlError).text('DL Number is required.');
            return false;
        } else if (!dlPattern.test(dlNumber)) {
            $(DOMstrings.dlError).text('Invalid DL Number. It must be 10 digits.');
            return false;
        } else {
            $(DOMstrings.dlError).text('');
            return true;
        }
    };

    const validateDLImage = () => {
        let dlFileStaus = true;
        const fileInput = $(DOMstrings.dlimageInput)[0];
        const files = fileInput.files;
        if (files.length > 0) {
            $(DOMstrings.dlImageError).text('');
            dlFileStaus = true;
        } else {
            $(DOMstrings.dlImageError).text("Please Upload DL.");
            dlFileStaus = false;
        }
        return dlFileStaus;
    }


    const validateRCNumber = () => {
        let status = true;
        $('input[name="rc_number[]"]').each(function(index, element) {
            const rcNumberPattern = /^[A-Za-z0-9]{6,12}$/;
            if ($(this).val() === '') {
                $(DOMstrings.rcError + index).text('RC Number is required');
                status = false;
            } else {
                $(DOMstrings.rcError + index).text('');
                status = true;
            }
            return status;
        });

        return status;

    }

    const validateRCImage = () => {
        let fileStatus = true;
        $('input[name="rc_image_front[]"]').each(function(index, element) {
            if (element.type === 'file') {
                const files = element.files;
                if (files.length > 0) {
                    $(DOMstrings.rcimagefrontError + index).text('');
                    fileStatus = true;
                } else {
                    $(DOMstrings.rcimagefrontError + index).text('DL File is required');
                    console.log("upload File name");
                    fileStatus = false;
                }
            }
        });
        return fileStatus;

    }

    // Validate fields on real-time input
    $(DOMstrings.fullNameInput).on('input', validateFullName);
    $(DOMstrings.phoneNumberInput).on('input', validatePhoneNumber);
    $(DOMstrings.alternatePhoneNumberInput).on('input', validateAlternatePhoneNumber);
    $(DOMstrings.userTypeInput).on('change', userTypeValidation);
    $(DOMstrings.panNumberinput).on('input', validatepan_number);
    $(DOMstrings.panImageInput).on('change', validatePanCardImage);
    $(DOMstrings.aadharNumberInput).on('input', validateAadharNumber);
    $(DOMstrings.aadharImageFront).on('change', validateAaadharCardFrontImage);
    $(DOMstrings.aadharImageBack).on('change', validateAaadharCardBackImage);
    $(DOMstrings.dlNumberInput).on('input', validateDLNumber);
    $(DOMstrings.dlimageInput).on('change', validateDLImage);
    $(DOMstrings.rcNumberInput).on('input', validateRCNumber);
    $('input[name="rc_image_front[]"]').on('change', validateRCImage);


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

        const currentPanel = findParent(event.target, DOMstrings.stepFormPanelClass);
        let panelIndex = Array.from(DOMstrings.stepFormPanels).indexOf(currentPanel);

        panelIndex += event.target.classList.contains(DOMstrings.stepPrevBtnClass) ? -1 : 1;
        if (event.target.classList.contains(DOMstrings.stepNextBtnClass) && panelIndex == 1) {
            const isValidName = validateFullName();
            const isValidPhone = validatePhoneNumber();
            const isValidAlternatePhone = validateAlternatePhoneNumber();
            const isValidUserType = userTypeValidation();
            if (!isValidName || !isValidPhone || !isValidAlternatePhone || !isValidUserType) return;
        } else if (event.target.classList.contains(DOMstrings.stepNextBtnClass) && panelIndex == 2) {
            const isValidPan = validatepan_number();
            const isValidAadhar = validateAadharNumber();
            const isValidDL = validateDLNumber();
            const isValidDLImage = validateDLImage();
            const isValidAadharfront = validateAaadharCardFrontImage();
            const isValidAadharback = validateAaadharCardBackImage();
            const isValidPanImage = validatePanCardImage();
            if (!isValidPan || !isValidAadhar || !isValidDL || !isValidDLImage || !isValidAadharback || !isValidAadharfront || !isValidPanImage) return;
        } else if (event.target.classList.contains(DOMstrings.stepNextBtnClass) && panelIndex == 3) {
            const isValidRC = validateRCNumber();
            const isValidRCImages = validateRCImage();
            if (!isValidRC || !isValidRCImages) return;
        }
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
    let fieldCount = 0;

    $("#add").click(function() {
        fieldCount++;
        const newField = `
            <div><div class="row dynamic_field" id="dynamic_field${fieldCount}">
                <div class="form-group col-lg-5 required">
                    <label>RC Number</label>
                    <input type="text" name="rc_number[]" placeholder="RC Number" class="form-control rc_number">
                     <span id="rcError${fieldCount}" class="error"></span>
                </div>
                <div class="form-group col-lg-5 required">
                    <label>Upload RC</label>
                    <input class="form-control rc_image" type="file" name="rc_image_front[]" accept="image/*, .jpg, .png, .bmp, .heif, .svg">
                     <span id="rcimagefrontError${fieldCount}" class="error"></span>
                </div>
                <div class="form-group col-lg-2 mt-4">
                    <button type="button" name="remove" id="${fieldCount}" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button>
                </div>
            </div></div>`;
        $('#dynamic_field').after(newField);
        adjustFormHeight(getActivePanel());
    });

    $(document).on('click', '.btn_remove', function() {
        const fieldId = $(this).attr("id");
        $(`#dynamic_field${fieldId}`).remove();
        adjustFormHeight(getActivePanel());
    });
});


//select address same as business address
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