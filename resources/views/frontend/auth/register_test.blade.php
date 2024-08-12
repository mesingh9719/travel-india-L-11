<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <style>
        .step { display: none; }
        .step.active { display: block; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
    <form id="wizardForm">
        <!-- Step 1 -->
        <div class="step active" id="step1">
            <h2>Step 1</h2>
            <label for="name">Name:</label>
            <input type="text" id="name">
            <span id="nameError" class="error"></span>
            <button type="button" id="next1">Next</button>
        </div>

        <!-- Step 2 -->
        <div class="step" id="step2">
            <h2>Step 2</h2>
            <label for="email">Email:</label>
            <input type="email" id="email">
            <span id="emailError" class="error"></span>
            <button type="button" id="prev1">Previous</button>
            <button type="button" id="next2">Next</button>
        </div>

        <!-- Step 3 -->
        <div class="step" id="step3">
            <h2>Step 3</h2>
            <label for="age">Age:</label>
            <input type="number" id="age">
            <span id="ageError" class="error"></span>
            <button type="button" id="prev2">Previous</button>
            <button type="submit" id="submit">Submit</button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('wizardForm');
    let currentStep = 1;

    // Function to show the current step and hide others
    const showStep = (step) => {
        document.querySelectorAll('.step').forEach(el => {
            el.classList.toggle('active', el.id === `step${step}`);
        });
    };

    // Function to clear all error messages
    const clearErrors = () => {
        document.querySelectorAll('.error').forEach(error => error.textContent = '');
    };

    // Validate Step 1
    const validateStep1 = () => {
        const name = document.getElementById('name').value.trim();
        let isValid = true;
        if (name === '') {
            document.getElementById('nameError').textContent = 'Name is required';
            isValid = false;
        }
        return isValid;
    };

    // Validate Step 2
    const validateStep2 = () => {
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let isValid = true;
        if (email === '') {
            document.getElementById('emailError').textContent = 'Email is required';
            isValid = false;
        } else if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Email is invalid';
            isValid = false;
        }
        return isValid;
    };

    // Validate Step 3
    const validateStep3 = () => {
        const age = parseInt(document.getElementById('age').value.trim(), 10);
        let isValid = true;
        if (isNaN(age) || age <= 0) {
            document.getElementById('ageError').textContent = 'Age must be a positive number';
            isValid = false;
        }
        return isValid;
    };

    // Event listeners for step navigation
    document.getElementById('next1').addEventListener('click', () => {
        if (validateStep1()) {
            currentStep = 2;
            showStep(currentStep);
        }
    });

    document.getElementById('prev1').addEventListener('click', () => {
        currentStep = 1;
        showStep(currentStep);
    });

    document.getElementById('next2').addEventListener('click', () => {
        if (validateStep2()) {
            currentStep = 3;
            showStep(currentStep);
        }
    });

    document.getElementById('prev2').addEventListener('click', () => {
        currentStep = 2;
        showStep(currentStep);
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        if (validateStep3()) {
            alert('Form submitted successfully!');
            // Add form submission logic here (e.g., sending data to server)
        }
    });

    // Initialize the form to show the first step
    showStep(currentStep);
});

    </script>
</body>
</html>
