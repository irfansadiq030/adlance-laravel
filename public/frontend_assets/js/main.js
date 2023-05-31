//===== CURSOR
var cursor = {
  delay: 6,
  _x: 0,
  _y: 0,
  endX: window.innerWidth / 2,
  endY: window.innerHeight / 2,
  cursorVisible: true,
  cursorEnlarged: false,
  $dot: document.querySelector(".cursor-dot"),
  $outline: document.querySelector(".cursor-dot-outline"),
  init: function () {
    // Set up element sizes
    this.dotSize = this.$dot.offsetWidth;
    this.outlineSize = this.$outline.offsetWidth;

    this.setupEventListeners();
    this.animateDotOutline();
  },
  setupEventListeners: function () {
    var self = this;

    // Anchor hovering
    document.querySelectorAll("a").forEach(function (el) {
      el.addEventListener("mouseover", function () {
        self.cursorEnlarged = true;
        self.toggleCursorSize();
      });
      el.addEventListener("mouseout", function () {
        self.cursorEnlarged = false;
        self.toggleCursorSize();
      });
    });

    // Click events
    document.addEventListener("mousedown", function () {
      self.cursorEnlarged = true;
      self.toggleCursorSize();
    });
    document.addEventListener("mouseup", function () {
      self.cursorEnlarged = false;
      self.toggleCursorSize();
    });

    document.addEventListener("mousemove", function (e) {
      // Show the cursor
      self.cursorVisible = true;
      self.toggleCursorVisibility();

      // Position the dot
      self.endX = e.pageX;
      self.endY = e.pageY;
      self.$dot.style.top = self.endY + "px";
      self.$dot.style.left = self.endX + "px";
    });

    // Hide/show cursor
    document.addEventListener("mouseenter", function (e) {
      self.cursorVisible = true;
      self.toggleCursorVisibility();
      self.$dot.style.opacity = 1;
      self.$outline.style.opacity = 1;
    });

    document.addEventListener("mouseleave", function (e) {
      self.cursorVisible = true;
      self.toggleCursorVisibility();
      self.$dot.style.opacity = 0;
      self.$outline.style.opacity = 0;
    });
  },

  animateDotOutline: function () {
    var self = this;

    self._x += (self.endX - self._x) / self.delay;
    self._y += (self.endY - self._y) / self.delay;
    self.$outline.style.top = self._y + "px";
    self.$outline.style.left = self._x + "px";

    requestAnimationFrame(this.animateDotOutline.bind(self));
  },

  toggleCursorSize: function () {
    var self = this;

    if (self.cursorEnlarged) {
      self.$dot.style.transform = "translate(-50%, -50%) scale(0.75)";
      self.$outline.style.transform = "translate(-50%, -50%) scale(2.5)";
    } else {
      self.$dot.style.transform = "translate(-50%, -50%) scale(1)";
      self.$outline.style.transform = "translate(-50%, -50%) scale(1)";
    }
  },

  toggleCursorVisibility: function () {
    var self = this;

    if (self.cursorVisible) {
      self.$dot.style.opacity = 1;
      self.$outline.style.opacity = 1;
    } else {
      self.$dot.style.opacity = 0;
      self.$outline.style.opacity = 0;
    }
  },
};
cursor.init();

//===== CURSOR END

