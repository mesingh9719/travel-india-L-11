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
        homeStateInput: '#home_state',
        stateError: '#stateError',
        homeCityInput: '#home_city',
        cityError: '#cityError',
        homeZipInput: '#home_zip',
        zipError: '#zipError',
        homeAddressInput: '#home_address',
        addressError: '#addressError',
        businessStateInput: '#business_state',
        businessStateError: '#businessStateError',
        businessCityInput: '#business_city',
        businessCityError: '#businessCityError',
        businessZipInput: '#business_zip',
        businessZipError: '#businessZipError',
        businessAddressInput: '#business_address',
        businessAddressError: '#businessAddressError'
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

    const validateBusinessState = () => {
        const businessState = $(DOMstrings.businessStateInput).val();
        if (businessState != '' && !/^[a-zA-Z\s]+$/.test(businessState)) {
            $(DOMstrings.businessStateError).text('State Name can only contain letters and spaces.');
            return false;
        } else {
            $(DOMstrings.businessStateError).text('');
            return true;
        }
    };

    const validateBusinessCity = () => {

        const businessCity = $(DOMstrings.businessCityInput).val();
        if (businessCity != '' && !/^[a-zA-Z\s]+$/.test(businessCity)) {
            $(DOMstrings.businessCityError).text('City Name can only contain letters and spaces.');
            return false;
        } else {
            $(DOMstrings.businessCityError).text('');
            return true;
        }
    }

    const validateBusinessZip = () => {
        const businesszip = $(DOMstrings.businessZipInput).val();
        if (businesszip != '' && !/^\d+(\.\d+)?$/.test(businesszip)) {
            $(DOMstrings.businessZipError).text('Invalid Zip Code. It must be Number.');
            return false;
        } else {
            $(DOMstrings.businessZipError).text('');
            return true;
        }
    }


    const validateBusinessAddress = () => {
        const businessAddress = $(DOMstrings.businessAddressInput).val();
        if (businessAddress != '' && businessAddress.length > 150) {
            $(DOMstrings.businessAddressError).text('Address must be 150 characters or less..');
            return false;
        } else {
            $(DOMstrings.businessAddressError).text('');
            return true;
        }
    }
    const validateHomeState = () => {
        const homeState = $(DOMstrings.homeStateInput).val().trim();
        if (homeState === '') {
            $(DOMstrings.stateError).text('State is required.');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(homeState)) {
            $(DOMstrings.stateError).text('State Name can only contain letters and spaces.');
            return false;
        } else {
            $(DOMstrings.stateError).text('');
            return true;
        }
    }

    const validateHomeCity = () => {
        const homeCity = $(DOMstrings.homeCityInput).val().trim();
        if (homeCity === '') {
            $(DOMstrings.cityError).text('City is required.');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(homeCity)) {
            $(DOMstrings.cityError).text('City Name can only contain letters and spaces.');
            return false;
        } else {
            $(DOMstrings.cityError).text('');
            return true;
        }
    };

    const validateHomeZip = () => {
        const homezip = $(DOMstrings.homeZipInput).val().trim();
        if (homezip === '') {
            $(DOMstrings.zipError).text('Zip Code is required.');
            return false;
        } else if (!/^\d+(\.\d+)?$/.test(homezip)) {
            $(DOMstrings.zipError).text('Invalid Zip Code. It must be Number.');
            return false;
        } else {
            $(DOMstrings.zipError).text('');
            return true;
        }
    };
    const validateHomeAddress = () => {
        const homeAddress = $(DOMstrings.homeAddressInput).val().trim();

        if (homeAddress === '') {
            $(DOMstrings.addressError).text('Address is required.');
            return false;
        } else if (homeAddress.length > 150) {
            $(DOMstrings.addressError).text('Address must be 150 characters or less..');
            return false;
        } else {
            $(DOMstrings.addressError).text('');
            return true;
        }
    };

    const validateAadharNumber = () => {
        let aadharNumber = $(DOMstrings.aadharNumberInput).val().trim();
        aadharNumber = aadharNumber.replace(/\D/g, '').slice(0, 12); // Remove non-digits and limit to 10 digits
        $(DOMstrings.aadharNumberInput).val(aadharNumber); // Update input value
        const phonePattern = /^[0-9]{12}$/;
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
    }

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

    function vehicleDetailsValidation() {
        let isValid = true;

        // Clear all previous error messages
        $('.rc_number_error, .rc_image_error').text('');

        // Validate all RC Numbers
        $('.rc_number').each(function() {
            const rcNumber = $(this).val();
            const errorSpan = $(this).siblings('.rc_number_error');
            if (rcNumber.trim() === '') {
                errorSpan.text('RC Number is required.');
                isValid = false;
            }
        });

        // Validate all RC Images
        $('.rc_image').each(function() {
            const fileInput = $(this)[0].files.length;
            const errorSpan = $(this).siblings('.rc_image_error');
            if (fileInput === 0) {
                errorSpan.text('RC Image is required.');
                isValid = false;
            }
        });

        return isValid;
    }

    let fieldCount = 0;

    $("#add").click(function() {
        fieldCount++;
        const newField = `
            <div class="row dynamic_field" id="dynamic_field${fieldCount}">
                <div class="form-group col-lg-5 required">
                    <label>RC Number</label>
                    <input type="text" name="rc_number[]" placeholder="RC Number" class="form-control rc_number"  maxlength="15">
                     <span class="error rc_number_error"></span>
                </div>
                <div class="form-group col-lg-5 required">
                    <label>Upload RC</label>
                    <input class="form-control rc_image" type="file" name="rc_image_front[]" accept="image/*, .jpg, .png, .bmp, .heif, .svg">
                     <span class="error rc_image_error"></span>
                </div>
                <div class="form-group col-lg-2 mt-4">
                    <button type="button" name="remove" id="${fieldCount}" class="btn btn-danger btn_remove mt-4" style="background: #333931;">X</button>
                </div>
            </div>`;
        $('#dynamic_field').after(newField);
        adjustFormHeight(getActivePanel());
    });

    $(document).on('click', '.btn_remove', function() {
        $(this).closest('.dynamic_field').remove();
        adjustFormHeight(getActivePanel());
    });



    $(document).on('keyup change', '.rc_number, .rc_image', function() {
        vehicleDetailsValidation();
    });

    // Validate fields on real-time input
    $(DOMstrings.fullNameInput).on('input', validateFullName);
    $(DOMstrings.phoneNumberInput).on('input', validatePhoneNumber);
    $(DOMstrings.alternatePhoneNumberInput).on('input', validateAlternatePhoneNumber);
    $(DOMstrings.userTypeInput).on('change', userTypeValidation);
    $(DOMstrings.homeStateInput).on('input', validateHomeState);
    $(DOMstrings.homeCityInput).on('input', validateHomeCity);
    $(DOMstrings.homeZipInput).on('input', validateHomeZip);
    $(DOMstrings.homeAddressInput).on('input', validateHomeAddress);
    $(DOMstrings.panNumberinput).on('input', validatepan_number);
    $(DOMstrings.panImageInput).on('change', validatePanCardImage);
    $(DOMstrings.aadharNumberInput).on('input', validateAadharNumber);
    $(DOMstrings.aadharImageFront).on('change', validateAaadharCardFrontImage);
    $(DOMstrings.aadharImageBack).on('change', validateAaadharCardBackImage);
    $(DOMstrings.dlNumberInput).on('input', validateDLNumber);
    $(DOMstrings.dlimageInput).on('change', validateDLImage);
    $(DOMstrings.businessCityInput).on('input', validateBusinessCity);
    $(DOMstrings.businessZipInput).on('input', validateBusinessZip);
    $(DOMstrings.businessStateInput).on('input', validateBusinessState);
    $(DOMstrings.businessAddressInput).on('input', validateBusinessAddress);


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
            const isValidHomeState = validateHomeState();
            const isValidHomeCity = validateHomeCity();
            const isValidHomeZip = validateHomeZip();
            const isValidHomeAddress = validateHomeAddress();
            const isValidBusinessCity = validateBusinessCity();
            const isValidBusinessZip = validateBusinessZip();
            const isValidBusinessState = validateBusinessState();
            const isValidBusinessAddress = validateBusinessAddress();

            if (!isValidName || !isValidPhone || !isValidHomeState || !isValidHomeCity || !isValidHomeZip || !isValidHomeAddress || !isValidAlternatePhone || !isValidUserType || !isValidBusinessCity || !isValidBusinessZip || !isValidBusinessState || !isValidBusinessAddress) return;
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
            if (!vehicleDetailsValidation()) return;
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
});


