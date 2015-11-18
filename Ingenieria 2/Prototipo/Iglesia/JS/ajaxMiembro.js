(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#formularioMiembro").validate({
                rules: {
                    nombre: "required",
                    apellido: "required",
                    procedencia: "required",
                    estadoCivil: "required",
                    nivelTeologico: "required",
                    clasificacion: "required",
                    tipo: "required",
                    telefono: {
                        required: true,
                        minlength: 8
                    },
                    edad: "required",
                    cedula: {
                        required: true,
                        minlength: 9
                    }
                },

                messages: {
                    nombre: "Campo requerido",
                    apellido: "Campo requerido",
                    procedencia: "Campo requerido",
                    estadoCivil: "Campo requerido",
                    nivelTeologico: "Campo requerido",
                    clasificacion: "Campo requerido",
                    tipo: "Campo requerido",
                    telefono: {
                        required: "Campo requerido",
                        minlength: "Debe ser de 8 numeros"
                    },
                    edad: "Campo requerido",
                    cedula: {
                        required: "Campo requerido",
                        minlength: "Debe de ser de 9 caracteres"
                    }
                    
                },//Array de msj requeridos
                submitHandler: function(form) {
                    //Cuando ya esta completado el formulario como debe de ser, se llama el método de guardar
                    insertarMiembro();
                }
            });
        }
    }
 
    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
        //Verifica que los datos ingresados sean validos  y eventualmente da el pase a la función submitHandler: function(form)  
    });
 
} ) (jQuery, window, document);

$(function(){
    $('#edad').datepicker();
});
$("#telefono").mask('99999999');
$("#edad").mask('99-99-9999');
$("#cedula").mask('9 9999 9999');
/*
function insertarMiembro(){
    var formData = new FormData(document.getElementById("formularioMiembro"));
    
    formData.append("accion", "insertar");//Indica el metodo o funcion
    $.ajax({
    url : "../../Controladora/Miembro/controladoraMiembro.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#capa").html(data);
    });
}*/

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

function insertarMiembro(){
    var capa = document.getElementById('capa');
    var cedula = document.getElementById('cedula').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var edad = document.getElementById('edad').value;
    var procedencia = document.getElementById('procedencia').value;
    var telefono = document.getElementById('telefono').value;
    var estadoCivil = document.getElementById('estadoCivil').value;
    var nivelTeologico = document.getElementById('nivelTeologico').value;
    var clasificacion = document.getElementById('clasificacion').value;
    var tipo = document.getElementById('tipo').value;
    var idCelula = document.getElementById('idCelula').value;
    
    var ajax = new nuevoAjax();
    
    ajax.open("GET","../../Controladora/Miembro/controladoraMiembro.php?cedula="+cedula+"&nombre="+nombre+"&apellido="+apellido+"&edad="+edad+"&procedencia="+procedencia+"&telefono="+telefono+"&estadoCivil="+estadoCivil+"&nivelTeologico="+nivelTeologico+"&clasificacion="+clasificacion+"&tipo="+tipo+"&idCelula="+idCelula+"&op=1");
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);   
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            capa.innerHTML = ajax.responseText;
        }
    }
}


(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#modificarMiembro").validate({
                rules: {
                    nombre: "required",
                    apellido: "required",
                    procedencia: "required",
                    estadoCivil: "required",
                    nivelTeologico: "required",
                    clasificacion: "required",
                    tipo: "required",
                    telefono: {
                        required: true,
                        minlength: 8
                    },
                    edad: "required"
                },

                messages: {
                    nombre: "Campo requerido",
                    apellido: "Campo requerido",
                    procedencia: "Campo requerido",
                    estadoCivil: "Campo requerido",
                    nivelTeologico: "Campo requerido",
                    clasificacion: "Campo requerido",
                    tipo: "Campo requerido",
                    telefono: {
                        required: "Campo requerido",
                        minlength: "Debe ser de 8 numeros"
                    },
                    edad: "Campo requerido"
                    
                },//Array de msj requeridos

                submitHandler: function(form) {                 
                    modificarMiembro();
                }//Cuando ya esta completado el formulario como debe de ser se envia a la BD :-´)
            });
        }
    }
    $(D).ready(function($) {
            JQUERY4U.UTIL.setupFormValidation();
           // console.log("Entro 2");
        }
    );
} ) (jQuery, window, document);

function modificarMiembro(){
    var formData = new FormData(document.getElementById("modificarMiembro"));
    
    formData.append("accion", "modificar");//Indica el metodo o funcion
    $.ajax({
    url : "../../controladora/Miembro/controladoraMiembro.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#capa").html(data);
    });
}
function modificarMiembroConsulta(id){
    $.post("../../Interfaz/Pastor/modicarMiembroFormulario.php",
        {
            idMiembro : id
        },

        function(data)
        {
            document.getElementById("capaTabla").innerHTML="";
            $('#capa').html(data);
        }
    );
}
function eliminarMiembro(id){
    if (confirm("¿" + "Esta seguro que desea Eliminar este Miembro = " + id + "?")) {
        $.post("../../controladora/Miembro/controladoraMiembro.php", 
            {
                accion: "eliminar", 
                cedulaMiembro : id
            },

            function(data)
            {               
                $('#capa').html(data);
            });
    }
 }
 
function cargarPagina(url){
    $.post(url,
        {},
        function (data)
        {
            document.getElementById("capaTabla").innerHTML="";
            $('#capa').html(data);
        });
};