<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{
    /**
     * halaman dashboard asisten
     *
     * @return  view
     */
    public function index() 
    {
        // set session theme
        $tema = $this->database->select("*","tema",["id"=>1]);
        
        $this->session->set_userdata('ses_tema', [
            'id_tema' => $tema[0]['id'],
            'theme' => $tema[0]['theme'],
        ]);
       // tampilkan halaman dashboard dengan data session kelas
        $this->load->view('master.php', [
            "page" => "dashboard",
            "content" => [],
        ]);
    }
}
