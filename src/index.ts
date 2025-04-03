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
  const reveiwCarousel = new Carousel(".review-carousel", ".reviews");
});
