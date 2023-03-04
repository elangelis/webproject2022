//GLOBAL VARIABLES

const body = document.querySelector('body'),
sidebars = body.getElementsByClassName('nav'),
toggle = body.querySelector(".toggle"),
searchBtn = body.querySelector(".search-box"),
modeSwitch = document.getElementById("toggle_switch_1"),
modeText = body.querySelector(".mode-text");

const toggle1=document.getElementById("toggle_header_right"),
toggle2=document.getElementById("toggle_header_left");

//FUNCTIONS




//EVENT LISTENERS


toggle2.addEventListener("click", () => {
  sidebar_left.classList.toggle("close");
  alert('something');
});
searchBtn.addEventListener("click", () => {
    sidebar_left.classList.remove("close");
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


