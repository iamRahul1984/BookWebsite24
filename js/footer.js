document.addEventListener("DOMContentLoaded", function () {
    let footerPath = "../html/footer.html"; // Absolute path from root
    fetch(footerPath)
        .then(response => response.text())
        .then(data => {
            document.body.insertAdjacentHTML("beforeend", data);
        })
        .catch(error => console.error("Error loading footer:", error));
});
