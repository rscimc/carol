//Menu Mobile
const btnMobile = document.getElementById("btn-mobile");
const nav = document.getElementById("navBar");

function toggleMenu(e) {
  if (e.type === "touchstart") e.preventDefault();
  nav.classList.toggle("active");
}

btnMobile.addEventListener("click", toggleMenu);
btnMobile.addEventListener("touchstart", toggleMenu);

//Scroll
const scroll = document.querySelector("#top");

function up() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

function show() {
  if (window.scrollY <= 100) {
    scroll.style.display = "none";
  } else {
    scroll.style.display = "block";
  }
}

scroll.addEventListener("click", up);
window.addEventListener("scroll", show);
