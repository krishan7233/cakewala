document.addEventListener("DOMContentLoaded", function () {
if($(".valentine-landing-page-desktop").length>0){
loadPrevNextHome(112);
}
if($("#irresistibleCakeSectionMobile").length){
    const scrollableContainer = document.querySelector(
      '.irresistible-cake-container > div[style*="overflow-x:auto"]'
    );
    const nextButton = document.querySelector(".swiper-button-nextvalentine img");
    const prevButton = document.querySelector(".swiper-button-prevValentine img");
    const itemWidth = scrollableContainer.querySelector('div > div').offsetWidth;

    function updateButtonState() {
      const currentPage = Math.round(scrollableContainer.scrollLeft / itemWidth);
      const totalPages = scrollableContainer.querySelectorAll('div > div').length - 1;

      if (currentPage === 0) {
        prevButton.src = "https://assets.winni.in/groot/2025/01/13/mobile/arrow_left.png";
        nextButton.src = "https://assets.winni.in/groot/2025/01/13/mobile/arrow-right-red.png";
      }  else {
        prevButton.src = "https://assets.winni.in/groot/2025/01/13/mobile/arrow-left-red.png";
        nextButton.src = "https://assets.winni.in/groot/2025/01/13/mobile/arrow-right.png";
      }
    }

    nextButton.parentElement.addEventListener("click", () => {
      const currentPage = Math.round(scrollableContainer.scrollLeft / itemWidth);
      const totalPages = scrollableContainer.querySelectorAll('div > div').length - 1;

      if (currentPage < totalPages) {
        scrollableContainer.scrollTo({
          left: (currentPage + 1) * itemWidth,
          behavior: "smooth",
        });
        setTimeout(updateButtonState, 300);
      }
    });

    prevButton.parentElement.addEventListener("click", () => {
      const currentPage = Math.round(scrollableContainer.scrollLeft / itemWidth);

      if (currentPage > 0) {
        scrollableContainer.scrollTo({
          left: (currentPage - 1) * itemWidth,
          behavior: "smooth",
        });
        setTimeout(updateButtonState, 300);
      }
    });

    scrollableContainer.addEventListener("scroll", updateButtonState);
    updateButtonState();
 }

  if ($(".swapperMemorable").length > 0) {
         let swiper = new Swiper(".mySwiper", {
             slidesPerView: 3,
             spaceBetween: 5,
             loop: false,
             centeredSlides: false,
             watchOverflow: true,
             pagination: {
                 el: ".swiper-pagination",
                 clickable: true,
             },
             breakpoints: {
                 768: {
                     slidesPerView: 3,
                     spaceBetween: 5,
                 },
                 480: {
                     slidesPerView: 3,
                     spaceBetween: 5,
                 },
             },
         });
     }
   });

