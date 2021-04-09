$(document).ready(function() {
   $('.header_burger').click(function() {
       $('.header_burger').toggleClass('open_menu');
       $('.menu').toggleClass('open_menu');
   });
   $('.slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2
});
});

window.onscroll = function () {
    var header = document.getElementById('header');
    if (window.scrollY > 25)
        header.classList.add('header_fixed');
    else
        header.classList.remove('header_fixed');
}

