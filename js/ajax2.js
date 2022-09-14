function addcart(sex){

    let cartbglh = new XMLHttpRequest();
    cartbglh.onload = function(){

        document.getElementById("codfod").innerHTML=this.responseText;

    }
    cartbglh.open("GET","cartop.php?proid="+sex);
    cartbglh.send();

    console.log(XMLHttpRequest);
    

}