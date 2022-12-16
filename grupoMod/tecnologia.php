<?php
$header = file_get_contents("./template/header.html");
$header = str_replace("tchno", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - Tecnologia", $header);
$header = str_replace("foto1Slide", "img/bg/8.jpeg", $header);
$header = str_replace("foto2Slide", "img/bg/9.jpeg", $header);
$header = str_replace("foto3Slide", "img/bg/10.jpeg", $header);
$header = str_replace("mainTitleTexto", "tecnología", $header);
echo $header;
?>

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
          Asesoramos, diseñamos e implementamos soluciones de electricidad, cableado estructurado, sistemas de seguridad, climatización y automatización.
        </div>
      </div>


      <span class="mainTitleTextFirst" style="color: black;">Tecnología Modular
      </span>
      <span class="mainTitleTextSecond" style="color: black;">SERVICIO
      </span>
      <div class="lineMainTitleTextSecond">
      </div>


      <style>
        .tecno .row {
          margin-top: 90px;
        }

        .card {
          width: 90%;
          height: 500px;
          display: inline-block;
          margin-top: 50px;
          border: 0;
          background-color: #EEEEEE;
          height: 420px;
          padding-top: 20%;
        }

        .tecno .row a {
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

        .lineTec {
          margin-top: 10px;
        }

        .cardDerecha {
          margin-top: 250px;
        }

        .cardIzquierda {
          margin-top: -125px;
        }


        @media only screen and (max-width: 990px) {
          .card {
            width: 102%;

          }

          .row a {

            left: 38%;
          }
        }

        @media only screen and (max-width: 800px) {
          .row a {

            left: 41%;
          }

          .cardDerecha {
            margin-top: 0px;
          }

          .cardIzquierda {
            margin-top: 0px;
          }
        }
      </style>


      <div class="tecno">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="card">
              <img src="img/tecnologia/iconos/cableado.png" alt="">
              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Cableado</span>
                <span class="titleCard">Estructurado</span>
                <div class="lineTec">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=1"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 cardDerecha">
            <div class="card">
              <img src="img/tecnologia/iconos/vigilancia.png" alt="">
              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Sistemas de</span>
                <span class="titleCard">vigilancia</span>
                <div class="lineTec">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=2"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>





          <div class="col-lg-6 col-md-6 cardIzquierda">
            <div class="card">
              <img src="img/tecnologia/iconos/electricidad.png" alt="">

              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Electricidad
                </span>
                <div class="lineTec">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=3"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 cardDerecha">
            <div class="card">
              <img src="img/tecnologia/iconos/clima.png">
              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Clima
                </span>
                <span class="titleCard" style="font-size: 15px;margin-top:16px">(AIRE ACONDICIONADO)
                </span>
                <div class="lineTec" style="margin-top:10px">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=4"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>




          <div class="col-lg-6 col-md-6 cardIzquierda">
            <div class="card">
              <img src="img/tecnologia/iconos/iluminacion.png" alt="">

              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Iluminación y Domótica
                </span>

                <div class="lineTec">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=5"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 cardDerecha">
            <div class="card">
              <img src="img/tecnologia/iconos/diseño.png" alt="">

              <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
                <span class="titleCard">Asesoría y Diseño
                </span>
                <div class="lineTec">
                </div>
              </div>
              <a href="./tecnologiaDescripcion.php?data=6"><img class="imgOjo" src="img/utilidad/cards/ojo.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>


      <div style="position: relative;margin-top: 155px;">
        <span class="titleTec">
          LOS MEJORES SISTEMAS TECNOLÓGICOS
        </span>
        <span class="titleTec">
          PARA MEJORAR TU EMPRESA
        </span>

        <div class="lineTitle"></div>

        <img src="./tecnologia/TM - LOGO FONDO BLANCO.jpeg" alt="" style="margin-bottom: 15px;">
        <div style="border-bottom: 2px solid #014460;width: 100%">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a onclick="window.open( 'https://share.ebforms.com/6651974601146368', 'blank', 'scrollbars=yes, toolbar=no, width=700, height=500')" target="_blank" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/utilidad/contacto/contactMe.png" style="width: 70px"></a>
</div>

<?php
$header = file_get_contents("./template/footer.html");
echo $header;
?>