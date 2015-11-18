(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#formularioInventario").validate({
                rules: {
                    nombreInventario: "required",
                    modeloInventario: "required",
                    marcaInventario: "required",
                    estadoInventario: "required",
                    cantidadInventario: "required",
                    descripcionInventario: "required",
                    serieInventario: "required"
                },

                messages: {
                    nombreInventario: "Campo requerido",
                    modeloInventario: "Campo requerido",
                    marcaInventario: "Campo requerido",
                    estadoInventario: "Campo requerido",
                    cantidadInventario: "Campo requerido",
                    descripcionInventario: "Campo requerido",
                    serieInventario: "Campo requerido"                    
                },//Array de msj requeridos
                submitHandler: function(form) {
                    //Cuando ya esta completado el formulario como debe de ser, se llama el método de guardar
                    insertarInventario();
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

function insertarInventario(){
    var formData = new FormData(document.getElementById("formularioInventario"));
    //alert("entro");
    formData.append("accion", "insertar");//Indica el metodo o funcion
    $.ajax({
    url : "../../Controladora/Inventario/controladoraInventario.php",
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

function modificarInventarioConsulta(id){
    $.post("../../Interfaz/Pastor/modificarInventarioFormulario.php",
        {
            serieInventario : id
        },

        function(data)
        {
            document.getElementById("capaTabla").innerHTML="";
            $('#capa').html(data);
        }
    );
}

(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#modificarInventario").validate({
                rules: {
                    nombreInventario: "required",
                    modeloInventario: "required",
                    marcaInventario: "required",
                    estadoInventario: "required",
                    cantidadInventario: "required",
                    descripcionInventario: "required"
                },

                messages: {
                    nombreInventario: "Campo requerido",
                    modeloInventario: "Campo requerido",
                    marcaInventario: "Campo requerido",
                    estadoInventario: "Campo requerido",
                    cantidadInventario: "Campo requerido",
                    descripcionInventario: "Campo requerido"                   
                },//Array de msj requeridos

                submitHandler: function(form) {                 
                    modificarInventario();
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

function modificarInventario(){
    var formData = new FormData(document.getElementById("modificarInventario"));
    
    formData.append("accion", "modificar");//Indica el metodo o funcion
    $.ajax({
    url : "../../controladora/Inventario/controladoraInventario.php",
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

function eliminarInventario(id){
    if (confirm("¿Esta seguro que desea continuar?")) {
        $.post("../../controladora/Inventario/controladoraInventario.php", 
            {
                accion: "eliminar", 
                serieInventario : id
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
function cargarPaginaOperaciones(url){
    $.post(url,
        {},
        function (data)
        {
            document.getElementById("capa").innerHTML="";
            $('#capaTabla').html(data);
        });
};