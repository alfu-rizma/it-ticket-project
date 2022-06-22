<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        
        parent::__construct();
        $this->load->model('kerusakan_model');
        $this->load->library('form_validation');   
        $this->load->helper('url');    
		

        
    }

	public function index()
	{
		$data['kerusakan'] = $this->kerusakan_model->getAll();
        $this->load->view('home', $data);
		  
	
    }

	
}