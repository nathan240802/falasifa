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
    .linktree {
  width: 200px;
  height: 200px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: 50% 50%;
}
.font-falasifa {
  font-size: 14px;
  background: -webkit-linear-gradient(#961D91, #F9026D);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.out-falasifa{
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
  width: 55%;
  padding-top:10px;
  padding-bottom:10px;
  font-weight: 600;
  background: -webkit-linear-gradient(#961D91, #F9026D);
  border: none;
  color: white;
  border-radius: 30px;
}
.btn-falasifa:hover{
  transition: 0.5s;
  background: #961D91;
  color: white;
  border: 1px solid;
  border-color:#d53a9d;
  border-radius: 30px;
  /* font-weight: bold; */
}


.btn-falasifa:hover span:after {
  opacity: 1;
  right: 0;
}
@media (min-width:320px)  { .btn-falasifa{width: 90%} }
@media (min-width:481px)  { .btn-falasifa{width: 90%} }
/* POTRAIT TABLET , IPAD , LANDSCAPE PHONE */
@media (min-width:641px)  { .btn-falasifa{width: 90%} }
@media (min-width:961px)  { .btn-falasifa{width: 55%} }
@media (min-width:1025px) { .btn-falasifa{width: 55%} }
@media (min-width:1281px) { .btn-falasifa{width: 55%} }



    </style>
</head>
<body>
    <div class="container">
    <div class="col-xs-12">
      <div class="text-center" style="padding-top: 40px; padding-bottom: 10px;" onclick="location.href='<?= base_url() ?>'">
          <img class="backdrop linktree"style="background-image: url(<?= base_url() ?>assets/images/falasifa-big-logo.png);">
          <!-- <h2 style="color: #ffffff; padding-top: 10px;">Falasifa Indonesia</h2> -->
          <h5 class="mt-4">Custom Made & Ready To Wear</h5>

          <hr style="height: 0,8px; color: black; background-color:#961D91;">
      </div>

    </div>
    </div>

    <img src="<?= base_url() ?>assets/images/falasifa-logo.png" alt="">

    <div class="col-xs-12 col-lg-12">
            <div class="text-center">
              <?php foreach ($instagram as $i): ?>
                <div style="padding-bottom: 30px;">
                    <a href="<?=$i->href?>" target="_blank"  class="btn btn-falasifa"><span><i class="fa fa-instagram mr-2"></i> <?=$i->nama_link?></span></a>
                </div>
              <?php endforeach; ?>
              <!-- foreach untuk looping -->
      


            </div>
    </div>
    <div class="col-lg-12 mt-3">
      <div class="text-center">
        <div class="" onclick="location.href='<?= base_url() ?>'" style="padding-bottom: 30px;">
          <button type="button" name="button" class="btn-falasifa mr-2 btn-sm" style="width: 100px;"> <i class="fa fa-arrow-left mr-2"></i> Back</button>
        </div>
      </div>
    </div>





    <div class="footer mb-3 mt-5" style="padding: 100px;">
      <div class="text-center">
          <a href="" style="color: black;"><b>Copyright &copy; Falasifa Indonesia</b></a>
          <br><br>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- This pre-lander was created by Brandon Nilsson -->
    <!-- You're welcome to edit, reproduce and change this template as long as original contributation stays present on the website at all times.  -->
</body>

</html>
