<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getData($user)
    {
        $this->db->where('username', $user);
        return $this->db->get('tabel_admin')->row();
    }

    public function login($username,$password)
    {
        $this->db->select('id_admin,username,password');
        $this->db->from('tabel_admin');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function insert()
    {
        $password = $this->input->post('password');
        $pass = MD5($password);
        $object = array(
                // 'nama' => $this->input->post('nama'),
                // 'alamat' => $this->input->post('alamat'),
                // 'email' => $this->input->post('email'),
                // 'jenkel' => $this->input->post('jenkel'),      
                // 'ttl' => $this->input->post('ttl'),
                // 'agama' => $this->input->post('agama'),
                // 'status' => $this->input->post('status'),          
                // 'pendidikan' => $this->input->post('pendidikan'),                                         
                // 'jabatan' => $this->input->post('jabatan'),               
                'username' => $this->input->post('username'),
                'password' => $pass
                
            );
        $this->db->insert('tabel_admin',$object);
    }

    public function getNama()
    {
        $this->db->select('username');
    }
}

/* End of file .php */

?>