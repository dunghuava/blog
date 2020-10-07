$('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots:false,
    fade: true,
    prevArrow: false,
    nextArrow: false,
    cssEase: 'linear'
  });
  $('.slick-feedback').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots:false,
    prevArrow: false,
    nextArrow: false,
  });
  $('.slick-cus').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow:"<span class='btn-arrow btn-prev fa fa-angle-left'></span>",
    nextArrow:"<span class='btn-arrow btn-next fa fa-angle-right'></span>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

$('.item-question').click(function (e) { 
    e.preventDefault();
    $(this).toggleClass('opened');
    if ($(this).hasClass('opened')){
      $(this).find('.q-btn').html('<span class="fa fa-angle-up"></span>');
    }else{
      $(this).find('.q-btn').html('<span class="fa fa-angle-down"></span>');
    }
});

$('.have-menu').hover(function () {
    // over
    $(this).find('.sub-menu').fadeIn();
  }, function () {
    // out
    $(this).find('.sub-menu').fadeOut('fast');
  }
);

window.onscroll = function() {myFunction()};
var navbar = document.getElementById("over-section");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}