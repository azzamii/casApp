<?php
class M_barang extends CI_Model{
	

	
	function show_barang(){
		$hasil=$this->db->query("SELECT * FROM barang");
		return $hasil;
	}
	function show_stok(){
		$hasil=$this->db->query("SELECT * FROM barang");
		return $hasil;
	}
	function kelolasupp(){
		$hasil=$this->db->query("SELECT * FROM supplier");
		return $hasil;
	}
	public function hapusData($nama_supplier)
    {
		$hasil=$this->db->query("DELETE FROM supplier WHERE nama_supplier='$nama_supplier'");
        return $hasil;
    }
	public function getUserByName($kode_supplier)
    {
        return $this->db->get_where('supplier', ['kode_supplier' => $kode_supplier])->row_array(); 
    }
	public function updateSupp()
    {
        $data = [
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "nohp_supplier" => $this->input->post('nohp_supplier', true),
            "alamat_supplier" => $this->input->post('alamat_supplier', true)
        ];
        $this->db->where('kode_supplier', $this->input->post('kode_supplier'));
        $this->db->update('supplier', $data);
    }
	
	function tampil_data(){
		return $this->db->get('supplier');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function show_stokmasuk(){
		$hasil=$this->db->query("SELECT * FROM barang");
		return $hasil;
	}
	public function buatstokmasuk($kodebarang)
    {
        return $this->db->get_where('barang', ['kodebarang' => $kodebarang])->row_array(); 
    }
	
	function tambah_stok($kodebarang){
		$hasil=$this->db->query("INSERT INTO jumlah_masuk WHERE kodebarang='$kodebarang'");
		return $hasil;
	}
	function edit_supp($kode_supplier,$nama_supplier,$nohp_supplier,$alamat_supplier){
		$hasil=$this->db->query("UPDATE supplier SET nama_supplier='$nama_supplier',nohp_supplier='$nohp_supplier',alamat_supplier='$alamat_supplier' WHERE kode_supplier='$kode_supplier'");
		return $hasil;
	}
	function input_barang($data,$table){
		$this->db->insert($table,$data);
	}
	function user(){
		$hasil=$this->db->query("SELECT * FROM user");
		return $hasil;
	}	
}