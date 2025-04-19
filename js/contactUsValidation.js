document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact_form');

    form.addEventListener('submit', function (e) {
        let isValid = true;
        let errorMsg = "";


        const name = document.getElementById('name_input').value.trim();
        if (name === "") {
            isValid = false;
            errorMsg += "Name is required.\n";
        }

        // Email validation
        const email = document.getElementById('email_input').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            isValid = false;
            errorMsg += "Enter a valid email address.\n";
        }

        // Telephone validation
        const telephone = document.getElementById('telephone_input').value.trim();
        const phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(telephone)) {
            isValid = false;
            errorMsg += "Enter a valid 10-digit phone number.\n";
        }

        // Subject validation
        const subject = document.getElementById('subject_input').value;
        if (!subject || subject === "Subject line") {
            isValid = false;
            errorMsg += "Please select a subject.\n";
        }

        // Message validation
        const message = document.getElementById('message_input').value.trim();
        if (message.length < 10) {
            isValid = false;
            errorMsg += "Message must be at least 10 characters.\n";
        }

        if (!isValid) {
            e.preventDefault(); 
            alert(errorMsg);    
        }
    });
});
