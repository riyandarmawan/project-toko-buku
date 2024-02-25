// eye password
const eye = document.querySelector("#eye");
const password = document.querySelector("#password");

// eye.addEventListener("click", () => {
//     password.type = eye.checked ? "text" : "password";
// });

// dropdown user
const dropdown = document.querySelector("#dropdown-login");
const menu = document.querySelector("#dropdown-menu");

document.addEventListener("click", (e) => {
    if (dropdown.contains(e.target)) {
        menu.classList.toggle("hidden");
    } else if (!menu.contains(e.target) && !dropdown.contains(e.target)) {
        menu.classList.add("hidden");
    }
});
