import "../scss/app.scss";
import Tabs from "./modules/tabs";
import initHeaderMenu from "./modules/headerMenu";
import initSlider from "./modules/swiper";

const tabs = document.querySelectorAll(`[data-tabs]`);
if (tabs) {
  tabs.forEach((item) => new Tabs(item));
}

initHeaderMenu();
initSlider();