//===== CLIENTS SLIDER - START
const clientsSlider = new Swiper(".swiper", {
  centeredSlides: true,
  loop: true,
  speed: 1100,
  simulateTouch: true,
  //pagination
  pagination: {
    el: ".custom_pagination",
    clickable: true,
    initialSlide: 1,
    // bulletElement: '.pagination_dots',
    bulletClass: "pagination_dots",
    bulletActiveClass: "active_pagination_dot",
    renderBullet: function (index, className) {
      return `<div class="pagination_dots"></div>`;
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: ".right_arrow",
    prevEl: ".left_arrow",
  },
  autoplay: {
    delay: 1000,
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.6,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    // when window width is >= 700px
    700: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    // when window width is >= 850px
    850: {
      slidesPerView: 3.5,
      spaceBetween: 15,
    },
    // when window width is >= 640px
    1060: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    // when window width is >= 640px
    1360: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
    on: {
      init: function () {
        slide_index = document.getElementById("slide_index");
        slide_index.innerHTML = activeIndex;
      },
    },
  },
});

clientsSlider.on("slideChange", function () {
  slide_index = document.getElementById("slide_index");
  slide_index.innerHTML = clientsSlider.realIndex + 1;
});

var slides = document.querySelectorAll(".client_slide");

for (var i = 0; i < slides.length; i++) {
  slides[i].addEventListener("click", function () {
    clientsSlider.slideTo(Array.prototype.indexOf.call(slides, this));
  });
}

//===== CLIENTS SLIDER - END

//===== FOOTER NEWSLETTER SUBMIT BUTTON DROPDOWN
$("#newsletter_dropdown_btn").click(function (event) {
  event.preventDefault();
  $("#dropdown_options_container").toggleClass("d-none");
});

const selected_newsletter_purpose = (args) => {
  $("#newsletter_btn_txt").text(args);
  $("#dropdown_options_container").toggleClass("d-none");
  $("#newsletter_looking_for").val(args);
};

//===== PAGE SCROLLING EFFECT - START

$(document).ready(function () {
  $("#pagepiling").pagepiling({
    navigation: false,
    loop: false,
    // easing: "swing",
    scrollingSpeed: 700,
    // onLeave: function (index, nextIndex, direction) {
    //   if (index === 4 && direction === "down") {
    //     $(".side_header").fadeOut(700);
    //   } else {
    //     $(".side_header").fadeIn(700);
    //   }
    // },
  });
});

//===== PAGE SCROLLING EFFECT - END

//===== HAMBURGER CLICK Animation EFFECT - START

const ham = document.querySelector(".hamburger");
const menu = document.querySelector("#nav_container");
const links = document.querySelectorAll(".mobile_nav_links");

$("#nav_container").addClass("hide_nav_container");

const hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  menu.classList.toggle("hide_nav_container");
});

//===== HAMBURGER CLICK Animation EFFECT - END

//===== MOBILE NAVBAR Animation EFFECT - START

let tl = gsap.timeline({ paused: true });

tl.to(menu, {
  duration: 0.4,
  opacity: 1,
  minHeight: "275px",
  top: 70,
  // ease: "expo.inOut",
});
tl.from(
  links,
  {
    duration: 0.4,
    opacity: 0,
    y: -25,
    stagger: 0.2,
    // ease: "expo.inOut",
  },
  "-=0.5"
);

tl.reverse();

ham.addEventListener("click", () => {
  tl.reversed(!tl.reversed());
});

//===== MOBILE NAVBAR Animation EFFECT - END

//===== MOBILE FEATURED CAMPAIGNS SLIDER -START

const adlanceMobileFeaturedSlider = new Swiper(
  ".mobile_featured_campaigns_slider",
  {
    // init: true,
    // loop: true,
    initialSlide: 2,
    speed: 800,
    navigation: {
      nextEl: ".pre_btn_mobile_fc",
      prevEl: ".next_btn_mobile_fc",
    },
    // slidesPerView: 2.5, // or 'auto'
    // spaceBetween: 30,
    slidesPerView: "auto",
    centeredSlides: true,
    // scale: 1.5,
    effect: "coverflow", // 'cube', 'fade', 'coverflow',
    coverflowEffect: {
      rotate: 0, // Slide rotate in degrees
      stretch: 0, // Stretch space between slides (in px)
      depth: 170, // Depth offset in px (slides translate in Z axis)
      modifier: 1, // Effect multipler
      //   slideShadows: true, // Enables slides shadows
      scale: 1,
    },
    grabCursor: true,
    parallax: true,
    breakpoints: {
      500: {
        // slidesPerView: "auto",
        spaceBetween: 0,
        // scale:2.5
      },
      1400: {
        slidesPerView: 3.5,
        spaceBetween: 0,
      },
    },
    on: {
      transitionStart: function () {
        var activeIndex = this.activeIndex;
        var slides = this.slides;

        slides.forEach(function (slide, index) {
          if (index === activeIndex) {
            // slide.style.width = "250px";
            slide.style.opacity = "1";
            // console.log(slide)
          } else {
            // slide.style.width = "100%";
          }
        });
      },
    },
  }
);

adlanceMobileFeaturedSlider.init();

//===== MOBILE FEATURED CAMPAIGNS SLIDER -END

//===== MOBILE STORIES SLIDER -START

const storiesSwiper = new Swiper(".mobile_stories_slider", {
  centeredSlides: true,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 1000,
  },
  delay: 1000,
  //pagination
  pagination: {
    el: ".custom_pagination",
    clickable: true,
    // bulletElement: '.pagination_dots',
    bulletClass: "pagination_dots",
    bulletActiveClass: "active_pagination_dot",
    renderBullet: function (index, className) {
      return `<div class="pagination_dots"></div>`;
    },
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2.2,
      spaceBetween: 20,
    },
  },
});

