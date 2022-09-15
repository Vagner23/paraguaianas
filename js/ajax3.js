function geracartinfo(){
   
    const cpi = new XMLHttpRequest();
    cpi.onload = function(){
    
        document.getElementById("cartpro").innerHTML=this.responseText;
    
    }
    cpi.open("GET","cartload.php");
    cpi.send();

    console.log(cpi);

}