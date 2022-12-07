<?php
$header = file_get_contents("./template/header.html");
$header = str_replace("mochil", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - Mobiliario", $header);
$header = str_replace("foto1Slide", "img/bg/5.jpg", $header);
$header = str_replace("foto2Slide", "img/bg/6.jpg", $header);
$header = str_replace("foto3Slide", "img/bg/7.jpg", $header);
$header = str_replace("<!--fotos-->", '<div class="swiper-slide" data-slide-bg="img/bg/11.jpg">                    <div class="swiper-slide-caption section-lg">                        <div class="container">                            <div class="row">                                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">                                </div>                            </div>                        </div>                    </div>                </div>', $header);
$header = str_replace("<!--fotos1-->", '<div class="swiper-slide" data-slide-bg="img/bg/12.jpg">                    <div class="swiper-slide-caption section-lg">                        <div class="container">                            <div class="row">                                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">                                </div>                            </div>                        </div>                    </div>                </div>', $header);
$header = str_replace("<!--fotos2-->", '<div class="swiper-slide" data-slide-bg="img/bg/13.jpg">                    <div class="swiper-slide-caption section-lg">                        <div class="container">                            <div class="row">                                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">                                </div>                            </div>                        </div>                    </div>                </div>', $header);
$header = str_replace("<!--fotos3-->", '<div class="swiper-slide" data-slide-bg="img/bg/14.jpg">                    <div class="swiper-slide-caption section-lg">                        <div class="container">                            <div class="row">                                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">                                </div>                            </div>                        </div>                    </div>                </div>', $header);
$header = str_replace("<!--fotos4-->", '<div class="swiper-slide" data-slide-bg="img/bg/15.jpg">                    <div class="swiper-slide-caption section-lg">                        <div class="container">                            <div class="row">                                <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">                                </div>                            </div>                        </div>                    </div>                </div>', $header);



$header = str_replace("mainTitleTexto", "mobiliario", $header);


echo $header;

?>

<!-- MAIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="./js/lightgallery-all.min.js"></script>
<script src="./js/jquery.mousewheel.min.js"></script>
<section class="section bg-default section-md">
  <div class="container">
    <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">

      <style>
        .backgroundText {
          width: 100%;
          background: #EEE;
          right: 20%;
          top: 50px;
          margin-bottom: 15px;
          font-size: 27px;
          text-align: justify;
          padding: 25px;
          color: black;
        }
      </style>

      <div style="text-align: -moz-center;text-align: -webkit-center; margin-top:20px;margin-bottom:20px;   border-radius: 20px;">
        <div class=" backgroundText" style="text-align: -moz-center;text-align: -webkit-center;border-radius: 20px;">
          <h3 style=" margin-bottom: 10px;color: black;">¿Qué hacemos?</h3>
          <div style="margin-bottom: 20px;font-size:19px" class="lineMainTitleTextSecond"></div>
          Asesoramos, diseñamos, fabricamos, e instalamos, mobiliario para oficinas y call centers.
        </div>
      </div>

      <div style="margin-top: 80px;">
        <span class="titleTec" style="color:black">
          NUESTRA FÁBRICA
        </span>
        <div class="lineTitle"></div>

        <span class="titleTec" style="color:black">
          Certificación ISO 9001:2015
        </span>


        <div class="row" style="margin-top: -10px;">
          <div class="col-lg-12">
            <div class="row" style="margin-top: 10px;">
              <div class="col-4">
                <!--Box counter-->
                <div class="box-counter">
                  <p class="box-counter-title">Metros cuadrados de fabrica </p>

                  <div class="box-counter-main" style="margin-top: 0px;">
                    <div class="counter"> 9400</div>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <!--Box counter-->
                <div class="box-counter">
                  <p class="box-counter-title">Empleados</p>
                  <div class="box-counter-main" style="margin-top: 0px;">
                    <div class="counter">300</div>
                  </div>
                </div>
              </div>



              <div class="col-4">
                <!--Box counter-->
                <div class="box-counter">
                  <p class="box-counter-title">Años de Experiencia</p>
                  <div class="box-counter-main" style="margin-top: 0px;">
                    <div class="counter">27</div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>

        <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
          <div class="container-fluid">
            <!-- Owl Carousel-->
            <style>
              .thumbnail-mary img {
                height: 195px;
                object-fit: cover;
              }
            </style>
            <div id="carrusel" class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="20" data-autoplay="true" data-nav="true" data-dots="true">
              <!-- Thumbnail Classic-->

              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/DSC00011.JPG">
                <div data-responsive="./img/mobiliario/Planta/DSC00011.JPG"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/DSC00011.JPG" alt="" width="195" height="195" /></a>
                </div>
              </article>

              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/DSC00038.JPG">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/DSC00038.JPG"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/DSC00038.JPG" alt="" width="195" height="195" /></a>
                </div>
              </article>

              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/DSC03271.JPG">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/DSC03271.JPG"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/DSC03271.JPG" alt="" width="195" height="195" /></a>
                </div>
              </article>


              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-403.jpg">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-403.jpg"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-403.jpg" alt="" width="195" height="195" /></a>
                </div>
              </article>


              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-405.jpg">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-405.jpg"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-405.jpg" alt="" width="195" height="195" /></a>
                </div>
              </article>


              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-40.jpg">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-40.jpg"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-40.jpg" alt="" width="195" height="195" /></a>
                </div>
              </article>


              <article class="thumbnail thumbnail-mary" data-src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-41.jpg">
                <div class="thumbnail-mary-caption" data-responsive="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-41.jpg"><a class="icon fl-bigmug-line-zoom60" href=""><img src="./img/mobiliario/Planta/PHOTO-2018-09-03-10-39-41.jpg" alt="" width="195" height="195" /></a>
                </div>
              </article>

            </div>
          </div>
        </section>

        <span class="mainTitleTextFirst" style="color: black;">Nuestros Productos
        </span>
        <span class="mainTitleTextSecond" style="color: black;">UN UNIVERSO DE SOLUCIONES PRODUCTIVAS
        </span>
        <div class="lineMainTitleTextSecond">
        </div>

        <style>
          .mobiliario .row {
            margin-top: 90px;
          }

          .mobiliario .card {
            width: 90%;
            height: 500px;
            display: inline-block;
            margin-top: 50px;
            border: 0;
            background-color: #EEEEEE;
            height: 420px;
            padding-top: 20%;
          }

          .mobiliario .row a {
            position: absolute;
            top: 380px;
            left: 41%;
          }

          .imgOjo {
            bottom: 40px;
            opacity: 0.6;
          }

          .imgOjo:hover {
            opacity: 1;
            transform: translateY(-5px);
          }
        </style>
        <div class="mobiliario">



          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/escritorios.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Escritorios</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=1"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/mesas.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Mesas de</span>
                  <span class="titleCard">Reuniones</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=2"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>





            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/archivos.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Archivos</span>
                  <span class="titleCard">Móviles</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=3"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/sillas.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Sillas</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=4"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>




            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/fleximodulos.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Fleximodulos</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=5"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>


            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/sistemasModulares.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Sistemas Modulares</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=6"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card" style="padding-top: 70px;">
                <img src="img/mobiliario/iconos/callCenter.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Call Center</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=7"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>


            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/sillonesOtros.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Sillones y otros</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=8"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>


            <div class="col-lg-6">
              <div class="card" style="padding-top: 100px;">
                <img src="img/mobiliario/iconos/openOffice.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Open Office</span>
                  <span class="titleCard" style="font-size:20px">Benching</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=9"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/mobiliarioEspecial.png" alt="" style="width: 220px;">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Mobiliario Especial</span>
                  <span class="titleCard" style="font-size:20px">MCA</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=10"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <img src="img/mobiliario/iconos/globalDeCanadá.png" alt="">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Global de Canadá</span>
                  <span class="titleCard" style="font-size:20px">Mobiliario Exportado</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=11"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card" style="padding-top: 80px;">
                <img src="img/mobiliario/iconos/aceroInox-2.png" alt="" style="max-width: 30%;">
                <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                  <span class="titleCard">Acero Inoxidable</span>
                  <div class="lineTec"></div>
                </div>
                <a href="./mobiliarioDescripcion.php?data=12"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
              </div>
            </div>








          </div>













          <div style="border-bottom: 2px solid #014460;width: 100%;margin-top:65px">
          </div>
        </div>
      </div>
    </div>

</section>
<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a href="#secPais" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/utilidad/contacto/contactMe.png" style="width: 70px"></a>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#carrusel').lightGallery({
      download: false,
      zoom: false,
      share: false,
      rotateLeft: false,
      rotateRight: false,
      flipHorizontal: false,
      flipVertical: false,
      fullScreen: false,
      getCaptionFromTitleOrAlt: false,
      autoplayControls: false,
    });
  });
</script>
<?php
$header = file_get_contents("./template/footer.html");
echo $header;
?>