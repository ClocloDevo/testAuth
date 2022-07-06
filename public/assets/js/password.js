// const passwordEl = document.querySelector('#inputPassword');
const passwordEl = document.querySelector('input[type="password"]');
// console.log(passwordEl);
const form = document.querySelector('#signup');

// The following checkPassword() function checks the password field if it is provided and matches the required format
const checkPassword = () => {
    let valid = false;

    const password = passwordEl.value.trim();
    console.log(password);

    if (!isRequired(password)) {
        showError(passwordEl, 'Mot de passe requis');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Le mot de passe doit contenir au moins 8 caractères dont 1 minuscule,' +
            ' 1 majuscule, 1 chiffre et 1 caractère spécial' +
            ' parmi (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

// To check if a password is strong
const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

// The following isRequired() function returns true if the input argument is empty
const isRequired = value => value === '' ? false : true;

// The following isBetween() function returns false if the length argument is not between the min and max argument
const isBetween = (length, min, max) => length < min || length > max ? false : true;

// This function highlights the border of the input field and displays an error message if the input field is invalid
const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // console.log(formField);
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.parentElement.querySelector('span'); //dans les forms gérés par SF en twig sans faire
    // appel du html, le span est n'est pas directement dans l'élément parent de l'input
    // console.log(error);
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
    const error = formField.parentElement.querySelector('span'); //span n'existe pas dans le form, donc error est null
    error.textContent = '';
}

form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate forms
    let isPasswordValid = checkPassword();

    let isFormValid = isPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {
        form.submit();
    }
});

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

// Provides instant feedback
form.addEventListener('input', debounce(function (e) {
    // switch (e.target.id) {
    //     case 'inputPassword': //pb car l'id ne s'appelle pas comme ça dans tous les forms
    //         checkPassword();
    //         break;
    // }
    switch (e.target.type) {
        case 'password': //pb car l'id ne s'appelle pas inputPassword dans tous les forms, donc utiliser le type
            checkPassword();
            break;
    }

}));

