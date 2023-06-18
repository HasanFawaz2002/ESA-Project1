function validateForm(event) {
    event.preventDefault(); 

    let email = document.getElementsByName("email")[0].value;
    let password = document.getElementsByName("password")[0].value;

    let alertContainer = document.getElementById("alert-container");
    alertContainer.innerHTML = "";

    let hasErrors = false;

    if (email === "") {
        let alertElement = createAlert("Email is required.");
        alertContainer.appendChild(alertElement);
        hasErrors = true;
    }

    if (password === "") {
        let alertElement = createAlert("Password is required.");
        alertContainer.appendChild(alertElement);
        hasErrors = true;
    }

    if (!hasErrors) {
        // Perform login logic here
    }
}

function createAlert(message) {
    let alertElement = document.createElement("div");
    alertElement.className = "alert alert-danger";
    alertElement.textContent = message;

    setTimeout(() => {
        alertElement.style.transition = "opacity 0.5s";
        alertElement.style.opacity = "0";
        setTimeout(() => {
            alertElement.remove();
        }, 500);
    }, 3000);

   
    let screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    let containerWidth = Math.min(screenWidth - 40, 400);
    let containerLeft = (screenWidth - containerWidth) / 2;

    let alertContainer = document.getElementById("alert-container");
    alertContainer.style.position = "fixed";
    alertContainer.style.top = "10px";
    alertContainer.style.left = containerLeft + "px";
    alertContainer.style.width = containerWidth + "px";
    alertContainer.appendChild(alertElement);

    return alertElement;
}

document.getElementById("loginbtn").addEventListener("click", validateForm);
