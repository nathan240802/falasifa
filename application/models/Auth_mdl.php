<?php

/**
 *
 */
class Auth_mdl extends CI_Model
{
  public function cek_data_user($username,$password)
  {
    $cekuser=$this->db->query("SELECT *FROM tb_user where username='$username'")->num_rows(); //num_rows untuk menghitung berapa data pada username
    $cekpassword=$this->db->query("SELECT *FROM tb_user where username='$username'AND password='$password'")->result();//result untuk menampilkan data
    // 1.cek apakah ada username yang sesuai dengan input
    // 2.cek apakah password dan usename yang di input sesuai
    // echo "<pre>";print_r($cekpassword);die;
    if ($cekuser==1){
       if (count($cekpassword)==1){
         $response['status']=1;
         $response['message']="Login Berhasil";
         $response['id']=$cekpassword[0]->id_user;
         $response['name']=$cekpassword[0]->name;
         return $response;
       }
          else{
            $response['status']=0;
            $response['message']="PASSWORD SALAH!";
            return $response;
          }
      }
      else {
        $response['status']=0;
        $response['mesage']= "Username Tidak Tersedia";
        return $response;
      }
  }
}
  ?>
