const x = document.querySelector(".responsive-menu");
function toggleDisplay() {
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

const hamburgerIcon = document.querySelector(".hamburgerIcon");
hamburgerIcon.addEventListener("click", toggleDisplay());

const aboutTabsIcon = document.querySelector(".openIcon");
const aboutTabsInfo = document.querySelector(".tabInfo");
aboutTabsIcon.addEventListener("click", () => {
  aboutTabsInfo.classList.toggle("display-none");
});
const aboutTabsIcon2 = document.querySelector(".openIcon");
const aboutTabsInfo2 = document.querySelector(".tabInfo");
aboutTabsIcon.addEventListener("click", () => {
  aboutTabsInfo.classList.toggle("display-none");
});
