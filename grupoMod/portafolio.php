<?php
$header = file_get_contents("./template/header.html");
$header = str_replace("porte", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - Portafolio", $header);
$header = str_replace("foto1Slide", "img/bg/2.jpg", $header);
$header = str_replace("foto2Slide", "img/bg/4.jpg", $header);
$header = str_replace("foto3Slide", "img/bg/1.jpg", $header);
$header = str_replace("mainTitleTexto", "portafolio", $header);



echo $header;
?>





<!-- MAIN-->
<section class="section bg-default">
  <div class="container">
    <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">

      <section class="section bg-default section-sm">
        <div class="container">

          <span class="mainTitleTextFirst">Portafolio
          </span>
          <span class="mainTitleTextSecond">PROYECTOS DE CLASE MUNDIAL
          </span>
          <div class="lineMainTitleTextSecond">
          </div>
        </div>
      </section>


      <div class="row row-30">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-4">
              <form>
                <fieldset>
                  <div class="form-group">
                    <label for="inputState">AÑO</label>
                    <select id="inputState" class="form-control">
                      <option selected>2019</option>
                      <option>2018</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                      <option>2014</option>
                    </select>
                  </div>
                </fieldset>
              </form>
            </div>
            <div class="col-4">
              <form>
                <fieldset>
                  <div class="form-group">
                    <label for="inputState">PAIS</label>
                    <select id="inputState" class="form-control">
                      <option>Guatemala</option>
                      <option>Nicaragua</option>
                      <option>Honduras</option>
                      <option>El Salvador</option>
                      <option>Panama</option>
                    </select>
                  </div>
                </fieldset>
              </form>
            </div>
            <div class=" col-4">
              <form>
                <fieldset>
                  <div class="form-group">
                    <label for="inputState">INDUSTRIA</label>
                    <select id="inputState" class="form-control">
                      <option selected>Todas las categorias</option>
                      <option>Categoria 1</option>
                      <option>Categoria 2</option>
                      <option>Categoria 3</option>
                      <option>Categoria 4</option>
                    </select>
                  </div>
                </fieldset>
              </form>
            </div>
            <script>
              function updateTextInput(val) {
                document.getElementById('textInput').innerHTML = val;
              }
            </script>


          </div>
        </div>
      </div>





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
          <a class="grid-gallery__item" href="https://my.matterport.com/show/?m=MKpDHNWxX5X&brand=0" target="_blank">
            <article class="booking-card" style="background-image: url(./img/GrupoSega/1.png)">
              <div class="informations-container">
                <h2 class="titleGrid">Grupo Sega</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>

        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=12">
            <article class="booking-card" style="background-image: url('./img/AVIA/JPEG/IMG_1814.jpg')">
              <div class="informations-container">
                <h2 class="titleGrid">AVIA</h2>
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

        <div class="col-lg-4 col-6">
          <a class="grid-gallery__item" href="https://my.matterport.com/show/?m=NLPXCQsYhiD" target="_blank">
            <article class="booking-card" style="background-image: url(./img/macroSeguros/1.png)">

              <div class="informations-container">
                <h2 class="titleGrid">Macro Seguro</h2>
                <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

              </div>
            </article>
          </a>
        </div>




      </div>





      <div style=" border-bottom: 2px solid #014460;width: 100%;margin-top:20px">
      </div>

    </div>
  </div>

</section>
<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a href="#secPais" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/utilidad/contacto/contactMe.png" style="width: 70px"></a>
</div>

<?php
$header = file_get_contents("./template/footer.html");
echo $header;
?>