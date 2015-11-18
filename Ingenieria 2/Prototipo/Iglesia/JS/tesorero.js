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
    ajax.open("GET","entrada.php",true);       
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
    ajax.open("GET","salida.php",true);       
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
    ajax.open("GET","presupuesto.php",true);       
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
    ajax.open("GET","presupuestoResultado.php",true);       
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
    ajax.open("GET","cierre.php",true);       
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
    ajax.open("GET","consultarTotal.php",true);       
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
    ajax.open("GET","consultarTipo.php",true);       
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
    ajax.open("GET","consultarTipoResultado.php",true);       
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
    ajax.open("GET","consultarFecha.php",true);       
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
    ajax.open("GET","consultarFechaResultado.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}