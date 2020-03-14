<?php

defined('BASEPATH') or exit('No direct script access allowed');
use Phpml\Classification\NaiveBayes;

class Hasil extends CI_Controller
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
        $samples = $this->TestingModel->get();
        $id2 = function($data) {
            return [
                0 => $data['pangkat'],
                1 => $data['jabatan'],
                2 => $data['usia'],
                3 => $data['masa_kerja'], 
                4 => $data['pendidikan'],
                5 => $data['mengajar'],
                6 => $data['kepala_sekolah']
            ];
        };
        $samples = array_map($id2,$samples);
        // var_dump($samples);
       
        
        
        $labels = $this->TestingModel->getclass();
        $id = function($data) {
            return $data['class'];
        };
        $labels = array_map($id,$labels);
        
        // var_dump($labels);
        

        // die();
        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);
        //var_dump($classifier->discreteProb["IV/a"]);
        //echo '<br><br>';
        //var_dump($classifier->discreteProb["Bukan IV/a"][0]);
        //perbandingan data iv/a dan bukan iv/a
        //var_dump($classifier->p);

        // var_dump($classifier->train($samples,$labels));
        //die();
        //$classifier->predict([3, 1, 1]);
        // return 'a'
        // var_dump($pangkat.$jabatan.$usia.$masa_kerja.$pendidikan.$mengajar.$kepala_sekolah);
        // var_dump( $classifier->predict([$pangkat, $jabatan, $usia, $masa_kerja, $pendidikan, $mengajar, $kepala_sekolah]));
        // var_dump( $classifier->predict(['Pengatur Tingkat I', 'Guru Madya', 40, 34, 'SPG', 'DINAS', 'Guru']));

        //$hasil = $classifier->predict([$pangkat, $jabatan, $usia, $masa_kerja, $pendidikan, $mengajar, $kepala_sekolah]);
        // var_dump($classifier->std);
        //$hasil = [];
        $tp = 0;
        $fn = 0;
        $fp = 0;
        $tn = 0;
        
        foreach($testing as &$data) {
            $data['klasifikasi'] = $classifier->predict([
                                        $data['pangkat'], 
                                        $data['jabatan'], 
                                        $data['usia'], 
                                        $data['masa_kerja'], 
                                        $data['pendidikan'], 
                                        $data['mengajar'], 
                                        $data['kepala_sekolah']]);
            if($data['klasifikasi'] == 'IV/a' && $data['class'] == 'IV/a') {
                $tp++;
            } else if($data['klasifikasi'] == 'Bukan IV/a' && $data['class'] == 'IV/a') {
                $fn++;
            } else if($data['klasifikasi'] == 'IV/a' && $data['class'] == 'Bukan IV/a') {
                $fp++;
            } else {
                $tn++;
            }
        }
        // var_dump($testing);
        // echo '<br><br>';
        // var_dump($count1);
        $perhitungan['tp'] = $tp;
        $perhitungan['fn'] = $fn;
        $perhitungan['fp'] = $fp;
        $perhitungan['tn'] = $tn;
        // var_dump(count($negatif));
        
        // die();
        $akurasi = ($tp+$tn)/($tp+$fn+$fp+$tn)*100;
        $presisi = ($tp)/($tp+$fp)*100;
        $recall = ($tp)/($tp+$fn)*100;
        $error = 100-$akurasi;

        $this->load->view('master.php', [
            "page" => "hasil",
            "content" => [],
            "akurasi" => $akurasi,
            "presisi" => $presisi,
            "recall" => $recall,
            "error" => $error,
            "perhitungan" => $perhitungan,
            "testing" => $testing,
            "perbandingan" => $classifier->p,
            "discrete" => $classifier->discreteProb,
        ]);
    }
}
