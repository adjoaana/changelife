const body = document.querySelector(".body");
const header = document.querySelector(".header");
const headerLogo = document.querySelector(".header__logo");
const headerToggle = document.querySelector(".header__menu__toggle");
const open = document.querySelector(".open");
const overlay = document.querySelector(".overlay");
const fadeElems = document.querySelectorAll(".has-fade");
const noscroll = document.querySelector(".noscroll");


headerToggle.addEventListener("click", function (){
    if(header.classList.contains("open")){
        header.classList.remove("open");
        body.classList.remove("noscroll")
        fadeElems.forEach(function (element){
            element.classList.add("fade-out");
            element.classList.remove("fade-in");
        })
       
    }
    else{
        header.classList.add("open");
        body.classList.add("noscroll");
        fadeElems.forEach(function (element){
            element.classList.remove("fade-out");
            element.classList.add("fade-in");
        })
       
    }
})