import e from "express";

class Modal {
  openButtons: NodeListOf<Element>;
  closeButtons: NodeListOf<Element>;
  isOpen: boolean;
  overlay: HTMLElement | null;

  constructor() {
    this.overlay = document.querySelector(".overlay");
    this.isOpen = false;
    this.openButtons = document.querySelectorAll("[data-open]");
    this.closeButtons = document.querySelectorAll(".close");

    this.events();
  }
  open(e: Event) {
    if (!e.target || !(e.target instanceof HTMLElement)) return;
    console.log(e.target?.dataset.open);
    document.querySelector("body")?.classList.add("scroll-disabled");
    this.overlay?.classList.add("open");
    document.querySelector(`.${e.target?.dataset.open}`)?.classList.add("open");
  }
  close(e: Event) {
    if (!e.target || !(e.target instanceof HTMLElement)) return;
    this.overlay?.classList.remove("open");
    e.target.parentElement?.classList.remove("open");
    document.querySelector("body")?.classList.remove("scroll-disabled");
  }

  events() {
    this.openButtons.forEach((button) => {
      button.addEventListener("click", (e) => this.open(e));
    });
    this.closeButtons.forEach((button) => {
      button.addEventListener("click", (e) => this.close(e));
    });
  }
}

export default Modal;
