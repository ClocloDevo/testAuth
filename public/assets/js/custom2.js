const emailEl = document.querySelector('#inputEmail');
const passwordEl = document.querySelector('#inputPassword');

const form = document.querySelector('#signup');


form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate forms
    let isEmailValid = checkEmail(),
        isPasswordValid = checkPassword();

    let isFormValid = isEmailValid &&
        isPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {

    }
});

// The following isRequired() function returns true if the input argument is empty
const isRequired = value => value === '' ? false : true;

// The following isBetween() function returns false if the length argument is not between the min and max argument
const isBetween = (length, min, max) => length < min || length > max ? false : true;

// To check if the email is valid, use a regular expression
const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

// To check if a password is strong
const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

// This function highlights the border of the input field and displays an error message if the input field is invalid
const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('span');
    error.textContent = message;
};

// This function highlights the border of the input field and hides the error message if the input fiel is valid
const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('span');
    error.textContent = '';
}

// The checkEmail() function returns true if the email is provided and valid
const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email requis');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email invalide')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
}

// The following checkPassword() function checks the password field if it is provided and matches the required format
const checkPassword = () => {
    let valid = false;

    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

// Provides instant feedback
form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
    }
}));

// wait for the users to pause the typing for a small amount of time or stop typing before validating the input
const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};