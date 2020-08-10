<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Input_Pendidikan extends CI_Controller{

    public function index(){
        
            $this->load->view('Header2');
            $this->load->view('Navbar');
            $this->load->view('V_Input_Pendidikan');
            $this->load->view('footer');
       
            
        }
    }


?>