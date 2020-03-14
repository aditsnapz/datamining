<?php

defined('BASEPATH') or exit('No direct script access allowed');
use Phpml\Classification\NaiveBayes;

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TestModel');
    }
    /**
     * halaman dashboard asisten
     *
     * @return  view
     */
    public function index() 
    {
        
        $samples = $this->TestModel->get();
        
        $samples2 = [['aku',3,2],['kamu',4,5],['aku',2,1],['aku',2,1]];
        
        $id2 = function($data) {
            return [0 => $data['age'],1 => $data['income'],2 => $data['student'],3 => $data['rating']];
        };
        $samples = array_map($id2,$samples);
        var_dump($samples);
        echo '<br><br>';
        var_dump($samples2);
        
        $labels2 = ['a','b','a','b'];
        $labels = $this->TestModel->getclass();
        $id = function($data) {
            return $data['class'];
        };
        $labels = array_map($id,$labels);
        echo '<br><br>';
        var_dump($labels);
        echo '<br><br>';
        var_dump($labels2);

        // die();
        $classifier = new NaiveBayes();
        $classifier->train(array_values($samples), $labels);
        var_dump($classifier->std);
        var_dump($classifier->train($samples,$labels));
        //die();
        //$classifier->predict([3, 1, 1]);
        // return 'a'
        var_dump( $classifier->predict(['<30', 'Medium', 'Yes', 'Fair']));
        // var_dump($classifier->std);
        die();
        $classifier->predict([3, 1, 1], [1, 4, 1]);
        // return ['a', 'b']
        
        $this->load->view('master.php', [
            "page" => "test",
            "content" => [],
            "classifier" => $classifier,
        ]);
    }
}
