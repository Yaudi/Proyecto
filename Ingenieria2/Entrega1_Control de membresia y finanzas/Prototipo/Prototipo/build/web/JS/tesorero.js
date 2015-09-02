function nuevoAjax(){
    var xmlhttp = false; //para almacenar todo tipo de dato
    
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");    
    }catch(e){
        try{
            xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlhttp = false;
        }
        if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
            xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }
}
function entrada(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","entrada.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function salida(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","salida.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function presupuesto(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","presupuesto.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function presupuestoResultado(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","presupuesto_resultado.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}

function cierre(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","cierre.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarTotal(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultar_total.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarTipo(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultar_tipo.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarTipoResultado(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultar_tipo_resultado.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarFecha(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultar_fecha.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarFechaResultado(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultar_fecha_resultado.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}