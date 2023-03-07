//GLOBAL VARIABLES
//alert("Page Start");

const body = document.querySelector('body'),
sidebars = body.getElementsByClassName('nav'),
toggle = body.querySelector(".toggle"),
//buttons
searchBtn_name = document.getElementById("search_by_name"),
searchBtn_item = document.getElementById("search_by_item_category"),
user_profile = document.getElementById("menu_button_1"),
Analytics = document.getElementById("menu_button_2"),
Notifications = document.getElementById("menu_button_3"),
History_1 = document.getElementById("menu_button_4"),
Likes = document.getElementById("menu_button_5"),
Points_Wallet = document.getElementById("menu_button_6"),
Log_out_btn = document.getElementById("r_s_logout_button"),


settings = document.getElementById("settings")
modeSwitch = document.getElementById("toggle_switch_1"),
modeText = body.querySelector(".mode-text");

const toggle1=document.getElementById("toggle_header_right"),
toggle2=document.getElementById("toggle_header_right");


//FUNCTIONS




//EVENT LISTENERS




searchBtn_name.addEventListener("click", () => {
  alert('something');
});
searchBtn_item.addEventListener("click", () => {
  alert('something else');
});
user_profile.addEventListener("click", () => {
  alert('user_profile');
});
Notifications.addEventListener("click", () => {
  alert('Notifications');
});
Analytics.addEventListener("click", () => {
  alert('Analytics');
});
History_1.addEventListener("click", () => {
  alert('History');
});
Likes.addEventListener("click", () => {
  alert('Likes');
});

Points_Wallet.addEventListener("click", () => {
  alert('Points Wallet');
});

Log_out_btn.addEventListener("click", () => {
  alert('Log out');
});







//alert(" Page Loaded");
