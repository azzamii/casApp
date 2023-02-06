<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->model_squrity->get_squrity();
        $this->load->view('dashboard');
        
    } 
 
    function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
        $this->load->helper('url');
	}
    public function databarang(){
        $this->model_squrity->get_squrity();
        $x['data']=$this->m_barang->show_barang();
        $this->load->view('v_barang',$x);
    }
    public function stok(){
        $this->model_squrity->get_squrity();
        $y['data']=$this->m_barang->show_stok();
        $this->load->view('stokbarang',$y);
    }
    public function kelolasupp()
    {
        $this->model_squrity->get_squrity();
        $kelola['data']=$this->m_barang->kelolasupp();
        $this->load->view('kelolasupp', $kelola);
        
    } 
    public function hapus($nama_supplier)
    {
        $this->m_barang->hapusData($nama_supplier);
        redirect('Dashboard/kelolasupp');
        
    }
    public function formEdit($kode_supplier)
    {
        $this->model_squrity->get_squrity();
        $data['user'] = $this->m_barang->getUserByName($kode_supplier);
        $this->load->view('form_editsupp', $data);
    }
    public function ubahSupp()
    {
        $this->m_barang->updateSupp();
        redirect('Dashboard/kelolasupp');
    }
    function tambah_supp(){
        $kode_supp = $this->input->post('kode_supp'); 
		$nama_supp = $this->input->post('nama_supp');
		$hp_supp = $this->input->post('hp_supp');
		$alamat_supp = $this->input->post('alamat_supp');
 
		$data = array(
            'kode_supplier' => $kode_supp,
			'nama_supplier' => $nama_supp,
			'nohp_supplier' => $hp_supp,
			'alamat_supplier' => $alamat_supp
			);
		$this->m_barang->input_data($data,'supplier');
		redirect('Dashboard/kelolasupp');
	}
    public function stokmasuk(){
        $this->model_squrity->get_squrity();
        $y['data']=$this->m_barang->show_stokmasuk();
        $this->load->view('stokmasuk',$y);
    }
    public function formstok($kodebarang)
    {
        $this->model_squrity->get_squrity();
        $data['user'] = $this->m_barang->buatstokmasuk($kodebarang);
        $this->load->view('stokinsert', $data);
    }
    
    function tambah_stok(){
		$kodebarang = $this->input->post('kodebarang'); 
		$jumlah_masuk = $this->input->post('jumlah_masuk');
 
		$data = array(
            'kodebarang' => $kodebarang,
			'jumlah_masuk' => $jumlah_masuk,
			);
		$this->m_barang->input_data($data,'barangmasuk');
		redirect('Dashboard/stokmasuk');
	}
    function edit_supp(){
        $kode_supplier = $this->input->post('kode_supplier'); 
		$nama_supplier = $this->input->post('nama_supplier');
        $nohp_supplier = $this->input->post('nohp_supplier');
        $alamat_supplier = $this->input->post('alamat_supplier');
		$this->m_barang->edit_supp($kode_supplier,$nama_supplier,$nohp_supplier,$alamat_supplier);
		redirect('Dashboard/kelolasupp');



		
	}
    function tambah_barang(){
        $kodebarang = $this->input->post('kodebarang'); 
		$namabarang = $this->input->post('namabarang');
		$hargabeli = $this->input->post('hargabeli');
		$hargajual = $this->input->post('hargajual');
        $stok = $this->input->post('stok');
 
		$data = array(
            'kodebarang' => $kodebarang,
			'namabarang' => $namabarang,
			'hargabeli' => $hargabeli,
			'hargajual' => $hargajual,
            'stok' => $stok
			);
		$this->m_barang->input_barang($data,'barang');
		redirect('Dashboard/databarang');
}
function user(){
    $this->model_squrity->get_squrity();
        $x['data']=$this->m_barang->user();
        $this->load->view('user',$x);
}
public function transaksi()
{
    $this->model_squrity->get_squrity();
    $this->load->view('transaksi');
    
} 
}