var toogle = document.getElementById("toogle");
toogle.addEventListener("click", toogleMenu);
var menu = 0;
function toogleMenu() {
  switch (menu) {
    case 0:
      document.getElementById("menu").style.left = "0";
      menu = 1;
      break;
    case 1:
      document.getElementById("menu").style.left = "-190px";
      menu = 0;
    break;
  }
}
