<?php

class Karyawan_model extends CI_Model
{
   public function getAllKaryawan()
   {
      // format CI
      return $this->db->get('karyawan')->result_array();

      // $query = $this->db->get('karyawan');
      // return $query->result_array();
   }

   public function tambahDataKaryawan()
   {
      $data = [
         "nama" => $this->input->post('nama', true),
         "nik" => $this->input->post('nik', true),
         "email" => $this->input->post('email', true),
         "usia" => $this->input->post('usia', true),
         "jenis" => $this->input->post('jenis', true),
         "gambar" => $this->input->post('gambar', true)
      ];

      $this->db->insert('karyawan', $data);
   }

   public function hapusDataKaryawan($id)
   {
      // $this->db->where('id', $id); // alternatif dengan where dipisah
      $this->db->delete('karyawan', ['id' => $id]);
   }

   public function getKaryawanById($id)
   {
      return $this->db->get_where('karyawan', ['id' => $id])->row_array();
   }

   public function ubahDataKaryawan()
   {
      $data = [
         "nama" => $this->input->post('nama', true),
         "nik" => $this->input->post('nik', true),
         "email" => $this->input->post('email', true),
         "usia" => $this->input->post('usia', true),
         "jenis" => $this->input->post('jenis', true),
         "gambar" => $this->input->post('gambar', true)
      ];

      $this->db->where('id', $this->input->post('id'));
      $this->db->update('karyawan', $data);
   }

   public function cariDataKaryawan()
   {
      $keyword = $this->input->post('keyword', true);
      $this->db->like('nama', $keyword);
      $this->db->or_like('nik', $keyword);
      $this->db->or_like('usia', $keyword);
      $this->db->or_like('jenis', $keyword);
      $this->db->or_like('email', $keyword);
      return $this->db->get('karyawan')->result_array();
   }
}
