
function validateForm(e) {
    e.preventDefault(); // Prevent the default form submission behavior

    var form = e.target;
    var username = document.getElementById('username').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value;
    var confirm = document.getElementById('confirm-password').value;
    var terms = document.getElementById('checkbox').checked;

    if (!username || !email || !password || !confirm) {
        alert("All fields are required.");
        return false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }

    if (password !== confirm) {
        alert("Passwords do not match.");
        return false;
    }

    if (!terms) {
        alert("You must agree to the Terms and Conditions.");
        return false;
    }

    // If validation passes, submit the form
    form.submit();
    return false; // Return false to prevent double submission

}

