console.log('Hello, world!');
/*
document.readyState(function () {
  let panelOne = $('.form-panel.two').height(),
    panelTwo = $('.form-panel.two')[0].scrollHeight;

  $('.form-panel.two').not('.form-panel.two.active').addEventListener('click', (e) => {
    e.preventDefault();

    document.getElementByClassName("form-toggle").classList.add("visible");
    $('.form-panel.one').classList.add("hidden");
    $('.form-panel.two').classList.add("active");
    document.getElementByClassName("form").animate({
      'height': panelTwo
    }, 200);
  });

  document.getElementByClassName("form-toggle").addEventListener('click', (e) => {
    e.preventDefault();
    this.classList.remove("visible");
    $('.form-panel.one').classList.remove("hidden");
    $('.form-panel.two').classList.remove("active");
    document.getElementByClassName("form").animate({
      'height': panelOne
    }, 200);
  });
});
*/
document.querySelector(document).readyState(function() {

  var panelOne = document.querySelector('.form-panel.two').height(),
      panelTwo = document.querySelector('.form-panel.two')[0].scrollHeight;

              document.querySelector('.form-panel.two').not('.form-panel.two.active').addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector('.form-toggle').classList.add('visible');
                    document.querySelector('.form-panel.one').classList.add('hidden');
                    document.querySelector('.form-panel.two').classList.add('active');
                    document.querySelector('.form').animate({
                      'height': panelTwo
                    }, 200);
              });

              document.querySelector('.form-toggle').addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this).classList.remove('visible');
                    document.querySelector('.form-panel.one').classList.remove('hidden');
                    document.querySelector('.form-panel.two').classList.remove('active');
                    document.querySelector('.form').animate({
                      'height': panelOne
                    }, 200);
              });
});