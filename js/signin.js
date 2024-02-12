document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector(".formsignup form");
    const continueBtn = form.querySelector(".input-box.button input");
    const errorText = form.querySelector(".error-txt");

    form.onsubmit = (e) => {
        e.preventDefault(); // Preventing form from submitting
    };

    if (continueBtn) {
       // console.log("Button element found:", continueBtn);
        continueBtn.onclick = () => {
            // Ajax
            let xhr = new XMLHttpRequest(); // Creating XMLHttpRequest object
            xhr.open("POST", "php/signup.php", true);

            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if (data.trim() === "success") {
                            // Redirect or do something on successful form submission
                            window.location.href = "dashboard.php";
                        } else {
                            // Display error text
                            errorText.textContent = data;
                            errorText.style.display = "block";
                        }
                    }
                }
            };

            // Handle network errors
            xhr.onerror = () => {
                console.error("Network error occurred");
            };

            // We have to send the form data through AJAX to PHP
            let formData = new FormData(form); // Creating new FormData object

            xhr.send(formData);
        };
    } else {
        console.error("Button element not found");
    }
});
