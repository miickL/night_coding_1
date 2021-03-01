$(".alert").alert();

$("#button").click(function() {
    $('.transform').toggleClass('transform-active');
  });

$("#img-card").click(function(){
    $('.transform').toggleClass('transform-active')
}



)



function changeTop(word){
    const loginNav = document.getElementById("nav-login");
    const registerNav = document.getElementById("nav-register");
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");
    let x = word.id;
    if(x=="nav-register"){
        loginNav.classList.remove("disabled");
        loginNav.classList.add("login");
        registerNav.classList.remove("login");
        registerNav.classList.add("disabled");
        loginForm.classList.add("show-d");
        registerForm.classList.remove("show-d");
        
    } else {
        registerNav.classList.remove("disabled");
        registerNav.classList.add("login");
        loginNav.classList.remove("login");
        loginNav.classList.add("disabled");
        registerForm.classList.add("show-d");
        loginForm.classList.remove("show-d");
        
    }
}

const navLog = document.getElementById("login-nav");
const commLog = document.getElementById("common");
const tokLog = document.getElementById("token");



// console.log(navLog);

let x = true;
navLog.addEventListener("click", () => {
    navLog.children[1].children[0].classList.toggle("active");
    navLog.children[0].children[0].classList.toggle("active");
    // console.log(navLog);
    if (x) {
        
        tokLog.classList.remove("show-d");
        commLog.classList.add("show-d");
        x=false;
    } else {
        tokLog.classList.add("show-d");
        commLog.classList.remove("show-d");
        x=true;
    }

    console.log(navLog.children);
    // document.getElementById("common").style.display = "none";
} )