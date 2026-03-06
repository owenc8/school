document.addEventListener("DOMContentLoaded", function () {
  const gallery = document.querySelector(".front-page-gallery");

  if (gallery) {
    lightGallery(gallery, {
      selector: "a",
      speed: 500,
    });
  }
});
