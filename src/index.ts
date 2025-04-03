import "normalize.css";
import "./styles.scss";
import "./scss/modules/hero.scss";
import "./scss/modules/about.scss";
import "./scss/modules/services.scss";
import "./scss/resets.scss";

import NavMenu from "./modules/NavMenu";
import Carousel from "./modules/Carousel";

document.addEventListener("DOMContentLoaded", () => {
  const navMenu = new NavMenu();
  const reveiwCarousel = new Carousel(".review-carousel");

  const reviewsSection = document.querySelector(".reviews");
  reveiwCarousel.swiper.autoplay.start();
  if (reviewsSection) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            reveiwCarousel.swiper.autoplay.start(); // Start autoplay
          } else {
            reveiwCarousel.swiper.autoplay.stop(); // Stop autoplay when out of view
          }
        });
      },
      { threshold: 0.3 } // Trigger when 30% of the section is visible
    );

    observer.observe(reviewsSection);
  }
});
