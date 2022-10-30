AOS.init({
  once: true,
});

/**
 * Make colored navbar when scroll
 */

const navbar = document.getElementById("navigation-bar");
const navbarToggler = document.querySelector(".navbar-toggler");

window.addEventListener("scroll", function () {
  if (navbar.classList.contains("nav-mobile-active")) {
  } else {
    if (
      document.body.scrollTop >= 120 ||
      document.documentElement.scrollTop >= 120
    ) {
      navbar.classList.add("navbar-colored");
    } else {
      navbar.classList.remove("navbar-colored");
    }
  }
});

navbarToggler.addEventListener("click", function () {
  navbar.classList.toggle("nav-mobile-active");
  if (navbar.classList.contains("nav-mobile-active")) {
    navbar.classList.add("navbar-colored");
  } else if (
    document.body.scrollTop >= 120 ||
    document.documentElement.scrollTop >= 120
  ) {
    navbar.classList.add("navbar-colored");
  } else {
    navbar.classList.remove("navbar-colored");
  }
});

/**
 * Make smooth scrolling
 */

const links = document.querySelectorAll(".nav-link");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
  e.preventDefault();

  const href = this.getAttribute("href");

  if (href === "#") {
    scroll({
      top: 0,
      behavior: "smooth",
    });
  } else {
    const offsetTop = document.querySelector(href).offsetTop - 100;

    scroll({
      top: offsetTop,
      behavior: "smooth",
    });
  }
}
