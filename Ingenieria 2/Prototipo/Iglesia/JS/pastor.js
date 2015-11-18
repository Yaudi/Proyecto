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
function añadirMiembro(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","insertarMiembros.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}

function modificarMiembro(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","modificarMiembros.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function eliminarMiembro(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","eliminarMiembros.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function crearCelula(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","crearCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function insertarMiembroCelula(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","añadir_miembroCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function agregarMiembroCelula(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","agregarCrearCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function modificarMiembroCelula(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","modificaMiembrorCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function eliminarMiembroCelula(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","eliminar_miembro_celula.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function tabla(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","tabla.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function formularioModificarMiembro(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","modicarMiembroFormulario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function añadirInventario(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","añadirInventario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function modificarInventario(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","modificarInventario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function modificarInventarioFormulario(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","modificarInventarioFormulario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function eliminarInventario(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","eliminarInventario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarPastor(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","buscarConsultarMiembros.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarMiembros(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultarMiembros.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarInventario(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultarInventario.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarCelula(){
    var capa = document.getElementById('capa');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultarCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}
function consultarMiembroCelula(){
    var capa = document.getElementById('capa2');
        
    var ajax = new nuevoAjax();
    ajax.open("GET","consultarMiembrosCelula.php",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}