//select address same as business address
function getCheckboxValue() {
    // Get the checkbox element
    const checkbox = document.getElementById('same_as_business');
    const business = ['business_address', 'business_state', 'business_city', 'business_zip'];
    const home = ['home_address', 'home_state', 'home_city', 'home_zip'];
    // Check if the checkbox is checked
    if (checkbox.checked) {
        for (let i = 0; i < business.length; i++) {
            const businessElement = document.getElementById(business[i]);
            const homeElement = document.getElementById(home[i]);
            if (businessElement && homeElement) {
                homeElement.value = businessElement.value;
            } else {
                console.error(`Element with ID "${business[i]}" or "${home[i]}" not found.`);
            }
        }

    } else {
        document.getElementById('home_address').value = "";
        document.getElementById('home_state').value = "";
        document.getElementById('home_city').value = "";
        document.getElementById('home_zip').value = "";
    }
}


//Camara function 
document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('camara');
    const openCamara = document.getElementById('open_camara');
    const captureButton = document.getElementById('capture');
    const imageDataInput = document.getElementById('imageData');
    
    button.onclick = () => {
        // Create and insert video and canvas elements
        openCamara.innerHTML = `
            <video class="d-inline captureImage" id="video" autoplay></video>
            <canvas class="d-inline captureImage" id="canvas"></canvas>
        `;

        // Get references to the video and canvas elements
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext('2d');

        // Start webcam access
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
                video.play();
            })
            .catch(err => {
                console.error("Error accessing webcam: ", err);
            });

        // Capture and stop video
        captureButton.addEventListener('click', () => {
            if (video.srcObject) {
                const stream = video.srcObject;
                video.pause(); // Pause the video
                video.currentTime = 0; // Reset video time
                video.classList.add('hideVideo'); // Optionally hide the video
                stream.getTracks().forEach(track => track.stop()); // Stop all tracks   
            }

           

            // Capture image from video
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            imageDataInput.value = dataURL;
        });
    };
});
