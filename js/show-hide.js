/*$(function(){
    $('#showall').click(function(){
    $('.projetos-wrapper').show();
});
    $('.sigle').click(function(){
        $('.projetos-wrapper').hide();
        $('#div'+$(this).attr('.target')).show();
    });
});

$(function(){
    $('#vendas').click(function(){
    $('.projetos-wrapper').show();
});
    $('.sigle').click(function(){
        $('.projetos-wrapper').hide();
        $('#div'+$(this).attr('.target')).show();
    });
});*/

var todos;
function sh1(){
    if(todos==1){
        document.getElementById('todos').style.display="flex";
        return todos=0;
    }else{
        document.getElementById('vendas','landing','sistemas').style.display="none";
        return todos=1;
    }
};

var vendas;
function sh2(){
    if(vendas==1){
        document.getElementById('vendas').style.display="flex";
        return vendas=0;
    }else{
        document.getElementById('todos','landing','sistemas').style.display="none";
        return vendas=1;
    }
};

var landing;
function sh3(){
    if(landing==1){
        document.getElementById('landing').style.display="flex";
        return landing=0;
    }else{
        document.getElementById('todos','vendas','sistemas').style.display="none";
        return landing=1;
    }
};

var sistemas;
function sh4(){
    if(sistemas==1){
        document.getElementById('sistemas').style.display="flex";
        return sistemas=0;
    }else{
        document.getElementById('todos','vendas','landing').style.display="none";
        return sistemas=1;
    }
};