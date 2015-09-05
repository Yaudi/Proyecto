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
    ajax.open("GET","insertar_miembros.jsp",true);       
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
    ajax.open("GET","modificar_miembros.jsp",true);       
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
    ajax.open("GET","eliminar_miembros.jsp",true);       
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
    ajax.open("GET","crear_celula.jsp",true);       
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
    ajax.open("GET","añadir_miembro_celula.jsp",true);       
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
    ajax.open("GET","agregar_crear_celula.jsp",true);       
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
    ajax.open("GET","modifica_miembror_celula.jsp",true);       
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
    ajax.open("GET","tabla.jsp",true);       
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
    ajax.open("GET","modicar_miembro_formulario.jsp",true);       
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
    ajax.open("GET","añadir_inventario.jsp",true);       
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
    ajax.open("GET","modificar_inventario.jsp",true);       
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
    ajax.open("GET","modificar_inventario_formulario.jsp",true);       
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
    ajax.open("GET","eliminar_inventario.jsp",true);       
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
    ajax.open("GET","buscar_consultar_miembros.jsp",true);       
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
    ajax.open("GET","consultar_miembros.jsp",true);       
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
    ajax.open("GET","consultar_inventario.jsp",true);       
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
    ajax.open("GET","consultar_celula.jsp",true);       
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
    ajax.open("GET","consultar_miembros_celula.jsp",true);       
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
}