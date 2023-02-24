//GLOBAL VARIABLES

const body = document.querySelector('body'),
sidebars = body.getElementsByClassName('nav'),
sidebar_left=document.getElementById("sidebar_left"),
sidebar_right=document.getElementById("sidebar_right")
toggle = body.querySelector(".toggle"),
searchBtn = body.querySelector(".search-box"),
modeSwitch = body.querySelector(".toggle-switch"),
modeText = body.querySelector(".mode-text");


//FUNCTIONS











//EVENT LISTENERS

toggle.addEventListener("click", () => {
  sidebar_left.classList.toggle("close");
  alert("soemthing");
});
searchBtn.addEventListener("click", () => {
    sidebar_left.classList.remove("close");
});


toggle.addEventListener("click", () => {
  sidebar_right.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
    sidebar_right.classList.remove("close");
});


modeSwitch.addEventListener("click", () => {

  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } 
  else {
    modeText.innerText = "Dark mode";

  }
});
map.on('click',onMapClick2());

Map.addEventListener('click',()=>{

  onMapClick2(e);
})


