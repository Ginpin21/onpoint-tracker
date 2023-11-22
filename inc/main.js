const navListElements = [...document.getElementsByClassName("nav-link")];
const navList = document.querySelector("#nav-list");
const receptionDashElements = [...document.getElementsByClassName("side-bar-link")]
const navBtn = document.querySelector(".nav-btn");
navListElements.forEach((child)=>{
    if (window.location.href===child.href){
        child.classList.toggle("nav-link");
        child.classList.toggle("nav-active-link");
    }
    else if (window.location.pathname.split("/")[2] === ""){
        if(child.textContent==="Home"){
            child.classList.toggle("nav-link");
            child.classList.toggle("nav-active-link");
        }
    }
})