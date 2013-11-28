<?php
 class Form extends CI_Controller{
  function index_respaldo()
  {
   $this->load->model('form_model'); 
   $data['result'] = $this->form_model->getData();
   $data['page_title'] = "CI Hello World App!"; 
   $this->load->view('form_view',$data);
     }
	 
  function index(){   
	$data['page_title'] = "Cotizador"; 
	$this->load->view('form_view',$data);
   }
   
  function admin(){   
   $data['page_title'] = "Cotizador"; 
   $this->load->view('adminform_view',$data);
   }
   
   function generar(){   
	$this->load->model('form_model');    
	$data['result'] = $this->form_model->generar();
   }
   
   function generarexcel(){
    $fechaInicio= $_POST['fechainicio'];
	$fechaFin= $_POST['fechafin'];
	$this->load->model('data_model');    
	$rows=$this->data_model->getData($fechaInicio,$fechaFin);
	$this->load->model('form_model');    
	$data['result'] = $this->form_model->generarexcel($rows);
   }
 }
?>