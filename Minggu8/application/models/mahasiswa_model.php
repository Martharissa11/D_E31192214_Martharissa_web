<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Martha','Prodi'=>'TIF'],
        ['Nama'=>'Rissa','Prodi'=>'MIF'],
        ['Nama'=>'Dwi','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}