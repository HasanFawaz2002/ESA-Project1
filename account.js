let loginBtn = document.getElementById("login");
let signupBtn = document.getElementById("sinup");

let middle = document.getElementById("middle");
let right = document.getElementById("right");

loginBtn.addEventListener("click",()=>{
    middle.classList.add("animation1");
    setTimeout(()=>{
        middle.style.display = "none"
    },300)
    setTimeout(()=>{
        right.style.display = "block";
        right.classList.add("animation2");
    },300)
    setTimeout(()=>{
        middle.classList.remove("animation1")
        right.classList.remove("animation2")
    },500)
});

signupBtn.addEventListener("click",()=>{
    right.classList.add("animation1");
    setTimeout(()=>{
        right.style.display = "none"
    },300)
    setTimeout(()=>{
        middle.style.display = "block";
        middle.classList.add("animation2");
    },300);
    setTimeout(()=>{
        middle.classList.remove("animation2")
        right.classList.remove("animation1")
    },500);
})