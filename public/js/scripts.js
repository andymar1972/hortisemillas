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

const images=Array.from(document.querySelectorAll('.banner__absolute__img'));

for (let i = 0; i < images.length; i++) {
  images[i].style.display="none";
}
images[0].style.display="block";

const pimiento1=document.getElementById('defaultOpen');
const pimiento2=document.getElementById('pimiento2');
const pimiento3=document.getElementById('pimiento3');
const pimiento4=document.getElementById('pimiento4');
const pimiento5=document.getElementById('pimiento5');
const pimiento6=document.getElementById('pimiento6');
const pimiento7=document.getElementById('pimiento7');
const pimiento8=document.getElementById('pimiento8');

pimiento1.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[0].style.display="block";
})
pimiento2.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[1].style.display="block";
})
pimiento3.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[2].style.display="block";
})
pimiento4.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[3].style.display="block";
})
pimiento5.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[4].style.display="block";
})
pimiento6.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[5].style.display="block";
})
pimiento7.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[6].style.display="block";
})
pimiento8.addEventListener('click',()=>{
  for (let i = 0; i < images.length; i++) {
    images[i].style.display="none";
  }
  images[7].style.display="block";
})
