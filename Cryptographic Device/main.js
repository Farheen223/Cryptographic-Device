/**
 * JAVASCRIPT FOR ALL OF THE PAGES
 */
//fade effect for all pages
document.addEventListener("DOMContentLoaded", function() {
  
    var mainElement = document.querySelector("main");
  
    //  reveals the main content with a fade-in effect
    fadeIn(mainElement);
  });
  
  function fadeIn(element) {
    var opacity = 0;
    var intervalId = setInterval(function() {
        opacity += 0.05;
        element.style.opacity = opacity;
        if (opacity >= 1) {
            clearInterval(intervalId);
        }
    }, 50);
  }
  

  //sign up page javascript
const dialog = document.querySelector("dialog");
const showButton = document.querySelector("dialog + button");
const closeButton = document.querySelector("dialog button");

// "Show the dialog" button opens the dialog modally
showButton.addEventListener("click", () => {
  dialog.showModal();
});

closeButton.addEventListener("click", () => {
    location = "Home.html";
});

//sign up page javascript  - sign in here button

const signinhere = document.getElementById("signinhere");

signinhere.addEventListener("click", () => {
  location = "Signin.php";
});

//sign in PAGE javascript 

//login button
function login() {
  location = "Account.html";
}

//sign up button
function signup() {
  location = "Signup.php";
}

//ACCOUNT PAGE JAVASCRIPT 
function logout() {
  location = "Home.html";
}
