<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Profile extends CI_Controller
{
    /**
     * menampilkan halaman profil asisten
     *
     * @return  view
     */
    public function index()
    {
        // tampilkan halaman profil asisten
        $tema = $this->database->select("*","tema",[
            "theme" => $this->session->userdata['ses_tema']['theme'],
        ]);
        // var_dump($tema[0]["theme"]);
        $this->load->view('master.php', [
            "content" => [
                'theme' => $tema[0]["theme"],
            ],
            "page" => "profile",
        ]);
    }

	public function style($theme)
	{
		$this->database->update(
			"tema",
			[ "id" => $this->session->userdata['ses_tema']['id_tema'] ],
			[ "theme" => $theme ]
		);
		$this->session->userdata["ses_tema"]["theme"] = $theme;
		$this->index();
	}
}

?>
