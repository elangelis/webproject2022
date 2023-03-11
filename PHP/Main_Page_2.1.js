//GLOBAL VARIABLES
alert("Page Start");

const body = document.querySelector('body'),
  sidebars = body.getElementsByClassName('nav'),
  toggle = body.querySelector(".toggle");
//buttons
const searchBtn_name = document.getElementById("search_by_name"),
  searchBtn_item = document.getElementById("search_by_item_category"),
  user_profile = document.getElementById("menu_button_1"),
  Analytics = document.getElementById("menu_button_2"),
  Notifications = document.getElementById("menu_button_3"),
  History_1 = document.getElementById("menu_button_4"),
  Likes = document.getElementById("menu_button_5"),
  Points_Wallet = document.getElementById("menu_button_6"),
  Log_out_btn = document.getElementById("r_s_logout_button");

const settings = document.getElementById("settings"),
  PopUpSettings = document.getElementById("PopUpSettings"),
  PopUpFilters = document.getElementById("PopUpFilters"),
  modeSwitch = document.getElementById("toggle_switch_1"),
  modeText = body.querySelector(".mode-text");

const toggle1 = document.getElementById("toggle_header_right"),
  toggle2 = document.getElementById("toggle_header_right");


//FUNCTIONS




//EVENT LISTENERS




searchBtn_name.addEventListener("click", () => {
  if (PopUpFilters.style.display == "block") {
    PopUpFilters.style.display = "none";
    closeTab();
  } else {
    PopUpFilters.style.display = "block";
    PopUpSettings.style.display = "none";
  }
  alert('something');
});
searchBtn_item.addEventListener("click", () => {
  if (PopUpFilters.style.display == "block") {
    PopUpFilters.style.display = "none";
    closeTab();
  } else {
    PopUpFilters.style.display = "block";
    PopUpSettings.style.display = "none";
  }
  alert('something else');
});

user_profile.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_1");
  }
  alert('user_profile');
});
Analytics.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_2");
  }
  alert('Analytics');
});
Notifications.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_3");
  }
  alert('Notifications');
});
History_1.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_4");
  }
  alert('History');
});
Likes.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_5");
  }
  alert('Likes');
});
Points_Wallet.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
    SelectTab("Tab_6");
  }
  alert('Points Wallet');
});

Log_out_btn.addEventListener("click", () => {
  if (PopUpSettings.style.display == "block") {
    PopUpSettings.style.display = "none";
    closeTab();
  } else {
    PopUpSettings.style.display = "block";
    PopUpFilters.style.display = "none";
  }
  alert('Log out');
});

function openTab(tabName) {
  //visible true 
  document.getElementById(tabName).style.visibility = "visible";
}

function closeTab(){
  var i,tabcontent;
  //visible false for all menu
  tabcontent = document.getElementsByClassName("tabcontent");
  for(i=0;i<tabcontent.length;i++){
    tabcontent[i].style.visibility="hidden";
  }
}

function SelectTab(tabName){
  closeTab();
  openTab(tabName);
}


alert(" Page Loaded");
