<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerusakan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('kerusakan_model');
        $this->load->library('form_validation');   
        $this->load->helper('url');  
        
        
    }
    public function admin(){
        $data['kerusakan'] = $this->kerusakan_model->getAll();
        $this->load->view('admin', $data);
    }

    public function simpandata(){
        $kerusakan = $this->kerusakan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kerusakan->rules());

        if ($validation->run()){
            $kerusakan->simpan();            
            $this->session->set_flashdata('success','Data Berhasil disimpan!');
            redirect(site_url('home'));   
            
        }

        redirect(site_url('home'));
             
    }

    public function editdata($id = null){
        if(!isset($id)) redirect('kerusakan/admin');

        $data['kerusakan'] = $this->kerusakan_model->getByID($id);
        if (!$data['kerusakan']) show_404();
        $this->load->view('editdata',$data);
    }

    public function updatedata(){
        
        $kerusakan = $this->kerusakan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kerusakan->rules());

        if ($validation->run()){
            $kerusakan->updatedata();
            $this->session->set_flashdata('success','Data Berhasil diperbaharui');            
            redirect(site_url('kerusakan/admin'));
        }
    
    }
    public function login(){
        
        
            $data['kerusakan'] = $this->kerusakan_model->getAll();
            $this->load->view('login', $data);
    
    
    }

    public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->kerusakan_model->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("kerusakan/admin"));
 
        }else{
            echo "Username dan password salah !";
        }
    }
}