(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#formularioCelula").validate({
                rules: {
                    nombreCelula: "required",
                    ubicacionCelula: "required"
                },      

                messages: {
                    nombreCelula: "Nombre de la Celula requerido",
                    ubicacionCelula: "ubicacion de la Celula requerido"
                },
                submitHandler: function(form) {
                    //Cuando ya esta completado el formulario como debe de ser, se llama el método de guardar
                    crearCelula();
                }
            });
        }
    }
 
    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
        //Verifica que los datos ingresados sean validos  y eventualmente da el pase a la función submitHandler: function(form)  
    });
 
} ) (jQuery, window, document);

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
function cargarPagina(url){
    $.post(url,
        {},
        function (data)
        {
            document.getElementById("capaTabla").innerHTML="";
            $('#capa').html(data);
        });
};
function crearCelula(){
    var formData = new FormData(document.getElementById("formularioCelula"));
    
    formData.append("accion", "insertar");//Indica el metodo o funcion
    $.ajax({
    url : "../../Controladora/Celula/controladoraCelula.php",
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