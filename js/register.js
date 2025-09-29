document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        const username = document.getElementById("username").value.trim();
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        
        // Email pattern
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        // Password must be at least 6 characters
        const passwordPattern = /.{6,}/;

        if (username === "" || name === "" || email === "" || password === "") {
            alert("All fields are required!");
            event.preventDefault();
            return;
        }

        if (!emailPattern.test(email)) {
            alert("Enter a valid email address!");
            event.preventDefault();
            return;
        }

        if (!passwordPattern.test(password)) {
            alert("Password must be at least 6 characters long.");
            event.preventDefault();
            return;
        }
    });
});
