gerarcards();
gerarcate();
function gerarcate(){
    
    let catsidebar = new XMLHttpRequest();
    catsidebar.onload = function(){

        document.getElementById("catsidebar").innerHTML = this.responseText;

    }
    catsidebar.open("GET","categorias.php");
    catsidebar.send();

}
function gerarcards(x){


    let cardss = new XMLHttpRequest();
    cardss.onload = function(){

        document.getElementById("fbcards").innerHTML = this.responseText;

    }

    console.log(cardss);

    if(x!=null){

        cardss.open("GET","cards.php?q="+x);
        
    }
    else{

        cardss.open("GET","cards.php");

    }

    cardss.send();

}
