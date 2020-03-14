<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Training extends CI_Controller
{
    /**
     * halaman dashboard asisten
     *
     * @return  view
     */
    public function index() 
    {
        // set session theme
        $training = $this->db->get('training')->result_array();
        
        
       // tampilkan halaman dashboard dengan data session kelas
        $this->load->view('master.php', [
            "page" => "training",
            "content" => [],
            "training" => $training,
        ]);
    }
}
