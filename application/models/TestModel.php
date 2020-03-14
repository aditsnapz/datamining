<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestModel extends CI_model
{
   public function jumlah()
   {
        return $this->db->count_all_results('dummy');
   }

   public function tambah()
   {
        
   }

   public function edit()
   {
      
   }

   public function get()
   {
      $this->db->select('age,income,student,rating');
      return $this->db->get('dummy')->result_array();
   }

   public function getclass()
   {
      $this->db->select('class');
      return $this->db->get('dummy')->result_array();
   }

   public function get_id($id = 0)
   {
      return $this->db->get_where('dummy', ['id' => $id])->result_array()[0];
   }

   public function get_custom($id = 0)
   {
      return $this->db->get_where('dummy', ['id_krn' => $id])->result_array();
   }

   public function hapus($id = 0)
   {
      $this->db->delete('dummy', ['id' => $id]);
   }

}