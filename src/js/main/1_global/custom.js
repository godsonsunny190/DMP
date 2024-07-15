$(document).ready(function () {
  let i;
  // set the image-map width and height to match the img size
  $("#image-map").css({
    width: $("#image-map img").width(),
    height: $("#image-map img").height(),
  });

  //tooltip direction
  var tooltipDirection;

  for (i = 0; i < $(".pin").length; i++) {
    // set tooltip direction type - up or down
    if ($(".pin").eq(i).hasClass("pin-down")) {
      tooltipDirection = "tooltip-down";
    } else {
      tooltipDirection = "tooltip-up";
    }

    // append the tooltip
    $("#image-map").append(
      "<div style='left:" +
        $(".pin").eq(i).data("xpos") +
        "px;top:" +
        $(".pin").eq(i).data("ypos") +
        "px' class='" +
        tooltipDirection +
        "'>\
      <div class='tooltip'>" +
        $(".pin").eq(i).html() +
        "</div>\
      </div>"
    );
  }

  // show/hide the tooltip
  $(".tooltip-up, .tooltip-down")
    .mouseenter(function () {
      $(this).children(".tooltip").fadeIn(100);
      $(this).children(".tooltip").opacity(1);
    })
    .mouseleave(function () {
      $(this).children(".tooltip").fadeOut(100);
      $(this).children(".tooltip").opacity(0);
    });
});
///////////////////////////////////
$(window).on("scroll", function () {
  var scrollPos = $(window).scrollTop();
  var winHeight = $(window).height();
  var docHeight = $(document).height();
  var perc = (100 * scrollPos) / (docHeight - winHeight);
  $("#indicator").height(perc + "%");
});

////////////////////////////////////////////Loadmore//////////////////////////////////////

$(document).ready(function () {
  $(".content").slice(0, 3).show();
  $("#loadMore").on("click", function (e) {
    e.preventDefault();
    $(".content:hidden").slice(0, 1).slideDown();
    if ($(".content:hidden").length == 0) {
      $("#loadMore").css("visibility", "hidden");
    }
  });
});

////////////////////////////////////////////Nav Menu//////////////////////////////////////

let $hamburger = $(".hamburger");
$hamburger.on("click", function (e) {
  $(this).parent().toggleClass("open");
  //hamburgerMotion.reversed(!hamburgerMotion.reversed());
});
let hamburgerMotion = gsap.timeline({ paused: true });
gsap.set(".navigation li", {
  y: -50,
  autoAlpha: 0,
});
gsap.set(".menu__item", {
  autoAlpha: 0,
  visibility: "hidden",
});

hamburgerMotion
  .to(".menu__item", 0.3, {
    autoAlpha: 1,
    visibility: "visible",
  })
  .to(
    ".navigation li",
    0.3,
    {
      y: 0,
      autoAlpha: 1,
      stagger: 0.09,
    },
    "-=0.3"
  );

$(".menuOpen").on("click", function () {
  hamburgerMotion.play();
  $("body").addClass("overflow-hidden");
});
$(".closeMenu").on("click", function (e) {
  hamburgerMotion.reverse();
  $("body").removeClass("overflow-hidden");
});

////////////////////////////////////////////////////////

////////////////////////////////Scroll Magic//////////////////////////////

function animateFrom(elem, direction) {
  direction = direction || 1;
  var x = 0,
    y = direction * 100;
  if (elem.classList.contains("gs_reveal_fromLeft")) {
    x = -100;
    y = 0;
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
    x = 100;
    y = 0;
  }
  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  elem.style.opacity = "0";
  gsap.fromTo(
    elem,
    {
      x: x,
      y: y,
      autoAlpha: 0,
    },
    {
      duration: 1.25,
      x: 0,
      y: 0,
      autoAlpha: 1,
      ease: "expo",
      overwrite: "auto",
    }
  );
}

function hide(elem) {
  gsap.set(elem, {
    autoAlpha: 0,
  });
}

document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
    hide(elem); // assure that the element is hidden when scrolled into view

    ScrollTrigger.create({
      trigger: elem,
      onEnter: function () {
        animateFrom(elem);
      },
      onEnterBack: function () {
        animateFrom(elem, -1);
      },
      onLeave: function () {
        hide(elem);
      }, // assure that the element is hidden when scrolled into view
    });
  });
});
////////////////////////////////////////////////////////////
$(document).ready(function () {
  /*Dropdown Menu*/
  $(".header__menu-wrapper--dropdown").click(function () {
    $(this).attr("tabindex", 1).focus();
    $(this).toggleClass("active");
    $(this).find(".dropdown-menu").slideToggle(500);
  });
  $(".header__menu-wrapper--dropdown").focusout(function () {
    $(this).removeClass("active");
    $(this).find(".dropdown-menu").slideUp(300);
  });
  $(".header__menu-wrapper--dropdown .dropdown-menu li").click(function () {
    $(this)
      .parents(".header__menu-wrapper--dropdown")
      .find("span")
      .text($(this).text());
    $(this)
      .parents(".header__menu-wrapper--dropdown")
      .find("input")
      .attr("value", $(this).attr("id"));
  });
  /*End Dropdown Menu*/

  $(".dropdown-menu li").click(function () {
    var input =
        "<strong>" +
        $(this).parents(".header__menu-wrapper--dropdown").find("input").val() +
        "</strong>",
      msg = '<span class="msg">Hidden input value: ';
    $(".msg").html(msg + input + "</span>");
  });
});

