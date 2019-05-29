<?php
   
   
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   class Bitacoras extends CI_Controller {
         
      function __construct(){
         parent::__construct();
         $this->load->model('Dao_bitacoras_model');
      }

      public function ccihfc()
      {
         $data['title'] = 'Creación de Bitacoras';
         $this->load->view('parts/header', $data);
         $this->load->view('Bit_CCI_HFC');
         $this->load->view('parts/footer');
         
      }
      
      public function saveCCIHFC(){
         $data = json_decode($this->input->post('data'));
         $saved = $this->Dao_bitacoras_model->saveCCIHFC($data);
         echo json_encode($saved);
      }
      
      public function frontEndBookLogs()
      {
         $data['title'] = 'Bitacoras Front Office';
         $this->load->view('parts/header', $data);
         $this->load->view('BitFrontEnd');
         $this->load->view('parts/footer');
         
         
      }

      public function savebookLogsFrontEnd()
      {
         $generalData = $this->input->post('general');
         $informacionEspecifica = $this->input->post('tipo');
         $table = $this->input->post('tabla');
         

         $saved = $this->Dao_bitacoras_model->saveBookLogsAccordingType($generalData,$informacionEspecifica,$table);

         echo json_encode($saved);
         
         
      }
   
   }
   
   /* End of file Bitacoras.php */
   
   


?>