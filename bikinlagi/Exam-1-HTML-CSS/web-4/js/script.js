// toggle class active
const atas = document.querySelector(".atas");
// ketika menu dikilik
document.querySelector("#menu").onclick = () => {
  atas.classList.toggle("active");
};

// klik di luar sidebar
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !atas.contains(e.target)) {
    atas.classList.remove('active');
  }
});
