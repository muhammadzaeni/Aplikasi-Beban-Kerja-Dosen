<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Kajur extends CI_Controller{

    public function index(){
        
            $this->load->view('Header2');
            $this->load->view('Navbar');
            $this->load->view('Kajur');
            $this->load->view('footer');
       
            
        }
    }


?>