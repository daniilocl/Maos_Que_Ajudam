const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.querySelector(".container");

registerButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});

const showRegister = document.getElementById("show-register");
const showLogin = document.getElementById("show-login");
const mobileLogin = document.getElementById("mobile-login");
const mobileRegister = document.getElementById("mobile-register");

showRegister.addEventListener("click", e => {
  e.preventDefault();
  mobileLogin.style.display = "none";
  mobileRegister.style.display = "block";
});

showLogin.addEventListener("click", e => {
  e.preventDefault();
  mobileRegister.style.display = "none";
  mobileLogin.style.display = "block";
});
