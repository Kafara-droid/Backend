const hamburgerButton = document.querySelector(".hamburger");
const popup = document.querySelector(".popup");

hamburgerButton.addEventListener("click", () => {
  popup.classList.toggle("active");
})