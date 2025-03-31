import "normalize.css";
import "./styles.scss";
import "./scss/modules/hero.scss";
import "./scss/modules/about.scss";
import "./scss/resets.scss";

import NavMenu from "./modules/NavMenu";

document.addEventListener("DOMContentLoaded", () => {
  const navMenu = new NavMenu();
});
