// forgot password pop up javascript

// Get the popup
var modal = document.getElementById("forgotPasswordModal");

// Function to open the popup
function openModal() {
    modal.style.display = "block";
}

// Function to close the popup
function closeModal() {
    modal.style.display = "none";
}

// Function to validate the email address
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}


function resetPassword() {
    
    var email = document.getElementById("email").value;
    
    // Validate email address
    if (!validateEmail(email)) {
        // if not valid display error message
        document.getElementById("emailError").style.display = "block";
        return; // and stop execution if email
    } else {
        // Hide error message when email valid
        document.getElementById("emailError").style.display = "none";
    }
    
    // saves email to the console log - can be used later to send a reset password link to users email address
    console.log("Password reset requested for email: " + email);
    
    // Close the modal
    closeModal();
}



