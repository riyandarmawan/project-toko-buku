const eye = document.querySelector("#eye");
const password = document.querySelector("#password");

eye.addEventListener("click", () => {
    password.type = eye.checked ? "text" : "password";
});
