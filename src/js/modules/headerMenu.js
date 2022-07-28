const initHeaderMenu = () => {
  const burger = document.querySelector(`#headerBurger`);
  const closeMenu = document.querySelector(`#closeMenu`);
  const header = document.querySelector(`#header`);

  burger.addEventListener(`click`, function () {
    header.classList.add(`header--active`);
  });

  closeMenu.addEventListener(`click`, function () {
    header.classList.remove(`header--active`);
  });

};

export default initHeaderMenu;
