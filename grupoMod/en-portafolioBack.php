<?php
$header = file_get_contents("./template/en-header.html");
$header = str_replace("porte", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - Portafolio", $header);
$header = str_replace("foto1Slide", "img/bg/2.jpg", $header);
$header = str_replace("foto2Slide", "img/bg/4.jpg", $header);
$header = str_replace("foto3Slide", "img/bg/1.jpg", $header);
$header = str_replace("mainTitleTexto", "portafolio", $header);
$header = str_replace("colorCambio", "#000", $header);



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

      </style>





      <div class="grid-gallery">
        <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=1" target="_blank">
          <article class="booking-card" style="background-image: url(./img/macroSeguros/2.png)">
            <div class="informations-container">
              <h2 class="titleGrid">Macro Seguros</h2>
              <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>
            </div>

          </article>

        </a>
        <a class=" grid-gallery__item" href="https://360.co.cr/modularespb" target="_blank">
          <article class="booking-card" style="background-image: url(./img/colgate/1.png)">
            <div class="informations-container">
              <h2 class="titleGrid">Colgate Palmolive</h2>
              <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

            </div>
          </article>
        </a>
        <a class="grid-gallery__item" href="https://my.matterport.com/show/?m=dTwQ43VFhEx" target="_blank">
          <article class="booking-card" style="background-image: url(./images/LABYMED.jpg)">
            <div class="informations-container">
              <h2 class="titleGrid">Labymed, S.A.</h2>
              <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

            </div>
          </article>
        </a>
        <a class="grid-gallery__item" href="./portafolioDescripcion.php?data=2" target="_blank">
          <article class="booking-card" style="background-image: url(./img/GrupoSega/2.png)">
            <div class="informations-container">
              <h2 class="titleGrid">Grupo Sega</h2>
              <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

            </div>
          </article>
        </a>
        <a class="grid-gallery__item" href="#">
          <article class="booking-card" style="background-image: url(./img/Atento/1.png)">
            <div class="informations-container">
              <h2 class="titleGrid">Atento</h2>
              <div class="lineMainTitleTextSecond" style="margin: 0;align-self: center;"></div>

            </div>
          </article>
        </a>

      </div>






      <div style=" border-bottom: 2px solid #014460;width: 100%;margin-top:20px">
      </div>

    </div>
  </div>

</section>


<?php
$header = file_get_contents("./template/en-footer.html");
echo $header;
?>