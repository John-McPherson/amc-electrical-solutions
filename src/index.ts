import "normalize.css";
import "./styles.scss";
import "./scss/modules/hero.scss";
import "./scss/modules/about.scss";
import "./scss/modules/services.scss";
import "./scss/modules/modals.scss";
import "./scss/resets.scss";

import NavMenu from "./modules/NavMenu";
import Carousel from "./modules/Carousel";
import Modal from "./modules/Modal";

document.addEventListener("DOMContentLoaded", () => {
  const navMenu = new NavMenu();
  const reveiwCarousel = new Carousel(".review-carousel", ".reviews");
  const contactPopup = new Modal();

  document.querySelector("[data-submit]")?.addEventListener("click", (e) => {
    if (!e.target || !(e.target instanceof HTMLElement)) return;
    const submitBtn = document.querySelector(
      `.${e.target.dataset.submit}`
    ) as HTMLButtonElement;
    console.log(submitBtn);
    submitBtn.click();

    // const form = document.querySelector(
    //   `#${e.target.dataset.submit}`
    // ) as HTMLFormElement;
    // console.log(form);
    // form.querySelector("button")?.click();

    // form.submit();
  });
});
