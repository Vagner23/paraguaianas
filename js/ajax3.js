function geracartinfo(){
   
    const cpi = new XMLHttpRequest();
    cpi.onload = function(){
    
        document.getElementById("cartpro").innerHTML=this.responseText;
    
    }
    cpi.open("GET","cartload.php");
    cpi.send();

}
function delvp(x){

    const dvp = new XMLHttpRequest();
    dvp.onload = function(){

        document.getElementById("cartcrudresptxt").innerHTML=this.responseText;
        
    }
    dvp.open("GET","delvp.php?q="+x);
    dvp.send();

    geracartinfo();

}

function fimvend(x){

    const fv = new XMLHttpRequest();
    fv.onload = function(){

        document.getElementById("cartcrudresptxt").innerHTML=this.responseText;
        
    }
    fv.open("GET","fimvend.php?q="+x);
    fv.send();

    geracartinfo();

}

function delvend(x){

    const dv = new XMLHttpRequest();
    dv.onload = function(){

        document.getElementById("cartcrudresptxt").innerHTML=this.responseText;
        
    }
    dv.open("GET","delvend.php?q="+x);
    dv.send();

    geracartinfo();

}