﻿var globalP1=0;
var globalP2=0;
var globalP3=0;
var globalP4=6;
var globalP5=10;
var tasaComisionGestion=2.5;
    $(document).ready(function () {
     	   $("#creditosol").maskMoney({symbol:'$ ', thousands:'', decimal:'.', symbolStay: true});
          
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
			cambiaPlazoCredito();
			var tasaFijaAnual=parseFloat( $("#tasafijaanual").val())/100;
			globalP1=(tasaFijaAnual/360)*15.2083;
			globalP2=0.01*parseFloat($("#tasafijaanual").val())/1.16;
			globalP3=(Math.pow( (1+(globalP2/360)*15.2083),24) - 1)*100;
			$("#cat").val(globalP3);						
			$("#submitHid").hide();
			$("#wijmo-button2").hide();
			$("#wijmo-button3").hide();
	});
function cambiaPlazoCredito(){
	var plazocredito=parseInt($("#quincenasgracia").val())+parseInt($("#select1").val())-2;
	$("#plazocredito").val(plazocredito);
	var creditoSolicitado=parseFloat($("#creditosol").val().replace("$",""));
	alert(creditoSolicitado);
	var capital=creditoSolicitado*Math.pow((1+globalP1),4);
	var interes=globalP1;
	var cuotas=parseInt($("#select1").val())*2;
	var CuotaMensual = capital * interes / ( 1 - Math.pow(( 1 + interes ) , -cuotas ));
	//GestionFAM
	$("#gestionfam").val(creditoSolicitado* (tasaComisionGestion/100));
	//Descuento
	$("#descuento").val(CuotaMensual.toFixed(2));
	if (creditoSolicitado>25000){
		$("#quincenasdescontar").val("24");
		$("#plazocredito").val("24");
		$("#descuentogestion").val(parseFloat($("#gestionfam").val())/24);
		}
	else{
		$("#quincenasdescontar").val("12");
		$("#plazocredito").val("14");
		$("#descuentogestion").val(parseFloat($("#gestionfam").val())/12);
		}
	//Crédito Máximo Alcanzado
	if ($("#select2").val()=='NO' && parseInt($("#antiguedad").val())>=3 ){
		$("#creditomaximo").val(parseFloat($("#sueldoneto").val())*10);
	}
	else{
		if (parseInt($("#antiguedad").val())==1)
			$("#creditomaximo").val(parseFloat($("#sueldoneto").val())*6);
		if (parseInt($("#antiguedad").val())==2)
			$("#creditomaximo").val(parseFloat($("#sueldoneto").val())*10);
		if (parseInt($("#antiguedad").val())>=3)
			$("#creditomaximo").val(parseFloat($("#sueldoneto").val())*18);					
	}
	
	$("#numpagos").val(parseInt($("#select1").val())*2);					
	//PAGO TOTAL
	$("#pagototal").val((CuotaMensual*cuotas).toFixed(2));
	}

