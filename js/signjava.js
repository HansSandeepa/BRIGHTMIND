document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signupForm');
    const errorDiv = document.getElementById('errorMessages');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Always prevent default first
        errorDiv.innerHTML = ''; // Clear previous errors

        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('confirm-password').value;
        const terms = document.getElementById('checkbox').checked;

        let isValid = true;
        let errors = [];

        // Username validation
        if (!username) {
            errors.push("Username is required");
            isValid = false;
        } else if (username.length < 3) {
            errors.push("Username must be at least 3 characters long");
            isValid = false;
        }

        // Email validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            errors.push("Email is required");
            isValid = false;
        } else if (!emailPattern.test(email)) {
            errors.push("Please enter a valid email address");
            isValid = false;
        }

        // Password validation
        if (!password) {
            errors.push("Password is required");
            isValid = false;
        } else if (password.length < 6) {
            errors.push("Password must be at least 6 characters long");
            isValid = false;
        }

        // Confirm password
        if (password !== confirm) {
            errors.push("Passwords do not match");
            isValid = false;
        }

        // Terms checkbox
        if (!terms) {
            errors.push("You must agree to the Terms and Conditions");
            isValid = false;
        }

        // Display errors or submit form
        if (!isValid) {
            errors.forEach(error => {
                const errorP = document.createElement('p');
                errorP.textContent = error;
                errorDiv.appendChild(errorP);
            });
            return false;
        }

        // If validation passes, submit the form
        form.submit();
        return true;
    });
});

