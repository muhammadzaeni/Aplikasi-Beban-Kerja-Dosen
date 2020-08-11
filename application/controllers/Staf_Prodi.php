<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Staf_Prodi extends CI_Controller{

    public function index(){
        
            $this->load->view('Header2');
            $this->load->view('Navbar');
            $this->load->view('Staf_prodi');
            $this->load->view('footer');
       
            
        }
    }


?>