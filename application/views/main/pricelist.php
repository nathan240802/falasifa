<!DOCTYPE html>
<html lang="en" >

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <title>Falasifa Indonesia</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/falasifa-big-logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/style/css"> -->
    <script src="https://use.fontawesome.com/633ebedb26.js"></script>
    <style media="screen">
    body{
      background: linear-gradient(-45deg, #961D91, #C80397, #DA057A, #961D91);
      /* background: white; */
      width: 100wh;
      height: 300vh;
    }
.font-falasifa {
  font-size: 14px;
  background: -webkit-linear-gradient(#961D91, #F9026D);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.btn-falasifa span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.2s;
}

.btn-falasifa span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  /* transition: 0.8s; */
}

.btn-falasifa:hover span {
  padding-right: 25px;
}

.btn-falasifa{
  width: 80%;
  padding-top:10px;
  padding-bottom:10px;
  font-weight: 600;
  background: white;
  border: none;
  color: #961D91;
  border-radius: 30px;
}
.btn-falasifa:hover{
  transition: 0.5s;
  color: white;
  background: -webkit-linear-gradient(#961D91, #F9026D);
  border: 1px solid;
  border-color:#d53a9d;
  border-radius: 30px;
  /* font-weight: bold; */
}
.btn-falasifa:hover span:after {
  opacity: 1;
  right: 0;
}
.img-falasifa{
  height: 200px;
  width: 280px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 0px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    /* height: auto; */
}
@media (min-width:320px)  { .img-falasifa{height: 300px;width: 680px;} .falasifa-list{font-size: 13px;} }
@media (min-width:481px)  { .img-falasifa{height: 300px;width: 680px;} .falasifa-list{font-size: 13px;} }
/* POTRAIT TABLET , IPAD , LANDSCAPE PHONE */
@media (min-width:641px)  { .img-falasifa{height: 300px;width: 290px;} }
@media (min-width:961px)  { .img-falasifa{height: 300px;width: 290px;} }
@media (min-width:1025px) { .img-falasifa{height: 300px;width: 290px;} }
@media (min-width:1281px) { .img-falasifa{height: 300px;width: 290px;} }
    </style>
</head>
<body>
    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="text-center" style="padding-top: 40px; padding-bottom: 10px;" onclick="location.href='<?= base_url() ?>'">
          <img src="<?= base_url() ?>assets/images/falasifa-big-logo.png" alt="" style="border-radius:100%; width: 200px; height: 200px; box-shadow: 0px 2px 10px #111;;">
          <!-- <h2 style="color: #ffffff; padding-top: 10px;">Falasifa Indonesia</h2> -->
          <h5 class="mt-4 text-white text-center">
            <!-- <button type="button" name="button" class="btn-falasifa mr-2 btn-sm" style="width: 100px;"> <i class="fa fa-arrow-left mr-2"></i> Back</button> -->
          Price List
          </h5>

          <hr style="height: 0,8px; color: black; background-color:#961D91;">

      </div>

    </div>
    </div>

    <div class="container">

                  <div class="row">


                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                      <div class="card" style="background: none; border: 1px solid; border-color: white;">
                        <div class="">
                          <div class="row">
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <img data-toggle="modal" data-target="#modaldetail" class="img-thumbnail img-falasifa" src="<?= base_url() ?>assets/images/pricelist/7.jpg" alt="">
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 12px; padding-left: 0;">
                              <h5 style="font-size:18px; color: white;" class="card-title text-center">Nama Pakaian</h5>
                              <ul class="list-group list-group-flush mt-1" style="background: none; color: white;">
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Harga : </b> Rp. 25.000 </li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Warna : </b> Pink, Green</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Material : </b> 100% Cotton</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Size : </b> M, L, XL</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b class="mt-2">Order : </b>
                                  <button onclick="location.href='https://wa.me/62895390337755';" type="button" class="btn btn-sm btn-success ml-3 mt-2" name="button"> <i class="fa fa-whatsapp mr-2"></i> Chat</button>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <li class="list-group-item" style="background: none; color: white;"> <b>Deskripsi : <br> </b>
                                Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kualitas layar gadget yang digunakan untuk melihat gambar.

  Untuk pembelian Online, mohon pertimbangkan toleransi perbedaan warna dan ukuran produk. Apabila setelah barang diterima terdapat perbedaan yang dianggap terlalu jauh dan tidak dapat diterima, silahkan ajukan penukaran barang melalui Customer Service kami.
                              </li>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                      <div class="card" style="background: none; border: 1px solid; border-color: white;">
                        <div class="">
                          <div class="row">
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <img data-toggle="modal" data-target="#modaldetail" class="img-thumbnail img-falasifa" src="<?= base_url() ?>assets/images/pricelist/1.jpg" alt="">
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 12px; padding-left: 0;">
                              <h5 style="font-size:18px; color: white;" class="card-title text-center">Nama Pakaian</h5>
                              <ul class="list-group list-group-flush mt-1" style="background: none; color: white;">
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Harga : </b> Rp. 25.000 </li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Warna : </b> Pink, Green</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Material : </b> 100% Cotton</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Size : </b> M, L, XL</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b class="mt-2">Order : </b>
                                  <button onclick="location.href='https://wa.me/62895390337755';" type="button" class="btn btn-sm btn-success ml-3 mt-2" name="button"> <i class="fa fa-whatsapp mr-2"></i> Chat</button>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <li class="list-group-item" style="background: none; color: white;"> <b>Deskripsi : <br> </b>
                                Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kualitas layar gadget yang digunakan untuk melihat gambar.

  Untuk pembelian Online, mohon pertimbangkan toleransi perbedaan warna dan ukuran produk. Apabila setelah barang diterima terdapat perbedaan yang dianggap terlalu jauh dan tidak dapat diterima, silahkan ajukan penukaran barang melalui Customer Service kami.
                              </li>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                      <div class="card" style="background: none; border: 1px solid; border-color: white;">
                        <div class="">
                          <div class="row">
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <img data-toggle="modal" data-target="#modaldetail" class="img-thumbnail img-falasifa" src="<?= base_url() ?>assets/images/pricelist/2.jpg" alt="">
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 12px; padding-left: 0;">
                              <h5 style="font-size:18px; color: white;" class="card-title text-center">Nama Pakaian</h5>
                              <ul class="list-group list-group-flush mt-1" style="background: none; color: white;">
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Harga : </b> Rp. 25.000 </li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Warna : </b> Pink, Green</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Material : </b> 100% Cotton</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Size : </b> M, L, XL</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b class="mt-2">Order : </b>
                                  <button onclick="location.href='https://wa.me/62895390337755';" type="button" class="btn btn-sm btn-success ml-3 mt-2" name="button"> <i class="fa fa-whatsapp mr-2"></i> Chat</button>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <li class="list-group-item" style="background: none; color: white;"> <b>Deskripsi : <br> </b>
                                Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kualitas layar gadget yang digunakan untuk melihat gambar.

  Untuk pembelian Online, mohon pertimbangkan toleransi perbedaan warna dan ukuran produk. Apabila setelah barang diterima terdapat perbedaan yang dianggap terlalu jauh dan tidak dapat diterima, silahkan ajukan penukaran barang melalui Customer Service kami.
                              </li>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- START KOTAK -->
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                      <div class="card" style="background: none; border: 1px solid; border-color: white;">
                        <div class="">
                          <div class="row">
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <img data-toggle="modal" data-target="#modaldetail" class="img-thumbnail img-falasifa" src="<?= base_url() ?>assets/images/pricelist/3.jpg" alt="">
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 12px; padding-left: 0;">
                              <h5 style="font-size:18px; color: white;" class="card-title text-center">Nama Pakaian</h5>
                              <ul class="list-group list-group-flush mt-1" style="background: none; color: white;">
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Harga : </b> Rp. 25.000 </li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Warna : </b> Pink, Green</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Material : </b> 100% Cotton</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Size : </b> M, L, XL</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b class="mt-2">Order : </b>
                                  <button onclick="location.href='https://wa.me/62895390337755';" type="button" class="btn btn-sm btn-success ml-3 mt-2" name="button"> <i class="fa fa-whatsapp mr-2"></i> Chat</button>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <li class="list-group-item" style="background: none; color: white;"> <b>Deskripsi : <br> </b>
                                Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kualitas layar gadget yang digunakan untuk melihat gambar.

                                  Untuk pembelian Online, mohon pertimbangkan toleransi perbedaan warna dan ukuran produk. Apabila setelah barang diterima terdapat perbedaan yang dianggap terlalu jauh dan tidak dapat diterima, silahkan ajukan penukaran barang melalui Customer Service kami.
                              </li>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END KOTAK -->


                    <!-- START KOTAK -->
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                      <div class="card" style="background: none; border: 1px solid; border-color: white;">
                        <div class="">
                          <div class="row">
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <img data-toggle="modal" data-target="#modaldetail" class="img-thumbnail img-falasifa" src="<?= base_url() ?>assets/images/pricelist/6.jpg" alt="">
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 12px; padding-left: 0;">
                              <h5 style="font-size:18px; color: white;" class="card-title text-center">Nama Pakaian</h5>
                              <ul class="list-group list-group-flush mt-1" style="background: none; color: white;">
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Harga : </b> Rp. 25.000 </li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Warna : </b> Pink, Green</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Material : </b> 100% Cotton</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b>Size : </b> M, L, XL</li>
                                <li class="list-group-item falasifa-list" style="background: none; color: white;"> <b class="mt-2">Order : </b>
                                  <button onclick="location.href='https://wa.me/62895390337755';" type="button" class="btn btn-sm btn-success ml-3 mt-2" name="button"> <i class="fa fa-whatsapp mr-2"></i> Chat</button>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <li class="list-group-item" style="background: none; color: white;"> <b>Deskripsi : <br> </b>
                                Warna yang terlihat pada gambar mungkin tidak 100% sama dengan produk yang sebenarnya, disebabkan faktor cahaya pada pengambilan gambar, atau kualitas layar gadget yang digunakan untuk melihat gambar.

                                  Untuk pembelian Online, mohon pertimbangkan toleransi perbedaan warna dan ukuran produk. Apabila setelah barang diterima terdapat perbedaan yang dianggap terlalu jauh dan tidak dapat diterima, silahkan ajukan penukaran barang melalui Customer Service kami.
                              </li>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END KOTAK -->


      </div>
</div>
    </div>

    <div class="footer mb-3 mt-5" style="padding: 100px;">
      <div class="text-center">
        <div class="" onclick="location.href='<?= base_url() ?>'" style="padding-bottom: 30px;">
          <button type="button" name="button" class="btn-falasifa mr-2 btn-sm" style="width: 100px;"> <i class="fa fa-arrow-left mr-2"></i> Back</button>
        </div>
      </div>
      <div class="text-center">
          <a href="" style="color: white;"><b>Copyright &copy; Falasifa Indonesia</b></a>
          <br><br>
      </div>
    </div>


    <!-- MODAL -->
    <div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Falasifa Indonesia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-thumbnail" src="<?= base_url() ?>assets/images/galeri/14.jpg" alt="">
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    <!-- END MODAL -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- This pre-lander was created by Brandon Nilsson -->
    <!-- You're welcome to edit, reproduce and change this template as long as original contributation stays present on the website at all times.  -->
</body>
<script type="text/javascript">

</script>
</html>
