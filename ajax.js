gerarcate();

function gerarcate(){
    
    let catsidebar = new XMLHttpRequest();
    catsidebar.onload = function(){

        document.getElementById("catsidebar").innerHTML = this.responseText;

    }
    catsidebar.open("GET","categorias.php");
    catsidebar.send();

}