function cotizar(){
	 var parametros = {
		"empresa" : $("#empresa").val(),
		"nombre" : $("#nombre").val(),
		"app" : $("#app").val(),
		"apm" : $("#apm").val(),
		"antiguedad" : $("#antiguedad").val(),
		"tasafijaanual" : $("#tasafijaanual").val(),
		"miembrofam" : $("#select2").val(),
		"cat" : $("#cat").val(),
		"sueldobruto" : $("#sueldobruto").val(),
		"gestionfam" : $("#gestionfam").val(),		
		"sueldoneto" : $("#sueldoneto").val(),
		"plazopagos" : $("#select1").val(),
		"creditomaximo" : $("#creditomaximo").val(),
		"formapago" : $("#formapago").val(),		
		"pagototal" : $("#pagototal").val(),		
		"numpagos" : $("#numpagos").val(),
	        "quincenasgracia" : $("#quincenasgracia").val(),
  	    "creditosol" : $("#creditosol").val(),
  	    "descuentogestion" : $("#descuentogestion").val(),
	"descuento" : $("#descuento").val(),
	    "p1" : globalP1,
	    "telcasa" : $("#telcasa").val(),
	"email" : $("#email").val(),
  	    "nomescuela" : $("#nomescuela").val(),
	    "telescuela" : $("#telescuela").val()
	 };
	 $.ajax({
	    data:  parametros,
		url:   '/test/application/models/table_model.php',
	    type:  'post',
	    beforeSend: function () {
	        $("#resultado").html("Procesando, espere por favor...");
	    },
	    success:  function (response) {
			$("#resultado").html(response);							
			$("#datos").val("Empresa:"+parametros['empresa']+"&nbsp;&nbsp;&nbsp;"+
						"Nombre:"+parametros['empresa']+"&nbsp;&nbsp;"+parametros['app']+"&nbsp;&nbsp;"+parametros['apm']+"<BR>"+
							"Teléfono Casa:"+parametros['telcasa']+"&nbsp;&nbsp;Email:"+parametros['email']+"<BR>"+
							"Nombre Escuela:"+parametros['nomescuela']+"&nbsp;&nbsp;Teléfono Escuela:"+parametros['telescuela']+"<BR>"+

							"Antiguedad:"+parametros['antiguedad']+"&nbsp;&nbsp;Tasa Fija Anual (IVA incluido):"+parametros['tasafijaanual']+"<BR>"+
							"Miembro FAM?:"+parametros['miembrofam']+"&nbsp;&nbsp;CAT*:"+parametros['cat']+"<BR>"+
							"Sueldo bruto quincenal:$"+parametros['sueldobruto']+"&nbsp;&nbsp;Gestión FAM:"+parametros['gestionfam']+"<BR>"+
							"Sueldo neto quincenal:$"+parametros['sueldoneto']+"&nbsp;&nbsp;Plazo Pagos (12,24,36 y 48):"+parametros['plazopagos']+"<BR>"+
							"Crédito máximo alcanzado:$"+parametros['creditomaximo']+"&nbsp;&nbsp;Plazo Crédito:"+parametros['plazopagos']+"<BR>"+
							"Crédito solicitado:$"+parametros['creditosol']+"&nbsp;&nbsp;Forma de pago:"+parametros['formapago']+"<BR>"+
							"Quincenas de gracia:"+parametros['quincenasgracia']+"&nbsp;&nbsp;Número de pagos:"+parametros['numpagos']+"<BR>"+							
							
							"Descuento gestión$:"+parametros['descuentogestion']+"<BR>"+							
							"Descuento:$"+parametros['descuento']+"<BR>"
							//"Pago total:$"+parametros['pagototal']+"<BR>"		
												);										
			$("#reporte").val(response);
			//$("#wijmo-button2").show();
			guardar();
	    }
	});		
}

function guardar(){
	var parametros = {
	    "empresa" : $("#empresa").val(),
		"nombre" : $("#nombre").val(),
		"app" : $("#app").val(),
		"apm" : $("#apm").val(),
		"antiguedad" : $("#antiguedad").val(),
		"tasafijaanual" : $("#tasafijaanual").val(),
		"miembrofam" : $("#select2").val(),
		"cat" : $("#cat").val(),
		"sueldobruto" : $("#sueldobruto").val(),
		"gestionfam" : $("#gestionfam").val(),		
		"sueldoneto" : $("#sueldoneto").val(),
		"plazopagos" : $("#select1").val(),
		"creditomaximo" : $("#creditomaximo").val(),
		"formapago" : $("#formapago").val(),		
		"pagototal" : $("#pagototal").val(),		
		"numpagos" : $("#numpagos").val(),
        "quincenasgracia" : $("#quincenasgracia").val(),
  	    "creditosol" : $("#creditosol").val(),
  	    "descuentogestion" : $("#descuentogestion").val(),
		"descuento" : $("#descuento").val(),
	    "p1" : globalP1,
	    "telcasa" : $("#telcasa").val(),
		"email" : $("#email").val(),
  	    "nomescuela" : $("#nomescuela").val(),
	    "telescuela" : $("#telescuela").val()
	 };
	 $.ajax({
	    data:  parametros,
		url:   '/test/application/models/user_model.php',
	    type:  'post',
	    beforeSend: function () {	        
	    },
	    success:  function (response) {
			$("#mensajeGuardar").html(response);
			$("#wijmo-button2").hide();
			$("#wijmo-button3").show();
	    }
	});		
}

function imprimir(){	
	document.forms.imprimirForm.submit();
}