const toggle = document.querySelector(".toggle");
const mobile_menu = document.querySelector(".mobile-nav");

toggle.addEventListener("click", function () {
  toggle.classList.toggle("is-active");
  mobile_menu.classList.toggle("is-active");
});
