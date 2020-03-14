<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestingModel extends CI_model
{
   public function jumlah()
   {
        return $this->db->count_all_results('training');
   }

   public function tambah()
   {
        
   }

   public function edit()
   {
      
   }

   public function get()
   {
      $this->db->select('pangkat,jabatan,usia,masa_kerja,pendidikan,mengajar,kepala_sekolah');
      return $this->db->get('training')->result_array();
   }

   public function getclass()
   {
      $this->db->select('class');
      return $this->db->get('training')->result_array();
   }

   public function get_id($id = 0)
   {
      return $this->db->get_where('training', ['id' => $id])->result_array()[0];
   }

   public function get_custom($id = 0)
   {
      return $this->db->get_where('training', ['id_krn' => $id])->result_array();
   }

   public function hapus($id = 0)
   {
      $this->db->delete('training', ['id' => $id]);
   }

}