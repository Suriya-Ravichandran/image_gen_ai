document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector(".formlogin form");
    const continueBtn = form.querySelector(".input-box.button input");
    const errorText = form.querySelector(".error-txt");

    form.onsubmit = (e) => {
        e.preventDefault(); // Preventing form from submitting
    };

    if (continueBtn) {
        continueBtn.onclick = () => {
            // Ajax request
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/login.php", true);

            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if (data.trim() === "success") {
                            window.location.href = "dashboard.php";
                        } else {
                            errorText.textContent = data;
                            errorText.style.display = "block";
                        }
                    }
                }
            };

            xhr.onerror = () => {
                console.error("Network error occurred");
            };

            let formData = new FormData(form);
            xhr.send(formData);
        };
    } else {
        console.error("Button element not found");
    }
});
