
<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-home bg-c-blue"></i>
<div class="d-inline">
<h5>Link Information</h5>
<span>kelola link di halaman website</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Link Information</a> </li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">

<div class="row">


<div class="col-xl-12 col-md-12">
<div class="card latest-update-card">
<div class="card-header">
<h5>Link Instagram</h5>
<br>
<h6 class="text-right">
<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#modal_tambah">Tambah Data</button>
<!-- data-target=untuk menampilkan elemen "modal" yang kita copas
data-toggle=untuk memanggil nama modal
data-target di php pasti bernama modal -->
</h6>
</div>
<div class="card-block">
  <div class="table-responsive mt-2">
  <table class="table table-bordered table-hover m-b-0">
  <thead>
  <tr>
  <th>Nama Link</th>
  <th>Href</th>
  <th>Action</th>
  </tr>
  </thead>
  <tbody>

  <?php foreach ($link as $l): ?>
    <tr>
    <td><?=$l->nama_link?></td>
    <td><?=$l->href?></td>
    <td>
      <a href="#" data-toggle="modal" data-target="#modal_update<?=$l->id_link?>"class="btn btn-sm btn-mat btn-info">Edit</a>
      <a href="#" data-toggle="modal" data-target="#modal_hapus<?=$l->id_link?>" class="btn btn-sm btn-mat btn-danger">Hapus</a>

    </td>
    </tr>
  <?php endforeach; ?>
<!-- foreach fungsi untuk perulangan -->
<!-- $link untuk mengambil data dari controller
as $l untuk alias -->
<!-- jika id diberi # -->




  </tbody>
  </table>
  </div>
</div>
</div>
</div>




</div>

</div>
</div>
</div>
</div>
</div>
<!-- START MODAL TAMBAH -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Tambah Link Baru</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <form class="" action="<?=base_url()?>admin/tambah_link" method="post">
    <!-- action untuk memanggil atau href ke controller -->
    <div class="form-group">
      <label>Nama Link</label>
      <input type="text" name="nama_link" required value="" class="form-control">
    </div>
   <!-- requried fungsi nya untuk memastikan data agar ter isi, jika tidak ter isi maka tidak tersimpan -->
   <!-- fungsi class form-control untuk mengatur kolom -->
   <div class="form-group">
     <label>Href</label>
     <input type="text" name="href" required value=" "class="form-control">
   </div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
<!-- Perbedaan button dan submit,kalau submit bisa menginput data, jika button tidak -->
</form>
</div>
</div>
</div>
</div>
<!-- END MODAL TAMBAH -->

<!-- START MODAL HAPUS -->
<?php foreach ($link as $l): ?>
  <div class="modal fade" id="modal_hapus<?=$l->id_link?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="modal-title">Hapus Link</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">
    <form class="" action="<?=base_url()?>admin/hapus_link" method="post">
      <!-- action untuk memanggil atau href ke controller -->
      <h6>ANDA AKAN MENGHAPUS LINK<u>[<?=$l->nama_link?>]!</u></h6>
      <input type="hidden" name="id_link" value="<?=$l->id_link?>">
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
  <button type="submit" class="btn btn-danger waves-effect waves-light ">Yes,Delete</button>
  <!-- Perbedaan button dan submit,kalau submit bisa menginput data, jika button tidak -->
  </form>
  </div>
  </div>
  </div>
  </div>
<?php endforeach; ?>

<!-- END MODAL HAPUS -->

 <!-- START MODAL UPDATE -->
 <?php foreach ($link as $l): ?>
   <div class="modal fade" id="modal_update<?=$l->id_link?>" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
   <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title">UPDATE DATA LINK</h4>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
   </div>
   <div class="modal-body">
     <form class="" action="<?=base_url()?>admin/update_link" method="post">
       <!-- action untuk memanggil atau href ke controller -->
       <div class="form-group">
         <label>Nama Link</label>
         <input type="text" name="nama_link" required value="<?=$l->nama_link?>" class="form-control">
       </div>
      <!-- requried fungsi nya untuk memastikan data agar ter isi, jika tidak ter isi maka tidak tersimpan -->
      <!-- fungsi class form-control untuk mengatur kolom -->
      <div class="form-group">
        <label>Href</label>
        <input type="text" name="href" required value="<?=$l->href?>"class="form-control">
      </div>
      <input type="hidden" name="id_link" value="<?=$l->id_link?>">

   </div>
   <div class="modal-footer">
   <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
   <!-- Perbedaan button dan submit,kalau submit bisa menginput data, jika button tidak -->
   </form>
   </div>
   </div>
   </div>
   </div>
 <?php endforeach; ?>
 <!-- END MODAL UPDATE -->
