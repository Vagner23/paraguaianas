function gerarcate() {
  let catsidebar = new XMLHttpRequest();
  catsidebar.onload = function () {
    document.getElementById("catsidebar").innerHTML = this.responseText;
  };
  catsidebar.open("GET", "phpp/categorias.php");
  catsidebar.send();
}
function gerarcards(x) {
  let cardss = new XMLHttpRequest();
  cardss.onload = function () {
    document.getElementById("fbcards").innerHTML = this.responseText;
  };

  console.log(cardss);

  if (x != null) {
    cardss.open("GET", "phpp/cards.php?q=" + x);
  } else {
    cardss.open("GET", "phpp/cards.php");
  }

  cardss.send();
}
