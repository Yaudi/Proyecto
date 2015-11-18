
(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            //form validation rules
            $("#formularioRegistrar").validate({
                rules: {
                    moneda: "required",
                    correo: {
                        required: true,
                        email: true//OJO que el ultimo dato del arreglo no lleva coma 
                    },
                    correo2: {
                        // esta es la validación oficial para comparar los dos campos de correo, eventualmente lo pueden usar para contraseña
                        equalTo: "#correo", 
                        required: true,
                        email: true
                    },
                    fax: {
                        required: true,
                        minlength: 9
                    },
                    telefono: {
                        required: true,
                        minlength: 8
                    },
                    calendario: "required",
                    hora: "required",
                    cedulaResidente: {
                        required: true,
                        minlength: 14
                    },
                    cedulaNacional: {
                        required: true,
                        minlength: 11
                    }
                },      

                messages: {
                    moneda: "Porfavor ingrese un monto",
                    correo: {
                        required: "Correo requirido",
                        email: "Correo debe ser valido ejemplo@ejemplo.com "
                    },
                    correo2: {
                        equalTo: "El correo no es igual",
                        required: "Correo requirido",
                        email: "Correo debe ser valido ejemplo@ejemplo.com "
                    },
                    fax: {
                        required: "Ingrese un numero de fax",
                        maxlength: "Debe ser de 8 numeros"
                    },
                    telefono: {
                        required: "Ingrese un numero de telefono",
                        minlength: "Debe ser de 8 numeros"
                    },
                    calendario: "Ingrese la fecha",
                    hora: "Ingrese la hora",
                    cedulaResidente: {
                        required: "Numero de cedula Residente requirido",
                        minlength: "Debe de ser de 12 caracteres"
                    },
                    cedulaNacional: {
                        required: "Numero de cedula cedula Nacional requirido",
                        minlength: "Debe de ser de 9 caracteres"
                    }
                    
                },//Array de msj requeridos
                submitHandler: function(form) {
                    //Cuando ya esta completado el formulario como debe de ser, se llama el método de guardar
                    guardar();
                }
            });
        }
    }
 
    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
        //Verifica que los datos ingresados sean validos  y eventualmente da el pase a la función submitHandler: function(form)  
    });
 
} ) (jQuery, window, document);


function guardar(){
	var formData = new FormData(document.getElementById("formularioRegistrar"));
    // getElementById obtiene todas la variables del formulario 
	formData.append("accion", "insertar");//Indica el metodo o funcion de la controladora
	$.ajax({
	url : "../control/ControlMascara.php",
	type : "post",
	dataType : "html",
	data : formData,
	cache : false,
	contentType : false,
	processData : false
	}).done(function(data) {
		$("#contenedor").html(data);
	});	
    cargarLista();
}


$(function(){
	$('#calendario').datepicker();
});	
$('#hora').timepicker();   
$("#fax").mask('9999 9999');
$("#telefono").mask('9999 9999');
$("#calendario").mask('99-99-9999');
$('#hora').mask('99:99 **');
$("#cedulaResidente").mask('9999 9999 9999');
$("#cedulaNacional").mask('9 9999 9999');
//Se le asigna el formato de la mascaras para las respectiva variables de html 


$(document).ready(function(){
	//$("#moneda").maskMoney();
	$("#moneda").maskMoney({showSymbol:true,symbol:"₡", decimal:",", thousands:".", allowZero:true});
	//$("#moneda").maskMoney({precision:3})

});

/*function cargarLista() {
    $.post("../interfaz/f_listaMascaras.php",
        {},
        function (data)
        {
            $('#contenedor2').html(data);
        });
}*/

$(function(){
    $.post("../interfaz/f_listaMascaras.php",
        {},
        function (data)
        {
            $('#contenedor2').html(data);
        });
});//Llama al la GUI de lista y la asigna a un contenedor  NOTA esta funcion se ejecuta sola para que eventualmente este cargada la tabla del  GUI