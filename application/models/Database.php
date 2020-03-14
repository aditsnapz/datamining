<?php
    class Database extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        function select($kolom,$tabel,$kondisi,$orderby='',$sort = 'asc'){
            $this->db->select($kolom);
            $this->db->from($tabel);
            $this->db->where($kondisi);
            $this->db->order_by($orderby, $sort);
            return $this->db->get()->result_array();
        }
        function update($tabel,$kondisi,$data){
            $this->db->where($kondisi);
            $this->db->update($tabel, $data);
            return $this->db->affected_rows();
        }
    }