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
      height: 150vh;
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
  width: 55%;
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
@media (min-width:320px)  { .btn-falasifa{width: 90%} .frem{width: 300px; height: 225px;} }
@media (min-width:481px)  { .btn-falasifa{width: 90%} .frem{width: 300px; height: 225px;} }
/* POTRAIT TABLET , IPAD , LANDSCAPE PHONE */
@media (min-width:641px)  { .btn-falasifa{width: 90%} .frem{width: 300px; height: 225px;} }
@media (min-width:961px)  { .btn-falasifa{width: 55%} .frem{width: 600px; height: 400px;} }
@media (min-width:1025px) { .btn-falasifa{width: 55%} .frem{width: 600px; height: 400px;} }
@media (min-width:1281px) { .btn-falasifa{width: 55%} .frem{width: 600px; height: 400px;} }
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
            Location On Maps
          </h5>

          <hr style="height: 0,8px; color: black; background-color:#961D91;">

      </div>

    </div>
    </div>

    <div class="container">

                  <div class="row">

                    <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">


                      <!-- PENAMPILAN GOOGLE MAPS -->
                      <h5 class="text-center">
                      <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <!-- <iframe class="frem" width="300" height="225"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1295193751666!2d112.633544114511!3d-7.985558081841796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629915de54f17%3A0x295eae239ad27aa!2sFalasifa%20Indonesia!5e0!3m2!1sid!2sid!4v1623427391323!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                          <br> -->
                          <iframe class="frem"   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1295193751666!2d112.633544114511!3d-7.985558081841796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629915de54f17%3A0x295eae239ad27aa!2sFalasifa%20Indonesia!5e0!3m2!1sid!2sid!4v1623427391323!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                      </h5>
                      <!-- END -->


                      <div class="text-center mt-3">
                        <div style="padding-bottom: 30px;">
                            <a href="https://goo.gl/maps/8x4mfaKHZJEaHG8e8" target="_blank" class="btn btn-falasifa"><span><i class="fa fa-map-marker mr-2"></i> Open in Google Maps</span> </a>
                        </div>
                      </div>
                    </div>


                    <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
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

      </div>
</div>

    </div>



    <!-- <div class="footer mb-3 mt-5" style="padding: 100px;">
      <div class="text-center">
        <div class="" onclick="location.href='<?= base_url() ?>'" style="padding-bottom: 30px;">
          <button type="button" name="button" class="btn-falasifa mr-2 btn-sm" style="width: 100px;"> <i class="fa fa-arrow-left mr-2"></i> Back</button>
        </div>
      </div>
      <div class="text-center">
          <a href="" style="color: white;"><b>Copyright &copy; Falasifa Indonesia</b></a>
          <br><br>
      </div>
    </div> -->








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
<script type="text/javascript">

</script>
</html>
