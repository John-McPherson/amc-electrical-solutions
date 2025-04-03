import Swiper from "swiper";
import { Pagination, Autoplay } from "swiper/modules";
import "swiper/css";

import "swiper/css/pagination";
import "../scss/modules/reviews.scss";

class Carousel {
  swiper: Swiper;
  constructor(container: string) {
    this.swiper = new Swiper(container, {
      modules: [Pagination, Autoplay],
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      loop: true,
    });
  }
}

export default Carousel;
