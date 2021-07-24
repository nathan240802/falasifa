<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-home bg-c-blue"></i>
<div class="d-inline">
<h5>Dashboard</h5>
<span>Statistik dan Informasi lainnya terkait Website</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
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

<div class="col-md-12 col-xl-4">
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">Kunjungan Website</h6>
<h3 class="f-w-700 text-c-blue"><?=$total_kunjungan?></h3>
<!-- <p class="m-b-0">May 23 - June 01 (2017)</p> -->
</div>
<div class="col-auto">
<i class="fas fa-eye bg-c-blue"></i>
</div>
 </div>
</div>
</div>
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">Galeri Foto</h6>
<h3 class="f-w-700 text-c-green">30,564</h3>
<!-- <p class="m-b-0">May 23 - June 01 (2017)</p> -->
</div>
<div class="col-auto">
<i class="fas fa-bullseye bg-c-green"></i>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-8 col-md-12">
<div class="card latest-update-card">
<div class="card-header">
<h5>Pengunjung berdasarkan Halaman</h5>
</div>
<div class="card-block">
  <div class="table-responsive mt-2">
  <table class="table table-bordered table-hover m-b-0">
  <thead>
  <tr>
  <th>Halaman</th>
  <th>Jumlah</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($kunjungan as $k): ?>
      <tr>
      <td><?=$k->page?></td>  <!-- memanggil data page di phpmyadmin -->
      <td><?=$k->jml_kunjungan?></td>
      </tr>
    <?php endforeach; ?>
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
