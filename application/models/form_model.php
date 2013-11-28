<?php
class Form_model extends CI_Model {
 
    function Form_model()
    {
        // Call the Model constructor
        parent::__construct();
    }
     
    function getData()
	{
	//Query the data table for every record and row
	$query = $this->db->get('user');
		
	if ($query->num_rows() > 0)
	{
		return $query->result();
	}else{
		//show_error('Database is empty!');
	}
  } 
  
   public function generar() {
		ob_end_clean();
		ini_set("memory_limit","64M");		
		$datoHeader=$_POST['datos'];		
		$dato=$_POST['reporte'];
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('FAM');
        $pdf->SetTitle('Cotizador');
        $pdf->SetSubject('Resultado');
        $pdf->SetKeywords('TCPDF, PDF, ');
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
// Establecer el tipo de letra
 
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('freemono', '', 14, '', true);
 
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
//fijar efecto de sombra en el texto
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 // Establecemos el contenido para imprimir
        //preparamos y maquetamos el contenido a crear
        $html = $datoHeader.$dato;
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);		
		
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Cotizacion.pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
	
	public function generarexcel($rows){		
		$fila=2;
		foreach($rows as $row){
			//load our new PHPExcel library
			$this->load->library('excel');
			//activate worksheet number 1
			$this->excel->setActiveSheetIndex(0);
			//name the worksheet
			$this->excel->getActiveSheet()->setTitle('reporte');		
			//set cell A1 content with some text
			$this->excel->getActiveSheet()->setCellValue('A1', 'Fecha');
			//change the font size
			$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
			//make the font become bold
			$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('A'.$fila, $row['fecha_user']);			
			
			//set cell A1 content with some text
			$this->excel->getActiveSheet()->setCellValue('B1', 'Empresa');
			//change the font size
			$this->excel->getActiveSheet()->getStyle('B1')->getFont()->setSize(12);
			//make the font become bold
			$this->excel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('B'.$fila, $row['empresa_user']);			
			
			$this->excel->getActiveSheet()->setCellValue('C1', 'Nombre:');
			//change the font size
			$this->excel->getActiveSheet()->getStyle('C1')->getFont()->setSize(12);
			//make the font become bold
			$this->excel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('C'.$fila, $row['nombre_user']." ".$row['app_user']." ".$row['apm_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('D1', 'Antiguedad');
			$this->excel->getActiveSheet()->getStyle('D1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('D'.$fila, $row['antiguedad_user']);			
			$this->excel->getActiveSheet()->setCellValue('E1', 'Tasa fija anual (IVA incluido):');			
			$this->excel->getActiveSheet()->getStyle('E1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('E'.$fila, $row['tasafijaanual_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('F1', 'Miembro FAM?');
			$this->excel->getActiveSheet()->getStyle('F1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('F'.$fila, $row['miembro_fam_user']);			
			$this->excel->getActiveSheet()->setCellValue('G1', 'CAT');			
			$this->excel->getActiveSheet()->getStyle('G1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('G'.$fila, $row['cat_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('H1', 'Sueldo Bruto Quincenal');
			$this->excel->getActiveSheet()->getStyle('H1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('H'.$fila, $row['sueldo_bruto_user']);			
			$this->excel->getActiveSheet()->setCellValue('I1', 'Gestion FAM');			
			$this->excel->getActiveSheet()->getStyle('I1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('I'.$fila, $row['gestionfam_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('J1', 'Sueldo Neto Quincenal');
			$this->excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('J'.$fila, $row['sueldo_neto_user']);			
			$this->excel->getActiveSheet()->setCellValue('K1', 'Plazo pagos(12,24,36,48)');			
			$this->excel->getActiveSheet()->getStyle('K1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('K'.$fila, $row['plazopagos_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('L1', 'Credito Maximo Alcanzado:');
			$this->excel->getActiveSheet()->getStyle('L1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('L'.$fila, $row['creditomaxi_user']);			
			$this->excel->getActiveSheet()->setCellValue('M1', 'Numero de pagos');			
			$this->excel->getActiveSheet()->getStyle('M1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('M1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('M'.$fila, $row['numpagos_user']);					
			
			$this->excel->getActiveSheet()->setCellValue('N1', 'Credito Solicitado');
			$this->excel->getActiveSheet()->getStyle('N1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('N1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('N'.$fila, $row['creditosol_user']);			
			$this->excel->getActiveSheet()->setCellValue('O1', 'Descuento');			
			$this->excel->getActiveSheet()->getStyle('O1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('O1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('O'.$fila, $row['descuento']);					
			
			$this->excel->getActiveSheet()->setCellValue('P1', 'Telefono Casa');
			$this->excel->getActiveSheet()->getStyle('P1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('P1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('P'.$fila, $row['telcasa_user']);			
			$this->excel->getActiveSheet()->setCellValue('Q1', 'E-Mail');			
			$this->excel->getActiveSheet()->getStyle('Q1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('Q1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('Q'.$fila, $row['email_user']);					
						$this->excel->getActiveSheet()->setCellValue('R1', 'Nombre Escuela');
			$this->excel->getActiveSheet()->getStyle('R1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('R1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('R'.$fila, $row['nomescuela_user']);			
			$this->excel->getActiveSheet()->setCellValue('S1', 'Telefono Escuela');			
			$this->excel->getActiveSheet()->getStyle('S1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('S1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('S'.$fila, $row['telescuela_user']);					
						$this->excel->getActiveSheet()->setCellValue('T1', 'Credito Total');
			$this->excel->getActiveSheet()->getStyle('T1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('T1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('T'.$fila, $row['pagototal_user']);			
			$this->excel->getActiveSheet()->setCellValue('U1', 'Pago Total');			
			$this->excel->getActiveSheet()->getStyle('U1')->getFont()->setSize(12);$this->excel->getActiveSheet()->getStyle('U1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->setCellValue('U'.$fila, $row['pagototal_user']);					
				
			
			//merge cell A1 until D1
			//$this->excel->getActiveSheet()->mergeCells('A'.$fila.':D'.$fila);
			//set aligment to center for that merged cell (A1 to D1)
			$this->excel->getActiveSheet()->getStyle('A'.$fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$fila++;
		}		
		 
		$filename='reporte.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
					 
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
}
?>