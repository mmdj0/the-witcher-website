/*var sup=document.getElementById("signup")
var sin=document.getElementById("signin")
var movbtn=document.getElementById("btn")

function ssignin(){
    //sup.style.left= "-600"
    //sin.style.left= "50"
    movbtn.style.left= "110"
}*/

const btn=document.getElementById("sup-button")
const card=document.getElementById("registration-box")

btn.addEventListener("click",flipCard)

function flipCard(){
    btn.style.backgroundColor="06113C"
    btn.style.color="#fffff"
    card.classList.toggle("flipCard")
}