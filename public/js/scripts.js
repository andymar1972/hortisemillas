console.log("Bienvenido");

const nav = document.getElementById("nav");
const navBurguer = document.getElementById("nav-burguer");
const navClose = document.getElementById("nav-close");

if (nav && navBurguer && navClose) {
  navBurguer.addEventListener("click", () => {
    nav.classList.add("header__nav--show");
    navBurguer.classList.add("header__burguer--show");
  });
  navClose.addEventListener("click", () => {
    nav.classList.remove("header__nav--show");
    navBurguer.classList.remove("header__burguer--show");
  });
}

// $(".banner__slider").slick({
//   arrows:false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
// });
// $('.banner__prev').click(function(){
//   $('.banner__slider').slick('slickPrev');
// })

// $('.banner__next').click(function(){
//   $('.banner__slider').slick('slickNext');
// })

// $(".testimonios__slider").slick({
//   arrows:false,
//   infinite: true,
//   speed: 500,
//   fade: true,
//   cssEase: 'linear',
//   autoplay: true,
//   autoplaySpeed: 2000,
// });
// $('.testimonios__prev').click(function(){
//   $('.testimonios__slider').slick('slickPrev');
// })

// $('.testimonios__next').click(function(){
//   $('.testimonios__slider').slick('slickNext');
// })

document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active--ac");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

const buttonAccordion = Array.from(document.querySelectorAll(".accordion"));
for (let i = 0; i < buttonAccordion.length; i++) {
  buttonAccordion[i].click();
}
