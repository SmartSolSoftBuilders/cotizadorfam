<?php 	
	$empresa= $_POST['empresa'];
	$nombre= $_POST['nombre'];
	$app  = $_POST['app'];
	$antiguedad  = $_POST['antiguedad'];
	$tasafijaanual = $_POST['tasafijaanual'];
	$miembrofam = $_POST['miembrofam'];
	$cat  = $_POST['cat'];
	$sueldobruto = $_POST['sueldobruto'];
	$gestionfam = $_POST['gestionfam'];
	$sueldoneto = $_POST['sueldoneto'];
	$plazopagos = $_POST['plazopagos'];
	$creditomaximo = $_POST['creditomaximo'];
	$formapago = $_POST['formapago'];
	$pagototal = $_POST['pagototal'];
	$numpagos = $_POST['numpagos'];
    $quincenasgracia = $_POST['quincenasgracia'];
  	$creditosol =  str_replace("$", "", $_POST['creditosol']);
  	$descuentogestion = $_POST['descuentogestion'];	
	$descuento = $_POST['descuento'];	
	$p1 = $_POST['p1'];
	$telcasa= $_POST['telcasa'];
	$email= $_POST['email'];
    $nomescuela= $_POST['nomescuela'];
    $telescuela= $_POST['telescuela'];	
		
	$con=mysqli_connect("localhost","root","","fam");
	$today = date("Y-m-d H:i:s");
// Check connection
	if (mysqli_connect_errno())  
		echo "Failed to connect to MySQL: " . mysqli_connect_error();  
	$sql="INSERT INTO user (empresa_user,nombre_user,antiguedad_user,miembro_fam_user,sueldo_bruto_user,sueldo_neto_user,creditomaxi_user,creditosol_user,app_user,apm_user,tasafijaanual_user,cat_user,gestionfam_user,plazopagos_user,formapago_user,pagototal_user,numpagos_user,quincenasgracia_user,descuentogestion_user,descuento,fecha_user,telcasa_user,email_user,nomescuela_user,telescuela_user) VALUES(
			'".$empresa."',"."'".$nombre."','".$antiguedad."','".$miembrofam."','".$sueldobruto."','".$sueldoneto."','".$creditomaximo."','".$creditosol."','".$app."','".$app."',
			'".$tasafijaanual."','".$cat."','".$gestionfam."','".$plazopagos."','".$formapago."','".$pagototal."','".$numpagos."','".$quincenasgracia."','".$descuentogestion."','".$descuento."','".$today."','".$telcasa."','".$email."','".$nomescuela."','".$telescuela."')";
	
	if (!mysqli_query($con,$sql)){
		echo "Error al conectar!";
		die('Error: ' . mysqli_error());	
		}
	else{
		echo "La cotizaci&oacute;n se agreg&oacute; correctamente!";
		}
	mysqli_close($con);
?>