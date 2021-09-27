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
});

//Menu scroll

// jQuery(document).ready(function () {
//   jQuery(window).bind("scroll", function () {
//     var navHeight = $(window).height() - 60;
//     if (jQuery(window).scrollTop() > navHeight) {
//       jQuery("#navbar").addClass("scrolling");
//     } else {
//       jQuery("#navbar").removeClass("scrolling");
//     }
//   });
// });

jQuery(document).ready(function () {
  jQuery(window).scroll(function (e) {
    jQuery("#navbar")[
      jQuery(window).scrollTop() >= 150 ? "addClass" : "removeClass"
    ]("scrolling");

    var value = jQuery(this).scrollTop();
    if (value > 50) jQuery(".logo").attr("src", logoColorido);
    else jQuery(".logo").attr("src", logoBranco);


  });
});