storiesSwiper.on("slideChange", function () {
  storiesSlide_index = document.getElementById("storiesSlide_index");
  storiesSlide_index.innerHTML = storiesSwiper.realIndex + 1;
  // console.log(swiper.realIndex);
});

//===== MOBILE STORIES SLIDER -END

//===== STORIES MODAL/POPUP DESKTOP -START

$(".story_card").click(function () {
  const storyTitle = $(this).find(".story_title").text();
  const summary = $(this).find(".story_summary").text();
  const uploadedYear = $(this).find(".story_uploaded_year").text();
  const uploadedDate = $(this).find(".story_uploaded_date").text();
  const author = $(this).find(".story_author_name").text();
  const cover = $(this).find(".story_cover").attr("src");
  const storyReadMoreLink = $(this).find(".read_story_link").attr("href");

  displayStoryPopup(
    storyTitle,
    summary,
    uploadedYear,
    uploadedDate,
    author,
    cover,
    storyReadMoreLink
  );
});
// MOBILE STORIES POPUP

$(".mobile_stories_slide").click(function () {
  const storyTitle = $(this).find(".story_title").text();
  const summary = $(this).find(".story_summary").text();
  const uploadedYear = $(this).find(".story_uploaded_year").text();
  const uploadedDate = $(this).find(".story_uploaded_date").text();
  const author = $(this).find(".story_author_name").text();
  const cover = $(this).find(".story_cover").attr("src");
  const storyReadMoreLink = $(this).find(".read_story_link").attr("href");

  displayMobileStoryPopup(
    storyTitle,
    summary,
    uploadedYear,
    uploadedDate,
    author,
    cover,
    storyReadMoreLink
  );
});

//===== STORIES MODAL/POPUP -START

//===== CLIENTS SLIDES MODAL/POPUP -START
$(".client_slide").click(function () {
  const cardTitle = $(this).find(".card_title").text();
  const clientOverview = $(this).find(".client_overview").html();
  const clientSinceYear = $(this).find(".client_since_year").text();
  const clientCountry = $(this).find(".client_based_on").text();
  const clientWebsiteURL = $(this).find(".client_website").attr("href");
  const clientWebsiteText = $(this).find(".client_website").text();
  const clientType = $(this).find(".client_type").text();
  const clientPopupCover = $(this).find(".client_cover_img").attr("src");

  displayClientPopup(
    cardTitle,
    clientOverview,
    clientSinceYear,
    clientCountry,
    clientWebsiteText,
    clientType,
    clientPopupCover,
    clientWebsiteURL
  );
});

// Display CLIENT POPUP
const displayClientPopup = (
  title,
  overview,
  year,
  country,
  websiteText,
  type,
  clientPopupCover,
  clientWebsiteURL
) => {
  $(".popup_title").text(title);
  $(".popup_overview").html(overview);
  $(".popup_year").text(year);
  $(".popup_country").text(country);
  $(".web_link").text(websiteText);
  $(".web_link").attr("href", clientWebsiteURL);
  $(".clientPopupCoverImg").attr("src", clientPopupCover);

  $("#clients_slide_popup").nifty("show");
};

// Display STORIES POPUP DESKTOP
const displayStoryPopup = (
  storyTitle,
  summary,
  uploadedYear,
  fullDate,
  authorName,
  storyCover,
  readMoreStoryLink
) => {
  $(".popupStory_title").text(storyTitle);
  $(".popupStory_summary").text(summary);
  $(".adlance_post_year").text(uploadedYear);
  $(".popupStory_date").text(fullDate);
  $(".story_author").text(authorName);
  $(".story_popup_cover").attr("src", storyCover);
  $(".read_fullStory_popup").attr("href", readMoreStoryLink);

  $("#home_story_popup").nifty("show");
};

// Display STORIES POPUP MOBILE
const displayMobileStoryPopup = (
  storyTitle,
  summary,
  uploadedYear,
  fullDate,
  authorName,
  storyCover,
  readMoreStoryLink
) => {
  $(".popupStory_title").text(storyTitle);
  $(".popupStory_summary").text(summary);
  $(".adlance_post_year").text(uploadedYear);
  $(".popupStory_date").text(fullDate);
  $(".story_author").text(authorName);
  $(".story_popup_cover").attr("src", storyCover);
  $(".read_fullStory_popup").attr("href", readMoreStoryLink);

  $("#home_story_popup").nifty("show");
};

