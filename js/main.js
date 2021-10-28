jQuery(document).ready(function () {
  //Banner header
  const swiper = new Swiper(".swiper-container", {
    grabCursor: true,
    loop: true,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
  });

  //Script testimonial
  const swiper2 = new Swiper(".ica-sec.sec-testimony .swiper-container", {
    grabCursor: true,
    loop: true,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
  });

   var swiper3 = new Swiper(".sec-itens", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
});


//Menu scrolling class
jQuery(document).ready(function () {
  jQuery("#navbar")[
    jQuery(window).scrollTop() >= 150 ? "addClass" : "removeClass"
  ]("scrolling");

  var value = jQuery(this).scrollTop();
  if (value > 50) jQuery(".logo").attr("src", logoColorido);
  else jQuery(".logo").attr("src", logoBranco);

  jQuery(window).scroll(function (e) {
    jQuery("#navbar")[
      jQuery(window).scrollTop() >= 150 ? "addClass" : "removeClass"
    ]("scrolling");

    var value = jQuery(this).scrollTop();
    if (value > 50) jQuery(".logo").attr("src", logoColorido);
    else jQuery(".logo").attr("src", logoBranco);
  });
});

//White menu scrolling class
jQuery(document).ready(function () {
  jQuery(".navbar-white")[
    jQuery(window).scrollTop() >= 150 ? "addClass" : "removeClass"
  ]("scrolling");

  jQuery(window).scroll(function (e) {
    jQuery(".navbar-white")[
      jQuery(window).scrollTop() >= 150 ? "addClass" : "removeClass"
    ]("scrolling");

  });
});