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
