const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const loginButton = document.getElementById("loginbutton");
const container = document.getElementById("container");

const register = document.getElementById("register");
const login = document.getElementById("login");





signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
  login.classList.add("hide");
  if (register.classList.contains("hide")) {
    register.classList.remove("hide");
  } 
});

loginButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
  register.classList.add("hide");
  if (login.classList.contains("hide")) {
    login.classList.remove("hide");
  }
  
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
  
});
