<?php defined('BASEPATH') OR exit ('No direct script access allowed!');
class Kerusakan_model extends CI_Model {

private $_table = "kerusakan";
public $id;
public $name;
public $perangkat;
public $deskripsi;


public function rules(){
    return [
        ['field' => 'name',
        'label' => 'Name',
        'rules' => 'required'],

            ['field' => 'perangkat',
            'label' => 'Perangkat', 
            'rules' => 'required'],            

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']

           

    ];
}

public function simpan(){

    $post = $this->input->post();
    $this->id = uniqid();
    $this->name = $post['name'];
    $this->perangkat = $post['perangkat'];
    $this->deskripsi = $post['deskripsi'];
    $this->db->insert($this->_table, $this);

}

public function getAll(){
    $this->db->order_by('waktu_input','desc');        
    return $this->db->get($this->_table)->result();
}
public function getByID($id){
    return $this->db->get_where($this->_table, ["id" => $id])->row();
}
public function updatedata(){
    $post = $this->input->post();
    $this->id = $post['id'];
    $this->name = $post['name'];
    $this->perangkat = $post['perangkat'];
    $this->deskripsi = $post['deskripsi'];
    $this->proses = $post['proses'];
    $this->db->update($this->_table, $this, array('id' => $post['id']));
}
public function cek_login($table,$where){     
    return $this->db->get_where($table,$where);
}  

}
?>