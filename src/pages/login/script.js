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

window.addEventListener("load", function() {
  const loader = document.getElementById("loader");
  const content = document.getElementById("content");

  // Oculta o loader
  loader.style.display = "none";

  // Mostra o conteúdo da página
  content.style.display = "block";
});
