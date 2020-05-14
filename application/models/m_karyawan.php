<?php

class M_karyawan extends CI_Model{
    public function tampil_data(){
        return $this->db->get('karyawan')->result_array();
    }
    public function tambahDataKaryawan(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "ttl" => $this->input->post('ttl',true),
            "jabatan" => $this->input->post('jabatan',true),
            "alamat" => $this->input->post('alamat',true),
            "lama_bekerja" => $this->input->post('lama_bekerja',true),
            "gaji" => $this->input->post('gaji',true),
            "tunjangan" => $this->input->post('tunjangan',true),
            "potongan" => $this->input->post('potongan',true),
            "cuti" => $this->input->post('cuti',true),
            "absen" => $this->input->post('absen',true)

        ];
        $this->db->insert('karyawan',$data);
    }
    public function getKaryawanById($id){
        return $this->db->get_where('karyawan',['id'=>$id])->row_array();
    }
    public function hapusDataKaryawan($id){
        $this->db->where('id',$id);
        $this->db->delete('karyawan');
    }
    public function ubahDataKaryawan(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "ttl" => $this->input->post('ttl',true),
            "jabatan" => $this->input->post('jabatan',true),
            "alamat" => $this->input->post('alamat',true),
            "lama_bekerja" => $this->input->post('lama_bekerja',true),
            "gaji" => $this->input->post('gaji',true),
            "tunjangan" => $this->input->post('tunjangan',true),
            "potongan" => $this->input->post('potongan',true),
            "cuti" => $this->input->post('cuti',true),
            "absen" => $this->input->post('absen',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('karyawan',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('karyawan')->result_array();
    }
}