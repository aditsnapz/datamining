<?php

defined('BASEPATH') or exit('No direct script access allowed');
use Phpml\Classification\NaiveBayes;

class Testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TestingModel');
    }
    /**
     * halaman dashboard asisten
     *
     * @return  view
     */
    public function index() 
    {   
        $testing = $this->db->get('testing')->result_array();
        
        
       // tampilkan halaman dashboard dengan data session kelas
        $this->load->view('master.php', [
            "page" => "testing",
            "content" => [],
            "testing" => $testing,
        ]);
    }

    public function tambah() 
    {
        $data = [
            "pangkat" => $this->input->post('pangkat'),
            "jabatan" => $this->input->post('jabatan'),
            "usia" => $this->input->post('usia'),
            "masa_kerja" => $this->input->post('masa_kerja'),
            "pendidikan" => $this->input->post('pendidikan'),
            "mengajar" => $this->input->post('mengajar'),
            "kepala_sekolah" => $this->input->post('kepala_sekolah'),
            "class" => $this->input->post('class'),
        ];

        $this->db->insert('testing', $data);
        redirect(base_url('Testing'));
        


    }

    
}
