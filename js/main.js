jQuery(document).ready(function () {
  //Banner header
  const swiper = new Swiper(".swiper-container", {
    grabCursor: true,
    effect: "fade",
    loop: true,
    loopFillGroupWithBlank: true,
    speed: 300,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
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
  const swiper2 = new Swiper(".sec-itens .swiper-container", {
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

  //Slider logotipos
  const swiper3 = new Swiper(".swiperLogos", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
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


//Mapa
jQuery("#vmap").vectorMap({
  map: "world_en",
  backgroundColor: "transparent",
  borderColor: "#E8E8E8",
  borderOpacity: 0.7,
  borderWidth: 0,
  color: "#E8E8E8",
  hoverColor: "#006491",
  hoverOpacity: 0.7,
  normalizeFunction: "linear",
  scaleColors: ["#F68A1B", "#EA286C"],
  selectedColor: "#555555",
  enableZoom: true,
  showTooltip: false,
  values: sample_data,
  normalizeFunction: "polynomial",
});