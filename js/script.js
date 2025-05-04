// const menuToggle = document.getElementById('menu-toggle');
// const closeMenu = document.getElementById('close-menu');
// const navMenu = document.getElementById('nav-menu');
// const overlay = document.getElementById('overlay');

// function openNav() {
  $(window).scroll(function () {
    var distanceScrolled = $(this).scrollTop();

    if (distanceScrolled > 200) {
      $('.header').css('background', '#00000038');
    } else {
      $('.header').css('background', 'transparent');
    }
  });
const menuToggle = document.getElementById("menu-toggle");
const closeMenu = document.getElementById("close-menu");
const navMenu = document.getElementById("nav-menu");
const overlay = document.getElementById("overlay");

function openNav() {
  navMenu.classList.add("nav-active");
  overlay.classList.add("overlay-active");
}

function closeNav() {
  navMenu.classList.remove("nav-active");
  overlay.classList.remove("overlay-active");
}

menuToggle.addEventListener("click", openNav);
closeMenu.addEventListener("click", closeNav);
overlay.addEventListener("click", closeNav);
