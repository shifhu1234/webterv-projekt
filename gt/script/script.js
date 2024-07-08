
const names = ['ügyfelek számára', 'a bizniszednek'];

megjelenitett = document.getElementById('name');
let index = 0;

setInterval(() => {
    megjelenitett.textContent = names[index];
    index = (index + 1) % names.length;
}, 2500);

const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("pswd");
const submitButton = document.getElementById("submit-btn");

submitButton.style.backgroundColor = "#EF634C";
function checkInputs() {
    if (usernameInput.value.length >= 5 && passwordInput.value.length >= 6) {
        submitButton.style.backgroundColor = "#4cb93e";
        submitButton.style.scale = (1.05);
    } else {
        submitButton.style.backgroundColor = "#EF634C";
        submitButton.style.scale = (1);
    }
}

/*function handleSubmit(event) {
    if (!(usernameInput.value.length < 5 || passwordInput.value.length < 7)) {
        event.preventDefault();
    }
}*/
usernameInput.addEventListener("input", checkInputs);
passwordInput.addEventListener("input", checkInputs);
//submitButton.addEventListener("input", handleSubmit);


const regUsernameInput = document.getElementById("reg-username");
const regPasswordInput = document.getElementById("reg-pswd");
const regCheckPasswordInput = document.getElementById("check-pswd");
const regButton = document.getElementById("register-btn");
const regDateInput = document.getElementById("date-of-birth");

regButton.style.backgroundColor = "#EF634C";


function checkRegInputs() {
    const date = new Date(regDateInput.value);
    if (regUsernameInput.value.length >= 5 && regPasswordInput.value.length >= 6 && regPasswordInput.value == regCheckPasswordInput.value && regDateInput.value != "" && !isNaN(date.getTime())) {
        regButton.style.backgroundColor = "#4cb93e";
        regButton.style.scale = (1.05);
    } else {
        regButton.style.backgroundColor = "#EF634C";
        regButton.style.scale = (1);
    }
}

regUsernameInput.addEventListener("input", checkRegInputs);
regPasswordInput.addEventListener("input", checkRegInputs);
regCheckPasswordInput.addEventListener("input", checkRegInputs);
regDateInput.addEventListener("input", checkRegInputs);

const resetButton = document.querySelector('input[name="btn-reset"]');
resetButton.addEventListener('click', clearInputs);

function clearInputs() {
    const usernameInput = document.getElementById('reg-username');
    const passwordInput = document.getElementById('reg-pswd');
    const passwordCheckInput = document.getElementById('check-pswd');
    const dateOfBirthInput = document.getElementById('date-of-birth');
    const sexInputs = document.querySelectorAll('input[name="sex"]');
    const fileUploadInput = document.getElementById('file-upload');

    usernameInput.value = '';
    passwordInput.value = '';
    passwordCheckInput.value = '';
    dateOfBirthInput.value = '';
    sexInputs.forEach(input => {
        if (input.checked) {
            input.checked = false;
            regButton.style.backgroundColor = "#EF634C";
        }
    });
    fileUploadInput.value = '';
    regButton.style.backgroundColor = "#EF634C";
    regButton.style.scale = (1);
}


if (document.getElementById('error-msgs').classList.contains('show')) {
    setTimeout(function () {
        document.getElementById('error-msgs').classList.remove('show');
    }, 7000); //5-7 sec
}




/*const changeOldUserInput = document.getElementById("old-name");
const changeNewUserInput = document.getElementById("new-name");
const changeOldPasswordInput = document.getElementById("old-pswd");
const changeNewPasswordInput = document.getElementById("new-pswd");
const changeOldEmailInput = document.getElementById("old-email");
const changeDateInput = document.getElementById("new-date");

const changeUserButton = document.getElementById("name-up");
const changePasswordButton = document.getElementById("pswd-up");
const changeEmailButton = document.getElementById("email-up");
const changeDateButton = document.getElementById("date-up");

changeUserButton.style.backgroundColor = "#EF634C";
changePasswordButton.style.backgroundColor = "#EF634C";
changeEmailButton.style.backgroundColor = "#EF634C";
changeDateButton.style.backgroundColor = "#EF634C";


function checkUserChangeInputs() {
    //const date = new Date(changeDateInput.value);
    if (changeOldUserInput.value.length >= 5 && regPasswordInput.value.length >= 6 && regPasswordInput.value == regCheckPasswordInput.value && regDateInput.value != "" && !isNaN(date.getTime())) {
        regButton.style.backgroundColor = "#4cb93e";
        regButton.style.scale = (1.05);
    } else {
        regButton.style.backgroundColor = "#EF634C";
        regButton.style.scale = (1);
    }
}

regUsernameInput.addEventListener("input", checkRegInputs);
regPasswordInput.addEventListener("input", checkRegInputs);
regCheckPasswordInput.addEventListener("input", checkRegInputs);
regDateInput.addEventListener("input", checkRegInputs);

*/


