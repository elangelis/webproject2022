
//FUNCTIONS




//EVENT LISTENERS


//register menu click event
document.querySelector('.form-panel.two').addEventListener('click', function() {
  document.querySelector('.form-toggle').classList.add('visible');
  document.querySelector('.form-panel.one').classList.add('hidden');
  document.querySelector('.form-panel.two').classList.add('active');
});

//log_in menu click event
document.querySelector('.form-toggle').addEventListener('click', function(e) {
  document.querySelector('.form-toggle').classList.remove('visible');
  document.querySelector('.form-panel.one').classList.remove('hidden');
  document.querySelector('.form-panel.two').classList.remove('active');
});



//GLOBAL VARIABLES



var panelOne = document.querySelector('.form-panel.one');
var panelTwo = document.querySelector('.form-panel.two');
