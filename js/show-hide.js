var a;

function sh1(){
    if(a==1){
        document.getElementById("todos").style.display="";
        return a=0;
    }else{
        document.getElementById("todos").style.display="none";
        return a=1;
    }
}

var b;
function sh2(){
    if(b==1){
        document.getElementById("vendas").style.display="";
        return b=0;
    }else{
        document.getElementById("vendas").style.display="flex";
        return b=1;
    }
}

var c;
function sh3(){
    if(c==1){
        document.getElementById("landing").style.display="";
        return c=0;
    }else{
        document.getElementById("landing").style.display="flex";
        return c=1;
    }
}

var d;
function sh4(){
    if(d==1){
        document.getElementById("sistemas").style.display="";
        return d=0;
    }else{
        document.getElementById("sistemas").style.display="flex";
        return d=1;
    }
}