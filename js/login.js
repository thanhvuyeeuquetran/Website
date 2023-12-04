function toggleLoginForm() {
  var loginForm = document.getElementById("loginForm");
  if (loginForm.style.display === "none" || loginForm.style.display === "") {
    loginForm.style.display = "block";
  } else {
    loginForm.style.display = "none";
  }
}

var loginButton = document.querySelector(".btn.btn-primary");
loginButton.addEventListener("click", toggleLoginForm);
