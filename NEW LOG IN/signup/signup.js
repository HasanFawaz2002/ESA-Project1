function validateForm(event) {
    event.preventDefault(); 
    

    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let age = document.getElementById("age").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    
   
    let alertContainer = document.getElementById("alert-container");
    alertContainer.innerHTML = "";
    

    let hasErrors = false;
    
    if (fname === "" || /\d/.test(fname)) {
        let alertElement = createAlert("First name is required and must not contain numbers.");
        alertContainer.appendChild(alertElement);
        hasErrors = true;
    }
    
  
    if (lname === "" || /\d/.test(lname)) {
        let alertElement = createAlert("Last name is required and must not contain numbers.");
        alertContainer.appendChild(alertElement);
        hasErrors = true;
    }
    
  
    if (age === "" || password === "" || email === "") {
        let alertElement = createAlert("Please fill in all fields.");
        alertContainer.appendChild(alertElement);
        hasErrors = true;
    }
    
    if (!hasErrors) {
       
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
        }, 300); 
    }, 2000); 
   
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



document.getElementById("signupbtn").addEventListener("click", validateForm);