<?php

class Home extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Admin_mdl','admin');
  }
  public function index()
  {
    $this->load->view('main/index');
    $this->admin->cekDevice("Halaman Utama Web");
  }
  public function galeri()
  {
    $data['galeri']=$this->admin->get_galeri();
    $this->admin->cekDevice("Galeri Halaman Utama");
    $this->load->view('main/galeri',$data);
  }
  public function pricelist()
  {
    $this->load->view('main/pricelist');
  }
  public function instagram()
  {
    $data['instagram']= $this->db->query('SELECT* FROM tb_link_info')->result();
    $this->load->view('main/instagrampage',$data);
      $this->admin->cekDevice("Instagram Halaman Utama");
    // echo "<pre>";print_r($data['instagram']);die;
  }
  public function location()
  {
    $this->load->view('main/location');
    $this->admin->cekDevice("Lokasi Halaman Utama");
  }
}

?>
