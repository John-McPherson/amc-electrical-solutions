import Swiper from "swiper";
import { Pagination, Autoplay, Navigation } from "swiper/modules";
import "swiper/css";

import "swiper/css/pagination";
import "../scss/modules/reviews.scss";

class Carousel {
  swiper: Swiper;
  observer: IntersectionObserver;
  section: HTMLElement | null;

  constructor(container: string, section: string) {
    this.section = document.querySelector(section);
    this.swiper = new Swiper(container, {
      on: {
        slideChange: () => console.log("slide change"),
      },
      modules: [Pagination, Autoplay, Navigation],
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      loop: true,
    });
    this.observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            this.swiper.autoplay.start();
          } else {
            this.swiper.autoplay.stop();
          }
        });
      },
      { threshold: 0.3 }
    );
    if (this.section) this.observer.observe(this.section);
  }
}

export default Carousel;
