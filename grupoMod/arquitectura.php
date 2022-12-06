<?php
$header = file_get_contents("./template/header.html");
$header = str_replace("archic", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - Arquitectura", $header);
$header = str_replace("foto1Slide", "img/bg/1.jpg", $header);
$header = str_replace("foto2Slide", "img/bg/2.jpg", $header);
$header = str_replace("foto3Slide", "img/bg/4.jpg", $header);
$header = str_replace("mainTitleTexto", "arquitectura", $header);




echo $header;
?>





<!-- MAIN-->
<section class="section bg-default">
  <div class="container">
    <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">

      <section class="section bg-default section-sm">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">26</div>
                    </div>
                    <p class="box-counter-title">Años de Experiencia</p>

                    <p class="box-counter-title efecto-espejo">años de experiencia</p>
                    <div class="box-counter-main efecto-espejo">
                      <h1 class="counter" style="margin-top: 20px;color: rgba(0, 0, 0, 0.1);">26</h1>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">392</div>
                    </div>
                    <p class="box-counter-title">Proyectos Realizados</p>
                    <p class="box-counter-title efecto-espejo">Proyectos realizados</p>
                    <div class="box-counter-main efecto-espejo">
                      <h1 class="counter" style="margin-top: 20px;color: rgba(0, 0, 0, 0.1);">392</h1>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


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
              Asesoramos, diseñamos, construimos e implementamos proyectos llave en mano de clase mundial.
            </div>
          </div>

          <span class="mainTitleTextFirst" style="color:#000">Casos de éxito </span><span class="mainTitleTextSecond" style="color:#000">ARQUITECTURA INSPIRADORA </span>
          <div class="lineMainTitleTextSecond"></div>
        </div>
      </section>
      <style>
        .col-lg-4 {
          height: 250px;
          margin-top: 20px;
        }


        @media (min-width: 692px) {
          .col-lg-4 {
            height: 300px;
            margin-top: 20px;
          }
        }

        @media (min-width: 1200px) {
          .col-lg-4 {
            height: 450px;
            margin-top: 20px;
          }
        }
      </style>



      <div class="row">
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=1">
            <article class="booking-card" style="background-image: url(./img/247/front.jpg)">
              <div class="informations-container">
                <h2 class="titleGrid">247</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>
              </div>
            </article>
          </a>
        </div>

        <div class="col-lg-4 col-6">
          <a class=" grid-gallery__item" href="https://360.cr/modularespb/" target="_blank">
            <article class="booking-card" style="background-image: url(./img/Colgate/1.png)">
              <div class="informations-container">
                <h2 class="titleGrid">Colgate Palmolive</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>
              </div>

            </article>

          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class=" grid-gallery__item" href="./portafolioDescripcion.php?data=3">
            <article class="booking-card" style="background-image: url(./img/cubo/front.jpg)">
              <div class="informations-container">
                <h2 class="titleGrid">El Cubo</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=4">
            <article class="booking-card" style="background-image: url('./img/BAC/JPG/IMG_4461.jpg')">
              <div class="informations-container">
                <h2 class="titleGrid">BAC</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=5">
            <article class="booking-card" style="background-image: url(./images/LABYMED.jpg)">
              <div class="informations-container">
                <h2 class="titleGrid">Labymed</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=6">
            <article class="booking-card" style="background-image: url(./img/honduras/1.png)">
              <div class="informations-container">
                <h2 class="titleGrid">EEH</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>

        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=7">
            <article class="booking-card" style="background-image: url('./img/BARISTA/JPEG/IMG_3298.jpg')">
              <div class="informations-container">
                <h2 class="titleGrid">Barista</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=8">
            <article class="booking-card" style="background-image: url(./img/VILLA/JPEG/IMG_4027.jpg)">
              <div class="informations-container">
                <h2 class="titleGrid">La Villa</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>
        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=9">
            <article class="booking-card" style="background-image: url(./img/CASAMAZA/JPEG/IMG_2152.jpg)">

              <div class="informations-container">
                <h2 class="titleGrid">Casa Mazátlan</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>



      </div>


      <div class="grid-gallery">



      </div>





      <div style=" border-bottom: 2px solid #014460;width: 100%;margin-top:20px">
      </div>

    </div>
  </div>

</section>
<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a href="#secPais" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/contactMe.png" style="width: 70px"></a>
</div>

<?php
$header = file_get_contents("./template/footer.html");
echo $header;
?>