import lottie, { AnimationItem } from "lottie-web";
import menuAnimation from "../lottie/burger_menu.json";
import "../scss/modules/header.scss";

class NavMenu {
  menu: HTMLElement | null;
  menuToggle: HTMLElement | null;
  isOpen: boolean;
  menuSize: number;
  animation: AnimationItem | null;

  constructor() {
    this.isOpen = false;
    this.menu = document.querySelector(".menu");
    this.menuSize = this.menu ? this.menu.scrollHeight : 0;
    this.menuToggle = document.querySelector(".menu-toggle");

    this.animation = this.menuToggle
      ? lottie.loadAnimation({
          container: this.menuToggle,
          renderer: "svg",
          loop: false,
          autoplay: false,
          animationData: menuAnimation,
        })
      : null;

    this.events();
  }

  events() {
    window.addEventListener("resize", () => this.onResize());

    this.menuToggle?.addEventListener("click", () => this.handleClick());
  }

  onResize() {
    if (this.menu) this.menuSize = this.menu.scrollHeight;
    if (this.isOpen) this.closeMenu();
  }

  handleClick() {
    !this.isOpen ? this.openMenu() : this.closeMenu();
  }

  closeMenu() {
    this.isOpen = false;
    this.menuToggle?.setAttribute("aria-expanded", "false");
    if (this.menu) this.menu.style.height = `0px`;
    setTimeout(() => {
      this.menu?.style.removeProperty("height");
      this.menu?.style.removeProperty("display");
    }, 250);
    this.animation?.play();
  }
  openMenu() {
    this.isOpen = true;

    this.menuToggle?.setAttribute("aria-expanded", "true");

    this.animation?.goToAndStop(0, true);
    this.animation?.play();
    setTimeout(() => {
      if (this.menu) this.menu.style.height = `${this.menuSize}px`;
    }, 500);

    setTimeout(() => {
      this.animation?.pause();
    }, 1500);
  }
}

export default NavMenu;