//===== MOBILE SERVICES SECTION - start

// Animation of services items

// let servicesItem = gsap.timeline({ paused: true });

// servicesItem.from(".service_title", {
//   duration: 0.7,
//   opacity: 0.6,
//   scale:0.8,
//   y:-10
// }).from(".mobileService_contentContainer p", {
//   duration: 0.7,
//   opacity: 0.8,
//   y: 20,
//   stagger:0.5
// });

// servicesItem.reverse();

$(".mobile_service_title").click(function () {
  $(this).addClass("mobileService_activeTitle");
  $(this)
    .siblings(".mobile_service_title")
    .removeClass("mobileService_activeTitle");
  $(this).siblings(".mobileService_contentContainer").stop().slideUp(700);
  $(this).next().stop().slideDown(700);
  // servicesItem.play();
});

//===== MOBILE SERVICES SECTION - end

//===== CONTACT US PAGE - Start

$(".form_step2").hide();

$("#form_nxt_btn, #step2").click(function (e) {
  e.preventDefault();
  step1Validation();
});

$("#form_prev_btn, #step1").click(function (e) {
  e.preventDefault();
  $(".form_steps").hide();
  $("#form_step1").fadeIn(1000);

  $(".step").toggleClass("active").fadeIn(1000);
});

// Sent Button text

let btnClicked = false;
$("#adlance_send_btn").click(function (e) {
  e.preventDefault();
  step2Validation();

  if (formValid) {
    sendEmail();
  } else {
    alert("Something is wrong!!");
  }
  // $(this).html(function (i, html) {
  //   return html === "Send"
  //     ? "Send"
  //     : " <span class='sent_txt'>Sent Successfully </span> <img style='width:20px; margin-left:10px;margin-bottom:5px' src='assets/images/sent-check.png'/>";
  // });
});

//===== CONTACT US PAGE - Validation

const step1Validation = () => {
  var formValid = true;
  var userName = $("#userName").val();
  var userEmail = $("#userEmail").val();
  var companyName = $("#companyName").val();

  if (userName === "") {
    $(".nameError").removeClass("d-none");
    formValid = false;
  } else {
    $(".nameError").addClass("d-none");
    formValid = true;
  }

  // email
  if (userEmail === "") {
    $(".emailError").removeClass("d-none");
    formValid = false;
  } else {
    $(".emailError").addClass("d-none");
    formValid = false;
  }

  if (userName !== "" && userEmail !== "") {
    $(".step").toggleClass("active").fadeIn(1000);
    $(".form_steps").hide();
    $("#form_step2").fadeIn(1000);
  }
};

const step2Validation = () => {
  var userMsg = $("#userMsg").val();

  if (userMsg === "") {
    $(".msgError").removeClass("d-none");
    formValid = false;
  } else {
    $(".msgError").addClass("d-none");
    formValid = true;
  }
};

// Send Emial AJAX
const sendEmail = () => {
  // Send button text change
  $("#adlance_send_btn").text("Sending..");
  // Get the form data
  var userName = $("#userName").val();
  var userEmail = $("#userEmail").val();
  var companyName = $("#companyName").val();
  var userMsg = $("#userMsg").val();

  var formData = {
    name: userName,
    email: userEmail,
    company: companyName,
    message: userMsg,
  };

  // Send Ajax call
  $.ajax({
    url: "/adlance2/sendMail.php",
    method: "POST",
    data: formData,
    dataType: "json",
  })
    .done(function (response) {
      // This code will run when the request is successful
      if (response.msg_code === 200) {
        $("#adlance_send_btn").html(
          "<span class='sent_txt'>Sent Successfully </span> <img style='width:20px; margin-left:10px;margin-bottom:5px' src='assets/images/sent-check.png'/>"
        );
      } else {
        $("#adlance_send_btn").html(
          "Error In Sending"
        );
      }
    })
    .fail(function (jqXHR, textStatus) {
      // This code will run if the request fails
      console.log("Request failed: " + textStatus);
    });
};

// Service Scroll to bottom
$(".service_icon_down").click(function () {
  $(".adlance_services_details").get(0).scrollIntoView({ behavior: "smooth" });
});

// Services Page Categories Tabs

// Hide all tabs-content by-default
$(".ser_categories").hide();
$(".service_subcat").hide();

