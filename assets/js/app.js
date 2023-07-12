const slidesContainer = document.getElementById("slides-container"),
  slide = document.querySelector(".slide"),
  prevButton = document.getElementById("slide-arrow-prev"),
  nextButton = document.getElementById("slide-arrow-next"),
  slider = document.getElementsByClassName("slide");
slider.addEventListener("mousedown", () => {
  slider.style.cursor = "grabbing";
  let e = slide.clientWidth;
  slidesContainer.scrollLeft += e;
}),
  nextButton.addEventListener("click", () => {
    let e = slide.clientWidth;
    (slidesContainer.scrollLeft += e),
      5921 == (scrollValue = slidesContainer.scrollLeft) &&
        (slidesContainer.scrollLeft = 0);
  }),
  prevButton.addEventListener("click", () => {
    let e = slide.clientWidth;
    slidesContainer.scrollLeft -= e;
  });