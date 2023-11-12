const searchIcon = document.querySelector("#search-icon");
const formSearch = document.querySelector(".form-search");
const userIcon = document.querySelector("#user-icon");
const userDropdown = document.querySelector(".user-dropdown");
const backtotop = document.querySelector(".back-to-top");
const addToCart = document.querySelector(".product-details-click");

searchIcon.addEventListener("click", () => {
  formSearch.classList.toggle("form-search-active");
});

userIcon.addEventListener("click", () => {
  userDropdown.classList.toggle("user-dropdown-active");
});

addToCart.addEventListener("click", () => {
  alert("Thêm giỏ hàng thành công");
});

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    backtotop.classList.add("active");
  } else {
    backtotop.classList.remove("active");
  }
});

backtotop.addEventListener("click", returntop);

function returntop() {
  window.scrollTo(0, 0);
}
