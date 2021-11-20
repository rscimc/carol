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

//LGPD
const lgpdHTML = `<div id="lgpd">
                    <p>
                      Embora não utilizemos cookies próprios, este site integra a funcionalidade de
                      terceiros que podem enviar cookies para seu dispositivo. Ao prosseguir navegando no 
                      site, esses cookies podem coletar dados pessoais indiretos. Para saber mais, acesse 
                      a <a href="https://facebook.com/policies/cookies" target="_blank">Política de 
                      Privacidade e Aviso de Cookies do Facebook Pixel</a> e 
                      <a href="https://policies.google.com/technologies/cookies?hl=pt-BR" target="_blank"> 
                      Google Analytics</a>. Acesse a nossa Política de Privacidade, 
                      <a href="./privacy.php" target="_blank">
                      clicando aqui</a>.
                    </p> 
                    <button id="ok">Ok</button>
                  </div>`;
const lsContent = localStorage.getItem("accepted");
if (!lsContent) {
  document.body.innerHTML += lgpdHTML;
}

const lgpd = document.querySelector("#lgpd");
const ok = document.querySelector("#ok");

function unrender() {
  lgpd.style.display = "none";
  localStorage.setItem("accepted", "123");
}

ok.addEventListener("click", unrender);
