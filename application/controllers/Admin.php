<?php
/**
 *
 */
class Admin extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Admin_mdl', 'admin');
    $this->load->library('upload');
    $status_login=$this->session->userdata('login');
    if ($status_login!=true) {
      redirect('auth/index');
    }
  }
  public function index()
  {
    $data['konten'] = 'admin/dashboard';
    $data['kunjungan']=$this->admin->get_kunjungan_halaman();
    $data['total_kunjungan']=$this->admin->get_total_kunjungan();
    // echo '<pre>';print_r($data['total_kunjungan']);die;
    $this->load->view('admin/template', $data);
    $this->admin->cekDevice("Dashboard Halaman Admin");

  }
  public function kategori(){
    $data['konten']= 'admin/kategori';
    $data['kategori']=$this->admin->get_kategori();
    $this->load->view('admin/template',$data);
    // echo '<pre>';print_r($data['kategori']);die;
  }
  public function galeri()
  {
    $data['time'] = date('d/m/Y H:i');
    $data['konten'] = 'admin/galeri';
    $data['galeri'] = $this->admin->get_galeri();
    // echo "<pre>";print_r($data['galeri']);die;
    $this->admin->cekDevice("Galeri Halaman Admin");
    $this->load->view('admin/template', $data);

  }
  public function linkInformation()
  {
    $data['link']=$this->db->query("SELECT * FROM tb_link_info")->result();
    // echo "<pre>";print_r($data['link']);die;
    //$this db untuk konek ke database
    //query() untuk menulis perintah yang akan dilakukan di database
    //"select untuk perintah pilih dan "*" untuk memilih semua dataUser
    //from itu untuk mengakses data dari tabel link Info
    //result untuk menampilkan data spesifik
    //echo pre untuk merapikan lalu print r untuk mengambil data yang ingin di cari, lalu die untuk menghentikan program
    $data['konten'] = 'admin/linkInformation';
    $this->load->view('admin/template', $data);
    $this->admin->cekDevice("Link Information Halaman Admin");
  }
  public function dataUser()
  {
    $data['konten'] = 'admin/dataUser';
    $data['user'] = $this->admin->get_user();
    $this->load->view('admin/template', $data);
    $this->admin->cekDevice("Data User Halaman Admin");
    // echo "<pre>";print_r($data['user']);die;
  }
  public function uploadGaleri()
  {
    $id = $this->admin->getUuid();
    $createdAt = date('Y-m-d H:i:s');
    $namaGambar = "Belum";
    $gambar = $_FILES['dataGambar'];
    $upload = $this->admin->uploadPicture($gambar);
    // echo "<pre>";print_r($upload);die;
    if($upload['status']==1){
      $namaGambar = $upload['data'];
    }
    $data = array(
      'id_galeri' => $id,
      'gambar' => $namaGambar,
      'created_at' => $createdAt
    );
    $this->db->insert('tb_galeri',$data);
    redirect('admin/galeri');
  }
  public function enkripsi()
  {
    $this->load->library('encryption');
    $key = "falasifaInd";
    $pw = "Password Saya";

    $secret_pw = $this->encryption->encrypt($pw);
    $native_pw = $this->encryption->decrypt($secret_pw);

    $data = array(
      'encode' => $secret_pw,
      'decode' => $native_pw
    );
    //untuk auto enter(seperti /n di c)
    echo "<pre>"; print_r($data);
  }
  public function tambah_link()
  {
    $nama_link=$this->input->post('nama_link');
    //$nama_link membuat fungsi Baru
    //this untuk memanggil
    //input nama variable nya
    //post untuk mengambail attribut di html
    //nama link itu  seusai dengan di html
    $href=$this->input->post('href');
    $time= date('Y-m-d H:i:s');
    $id=$this->admin->getUuid();
    //Y tahun,M bulan,D day,H jam, I menit,S second
    //admin untuk load models admin, penjelasan ada di atas
    //getUUid untuk memanggil function yang ada di Models
    $data_masuk=array(
      'id_link'=>$id,
      'nama_link'=> $nama_link,
      'href'=>$href,
      'created_at'=>$time,
      'updated_at'=>$time
      //array untuk menyatukan data di variable baru $data_masuk
      //array menggunakan koma untuk menggabung data
    );
    $this->db->insert('tb_link_info',$data_masuk);
    //untuk memanggil database
    //insert fungsi untuk menambah
    //tb_link_info adalah nama tabel di database/php my admind
    //,$data masuk adalah data yang di masukkan kedalam tabel

    redirect('admin/linkInformation');
    //fungsi redirect untuk mengarahkan ke halaman mana di controller

    // public function getUuid()
    // {
    //   $get = $this->db->query("SELECT uuid() AS uuid")->row();
    //   return $get->uuid;
    // }
    // untuk mengenrate unit id yang unik, codingan ada di models

  }
  public function hapus_link()
  {
    $id=$this->input->post('id_link');
    $this->db->query("DELETE FROM tb_link_info where id_link='$id'");
    redirect('admin/linkInformation');
  }
  public function update_link()
  {
    $id=$this->input->post('id_link');
    $nama_link=$this->input->post('nama_link');
    $href=$this->input->post('href');
    $updated_at= date('Y-m-d H:i:s');

    $data = array
    (
    'nama_link'=> $nama_link,
    'href'=> $href,
    'updated_at'=> $updated_at
    );
    $where = array
    (
      'id_link'=> $id
    );
    $this->db->update('tb_link_info',$data,$where);
    redirect('admin/linkInformation');
  }

  public function hapus_galeri()
  {
    $id_galeri=$this->input->post('id_galeri');
    $this->db->query("DELETE FROM tb_galeri where id_galeri='$id_galeri'");
    redirect('admin/galeri');
  }

  public function tambah_user()
  {
    $name=$this->input->post('name');
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $user=$this->admin->getUUid();

    $data=array(
      'id_user' =>$user,
      'name' =>$name,
      'username'=>$username,
      'password'=>$password,
      'created_at'=>date('Y-m-d H:i:s')
    );
    $this->db->insert('tb_user',$data);
    redirect('admin/dataUser');
}

public function update_user()
{
  $id=$this->input->post('id_user');
  $name=$this->input->post('name');
  $username=$this->input->post('username');
  $password=$this->input->post('password');

  $data=array(
    'name' =>$name,
    'username'=>$username,
    'password'=>$password
  );
  $where=array(
    'id_user'=>$id
  );

  $this->db->update('tb_user',$data,$where);
  redirect('admin/dataUser');
}

public function hapus_user()
{
$id_user=$this->input->post('id_user');
$this->db->query("DELETE FROM tb_user where id_user='$id_user'");
redirect('admin/dataUser');

}
}


 ?>
