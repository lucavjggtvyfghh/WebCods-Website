function responsiveMenuToggle() {
  var x = document.getElementById("menu");
  if (x.className === "navigation navbar-nav") {
    x.className += " responsive";
  } else {
    x.className = "navigation navbar-nav";
  }
}