$(document).ready(function () {
  // Getting services dropdown selected value
  let selectedService;
  $(".services_dropdown").change(function () {
    selectedService = $(this).val();
    // Get the link element by its href attribute
    const clickLink = document.querySelector(`a[href="${selectedService}"]`);
    clickLink.click();
  });

  // Get the first tab and its corresponding content area
  var firstTab = $(".services_list li:eq(1) a");
  var firstTabContent = firstTab.attr("href");

  $(".service_subcat:eq(1)").show();
  // console.log(firstTabContent);
  $(`#${firstTabContent}`).show();

  // Bind a click event handler to all tabs
  $(".services_list li a").click(function (e) {
    e.preventDefault();

    // Get the ID of the clicked tab
    var tab_id = $(this).attr("href");

    // Remove the 'active_service' class from all service buttons
    $(".services_list li a").removeClass("active_service");

    // Add the 'active_service' class to the clicked service button
    $(this).addClass("active_service");

    // Hide all .ser_categories tab
    $(".ser_categories").hide();

    // Hide all sub category tab
    $(".service_subcat").hide();

    // Show the content of the clicked tab
    $(`#${tab_id}`).show();

    // Show the sub-category of the clicked tab/service
    $(`[data-sub-category='${tab_id}']`).show();

    // Animating Below category section content with button click
    gsap.fromTo(
      `#${tab_id}`,
      { y: "10%", opacity: "0" },
      { y: "0%", duration: 1.5, opacity: 1, ease: "power3.out" }
    );

    // Animating sub-categories with button click
    gsap.fromTo(
      `[data-sub-category='${tab_id}']`,
      { y: "8%", opacity: "0" },
      { y: "0%", duration: 2, opacity: 1, ease: "power3.out" }
    );
  });

  var video = $("#adlance_vid")[0]; // Replace 'myVideo' with the ID of your video element
  var adlance_page_pilling = $.fn.pagepiling; // Get the pagepiling instance
  // Listen for the 'ended' event on the video
  $(video).on("ended", function () {
    adlance_page_pilling.moveTo(1);
  });
});

// SUpport us FORM
$(".donate-button").on("click", function (e) {
  e.preventDefault();
  const amount = $(this).data("amount");
  $("#donation-amount").val(amount);
  // Remove the active class from all buttons
  $(".donate-button").removeClass("active_donation_amount");

  // Add the active class to the clicked button
  $(this).addClass("active_donation_amount");
});

$("#donation-amount").on("input", function () {
  $(".donate-button").removeClass("active");
});

// Testimonials Slider

const teamTestimonalSlider = new Swiper(".team_testimonial_slider", {
  centeredSlides: true,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
  delay: 2000,
  pagination: {
    el: ".custom_pagination",
    clickable: true,
    // bulletElement: '.pagination_dots',
    bulletClass: "pagination_dots",
    bulletActiveClass: "active_pagination_dot",
    renderBullet: function (index, className) {
      return `<div class="pagination_dots"></div>`;
    },
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    1200: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

teamTestimonalSlider.on("slideChange", function () {
  storiesSlide_index = document.getElementById("storiesSlide_index");
  storiesSlide_index.innerHTML = teamTestimonalSlider.realIndex + 1;
  // console.log(swiper.realIndex);
});

// Featured Thumbs Stories Slider
const featuredThumbsStoriesSlider = new Swiper(".fs_thumbs_slider", {
  // centeredSlides: true,
  // direction: "vertical",
  speed: 1000,
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  freeMode: true,
  autoplay: {
    delay: 3000,
  },
});

var mySwiper = new Swiper(".swiper-container", {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "3.5",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 200,
    modifier: 7,
    slideShadows: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".right_arrow",
    prevEl: ".left_arrow",
  },
});

const slider = document.querySelector(".featured_stories_slider");
const otherSlide = document.querySelector(".other-slide");
const swiper = new Swiper(slider, {
  autoHeight: true,
  speed: 1000,
  slidesPerView: 2,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".fs_nxt",
    prevEl: ".fs_pre",
  },
  loop: true,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    1200: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

// Adlance Mobile Arrow Down Click to Scroll another section
$(document).ready(function () {
  $(".adlance_mobile_hero_down_icon ").click(function () {
    // alert();
    $.fn.pagepiling.moveSectionDown();
  });

});

function updateOtherSlide() {
  activeSlideIndex = swiper.activeIndex + 3;
  if (activeSlideIndex > swiper.slides.length) {
    activeSlideIndex = 1;
  }
  otherSlide.innerHTML = slider.querySelector(
    `.swiper-slide:nth-child(${activeSlideIndex})`
  ).innerHTML;
}

swiper.on("slideChange", updateOtherSlide);

updateOtherSlide();


