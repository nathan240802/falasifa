<?php
/**
 *
 */
class Admin_mdl extends CI_Model
{
  public function getUuid()
  {
    $get = $this->db->query("SELECT uuid() AS uuid")->row();
    return $get->uuid;
  } //get unik id
  public function cekDevice($page="Page Not Found")
  {
    $this->load->library('user_agent');
    $data = array(
      'id' => $this->getUUid(),
      'browser' => $this->agent->browser(),
      'platform' => $this->agent->platform(),
      'log_time' => date('Y-m-d H:i:s'),
      'page'=> $page
    );
    $this->db->insert('tb_kunjungan_user',$data);
    // echo "<pre>"; print_r($data);die;
  }
  public function uploadPicture($gambar)
  {
    $config['upload_path'] = './assets/file_upload'; #FOLDER PENYIMPANAN UNTUK MENYIMPAN FILE
    $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp'; #EKSTENSI FILE YANG DIPERBOLEHKAN UNTUK DI UPLOAD
    $config['encrypt_name'] = TRUE; #ENKRIPSI NAMA GAMBAR
    $this->upload->initialize($config); #INIALISASI KETENTUAN FILE YANG AKAN DI UPLOAD

    if (!empty($gambar['name'])) { #CEK APAKAH GAMBAR YANG DIUPLOAD TIDAK KOSONG
      if ($this->upload->do_upload('dataGambar')) { #UPLOAD GAMBAR
        $srcGambar = $this->upload->data();
        // COMPRESS IMAGE
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/file_upload/'.$srcGambar['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '50%';
        $config['width'] = 600;
        $config['height'] = 400;
        $config['new_image'] = './assets/file_upload/'.$srcGambar['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $response['status'] = 1;//1 berarti true
        $response['message'] = "Gambar sukses di upload !!";
        $response['data'] = $srcGambar['file_name'];
        return $response;
      }
      else{
        $response['status'] = 0;
        $response['message'] ="COMPRESS GAGAL!";
        return $response;
      }
    }else {
      $response['status'] = 0;//false
      $response['message'] = "Gambar tidak terupload !!";
      return $response;
    }
  }
  public function get_kunjungan_halaman()
  {
    $this->db->select('page');//memilih dari file yang ada di php my admin
    $this->db->select("COUNT(*) as jml_kunjungan");
    $this->db->from('tb_kunjungan_user');
    $this->db->group_by('page');
    $data=$this->db->get()->result(); //untuk menyatukan this db di atas jadi satu variable
    return $data;
  }
  public function get_total_kunjungan()
  {
    $this->db->select('*');
    $this->db->from('tb_kunjungan_user');
    $data=$this->db->get()->result();
    return count($data);
  }
  public function get_galeri()
  {
    $this->db->select('*');
    $this->db->from('tb_galeri');
    $data=$this->db->get()->result();
    return $data;
  }

  public function get_user()
  {
    $this->db->select('*');
    $this->db->from('tb_user');
    $data=$this->db->get()->result();
    return $data;
  }
  public function get_kategori()
  {
    $this->db->select('*');
    $this->db->from('tb_kategori');
    $data=$this->db->get()->result();
    return $data;
  }


}

 ?>
