// eye password
const eye = document.querySelector("#eye");
const newEye = document.querySelector("#new-eye");
const password = document.querySelector("#password");
const newPassword = document.querySelector("#new_password");

eye.addEventListener("click", () => {
    password.type = eye.checked ? "text" : "password";
});

newEye.addEventListener("click", () => {
    newPassword.type = eye.checked ? "text" : "password";
});