///////////////////////////Swiper Package////////////////////////////////
$(document).ready(function () {
  jQuery(".my-masonry-grid").masonryGrid({
    columns: 2,
  });
  ////////////////////////////////Swiper Package////////////////////////////////////////
  var swiper = new Swiper(".packageSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
      800: {
        slidesPerView: 2,
      },
      310: {
        slidesPerView: 1,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      type: "fraction",
      formatFractionCurrent: function (number) {
        return ("0" + number).slice(-2);
      },
      formatFractionTotal: function (number) {
        return ("0" + number).slice(-2);
      },
      renderFraction: function (currentClass, totalClass) {
        return (
          '<span class="' +
          currentClass +
          '"></span>' +
          " / " +
          '<span class="' +
          totalClass +
          '"></span>'
        );
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  ///////////////////////////// nearByMobSwiper//////////////////////////////////////////
  var swiper = new Swiper(".nearByMobSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
      800: {
        slidesPerView: 2,
      },
      310: {
        slidesPerView: 1,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      type: "fraction",
      formatFractionCurrent: function (number) {
        return ("0" + number).slice(-2);
      },
      formatFractionTotal: function (number) {
        return ("0" + number).slice(-2);
      },
      renderFraction: function (currentClass, totalClass) {
        return (
          '<span class="' +
          currentClass +
          '"></span>' +
          " / " +
          '<span class="' +
          totalClass +
          '"></span>'
        );
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // ///////////////////////////////////
  // Dining main dishes swiper
  // ///////////////////////////////////

  var swiper = new Swiper(".swiperDishes", {
    slidesPerView: 1,
    spaceBetween: 500,
    loop: true,
    centeredSlides: false,
    
   
    breakpoints: {
      1200: {
        slidesPerView: 1,
      },
      800: {
        slidesPerView: 1,
      },
      320: {
        slidesPerView: 1,      
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});


///////////////////////////////////////////////////////////////////

var path = document.querySelector("#Path_23430");

var pathLength = path.getTotalLength();

path.style.strokeDasharray = pathLength;

path.style.strokeDashoffset = pathLength;
path.getBoundingClientRect();

window.addEventListener("scroll", function (e) {
  var scrollPercentage =
    (document.documentElement.scrollTop + document.body.scrollTop) /
    (document.documentElement.scrollHeight -
      document.documentElement.clientHeight);

  var drawLength = pathLength * scrollPercentage;

  path.style.strokeDashoffset = pathLength - drawLength;

  if (scrollPercentage >= 0.99) {
    path.style.strokeDasharray = "none";
  } else {
    path.style.strokeDasharray = pathLength;
  }
});
///////////////////////////////////////////////

//////////////////////////////phone Code///////////////////////////////////////////
// $(document).ready(function () {
//   const phoneInputField = document.querySelector("#phone");

//   const phoneInput = window.intlTelInput(phoneInputField, {
//     utilsScript:
//       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
//     initialCountry: "ae",
//     separateDialCode: true,
//   });
// });

///////////////////////////////////////////////////////////////////////////////////////

function detect_active() {
  // get active
  var get_active = $("#gallery-slide .gallery_item:first-child").data("class");
  $("#dp-dots li").removeClass("active");
  $("#dp-dots li[data-class=" + get_active + "]").addClass("active");
  $(".swiper-pagination-current1").text("0"+get_active);  
}
$(".swiper-button-next-unique").click(function () {
  var total = $(".gallery_item").length;
  $("#gallery-slide .gallery_item:first-child")
    .hide()
    .appendTo("#gallery-slide")
    .fadeIn();
  $.each($(".gallery_item"), function (index, dp_item) {
    $(dp_item).attr("data-position", index + 1);
  });
  detect_active();
});

$(".swiper-button-prev-unique").click(function () {
  var total = $(".gallery_item").length;
  $("#gallery-slide .gallery_item:last-child")
    .hide()
    .prependTo("#gallery-slide")
    .fadeIn();
  $.each($(".gallery_item"), function (index, dp_item) {
    $(dp_item).attr("data-position", index + 1);
  });

  detect_active();
});

$("#dp-dots li").click(function () {
  $("#dp-dots li").removeClass("active");
  $(this).addClass("active");
  var get_slide = $(this).attr("data-class");
  console.log(get_slide);
  $("#gallery-slide .gallery_item[data-class=" + get_slide + "]")
    .hide()
    .prependTo("#gallery-slide")
    .fadeIn();
  $.each($(".gallery_item"), function (index, dp_item) {
    $(dp_item).attr("data-position", index + 1);
  });
});

$("body").on(
  "click",
  "#gallery-slide .gallery_item:not(:first-child)",
  function () {
    var get_slide = $(this).attr("data-class");
    console.log(get_slide);
    $("#gallery-slide .gallery_item[data-class=" + get_slide + "]")
      .hide()
      .prependTo("#gallery-slide")
      .fadeIn();
    $.each($(".gallery_item"), function (index, dp_item) {
      $(dp_item).attr("data-position", index + 1);
    });

    detect_active();
  }
);

