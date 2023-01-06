console.log('Hello, world!asdasdas');

alert("asidjapdjsa");

var panelOne = document.querySelector('.form-panel.one');
var panelTwo = document.querySelector('.form-panel.two');

//register menu click

document.querySelector('.form-panel.two').addEventListener('click', function() {
  document.querySelector('.form-toggle').classList.add('visible');
  document.querySelector('.form-panel.one').classList.add('hidden');
  document.querySelector('.form-panel.two').classList.add('active');
});
//login menu click

document.querySelector('.form-toggle').addEventListener('click', function(e) {
  document.querySelector('.form-toggle').classList.remove('visible');
  document.querySelector('.form-panel.one').classList.remove('hidden');
  document.querySelector('.form-panel.two').classList.remove('active');
});

/*
document.querySelector().addEventListener('click',function(){
  
});
*/

//alerts
/*
alert('You have already Registered!');
alert('Incorrect Password!');
alert('Username does not exist. Do you want to Register first?');
alert('Password and Confirmation Password do not match!');
alert('Username already registered! Please try again!');
alert('Password already taken! Please try again');
alert('Email already registered! Please try again!');
*/