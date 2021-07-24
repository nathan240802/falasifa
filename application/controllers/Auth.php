<?php
class Auth extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('session');
    $this->load->model('Auth_mdl','auth');
  }
  public function index()
  {
    $this->load->view('auth/login');
    // echo '<pre>';print_r($data['total_kunjungan']);die;

  }
  public function cek_login()
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $eksekusi=$this->auth->cek_data_user($username,$password);
    // echo "<pre>";print_r($eksekusi);die;
    if ($eksekusi['status']==1) {
      $session['login']=true;
      $session['id']=$eksekusi['id'];
      $session['name']=$eksekusi['name'];
      $this->session->set_userdata($session);//library untuk mengatur login dengan data apa
      redirect('admin/index');
    }
    else {
      redirect('auth/index');
    }

  }

  public function logout()
  {
    $this->session->sess_destroy();//untuk menghancurkan kondisi login (session adalah library)
    redirect('auth/index');
  }
}


  ?>
