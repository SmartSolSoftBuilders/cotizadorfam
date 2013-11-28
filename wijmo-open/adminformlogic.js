    $(document).ready(function () {
		 $( "#fechainicio" ).datepicker({ dateFormat: 'yy-mm-dd' });
 		 $( "#fechafin" ).datepicker({ dateFormat: 'yy-mm-dd' });
         $(":input[type='text'],:input[type='password'],textarea").wijtextbox();
         $("#select1").wijdropdown();
         $("#select2").wijdropdown();
         $(":input[type='radio']").wijradio();
         $(":input[type='checkbox']").wijcheckbox();
         $("#wijmo-button").button();
         $("#wijmo-button").click(function () { return false; });
  	   	 $("#wijmo-button2").button();
         $("#wijmo-button2").click(function () { return false; });
	     $("#wijmo-button3").button();
	     $("#wijmo-button3").click(function () { return false; });
//		 $("#form1").validate({
	//		rules: {
				// Definimos los campos como obligatorio
		//		fechainicio: "required",
			//	fechafin: "required",
				//}
//		});
	});

function generarexcelAJAX(){
	 var parametros = {
	    "fechainicio" : $("#fechainicio").val(),
		"fechafin" : $("#fechafin").val()
	 };	 	
	 $.ajax({
	    data:  parametros,
		url:   '/test/application/models/data_model.php',
	    type:  'post',
	    beforeSend: function () {	        
	    },
	    success:  function (response) {
			alert(response);
		}
	});
}

function generarexcel(){
 //Aqui va una validación
	if (true){
			document.forms.imprimirForm.submit();
        }
	
}

function login(){
	if ($("#psw").val()=='estrategas'){
		$("#login").hide();
		$("#contenidoadministrador").show();
	}
	else{
		alert("wrong password!");
	}
}
