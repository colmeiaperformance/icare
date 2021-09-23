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
  jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > jQuery(".ica-wrapper").height()) {
      jQuery(".ica-wrapper").addClass("scrolling");
    } else {
      jQuery(".ica-wrapper").removeClass("scrolling");
    }
  });
});
