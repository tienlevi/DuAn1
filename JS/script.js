const menuBar = document.querySelector(".menu-bar");
const closeAside = document.querySelector(".sidebar-close");
const aside = document.querySelector("aside");
const navItem = document.querySelectorAll(".nav-item-main .nav-name");
const navTreeView = document.querySelectorAll(".nav-treeview");
const body = document.querySelector(".sidebar-overlay");

menuBar.addEventListener("click", () => {
  aside.classList.add("open-aside");
  body.classList.add("body-overflow");
});

closeAside.addEventListener("click", () => {
  aside.classList.remove("open-aside");
  body.classList.remove("body-overflow");
});

for (let i = 0; i < navItem.length; i++) {
  navItem[i].addEventListener("click", () => {
    navItem[i].classList.toggle("active-nav-item");
    navTreeView[i].classList.toggle("active-nav-treeview");
  });
}
