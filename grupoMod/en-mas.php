<?php
$header = file_get_contents("./template/en-header.html");
$header = str_replace("masm", "active", $header);
$header = str_replace("titlePage", "Grupo Modulares - More", $header);
$header = str_replace("foto1Slide", "img/bg/1.jpg", $header);
$header = str_replace("foto2Slide", "img/bg/2.jpg", $header);
$header = str_replace("foto3Slide", "img/bg/4.jpg", $header);
$header = str_replace("mainTitleTexto", "learn +", $header);
echo $header;
?>


<!-- MAIN-->
<section class="section bg-default section-md">
  <div class="container">
    <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">


      <span class="mainTitleTextFirst">We are Grupo Modulares
      </span>
      <span class="mainTitleTextSecond">REGIONAL LEADERS IN SOLUTIONS FOR WORK ENVIRONMENTS
      </span>
      <div class="lineMainTitleTextSecond">
      </div>

      <style>
        .backgroundText {
          width: 70%;
          background: #EEE;
          position: relative;
          right: 20%;
          top: 50px;
          margin-bottom: -285px;
          font-size: 27px;
          text-align: justify;
          padding: 25px;
          color: black;
        }

        .paises {
          margin-top: 25px;
        }

        .paises img {
          display: inline-block;
          border-radius: 50%;
          height: 65px;
          margin-left: 25px;
        }

        .paises img:hover {
          border: #C7D818 solid 5px;
          border-radius: 50%;
          cursor: pointer;
        }

        .paises .active {
          border: #C7D818 solid 5px;
          border-radius: 50%;
          cursor: pointer;
        }

        .seccionPais .hide {
          display: none;
        }

        .seccionPais .mostrar {
          display: block !important;
          animation: fadeIn 4s;
        }

        .seccionPais .col-6 {
          height: 400px;
        }

        .seccionPais .row {
          margin-top: -10px;
        }

        .h4 {
          font-size: 23px;
        }

        .h5 {
          font-size: 20px;
        }

        .h6 {
          font-size: 18px;
        }

        .seccionPais .col-6 .img {
          width: 50%;
          height: 70%;
          background-size: 285px;
          border-radius: 50%;
          border: solid 10px #004262;
        }

        @media only screen and (max-width: 1200px) {

          .seccionPais h4 {
            font-size: 22px;
          }

          .seccionPais h5 {
            font-size: 18px;
          }

          .seccionPais h6 {
            font-size: 13px;
          }

          .seccionPais .col-6 {
            height: 300px;
          }

          .backgroundText {
            width: 90%;
            left: -105px;
          }
        }

        @media only screen and (max-width: 980px) {
          .seccionPais .col-6 {
            height: 250px;
            width: 50%;
            margin-bottom: 80px;
          }

          .seccionPais .col-6 .img {
            background-size: 232px;
            width: 250px;
            height: 250px;
          }

          .backgroundText {
            width: 90%;
            left: -15px;
            font-size: 15px;
          }

          #mar {
            margin-bottom: 55px;
          }

          .seccionPais h4 {
            font-size: 18px;
          }

          .seccionPais h5 {
            font-size: 15px;
          }

          .seccionPais h6 {
            font-size: 10px;
          }

          #segundos {
            margin-bottom: 90px;
          }

          .paises img {
            height: 45px;

          }
        }

        @media only screen and (max-width: 750px) {
          .seccionPais .col-6 {
            height: 150px;
            width: 50%;
            margin-bottom: 90px;
          }

          .seccionPais .col-6 .img {
            background-size: 132px;
            width: 150px;
            height: 150px;
          }

          .seccionPais h4 {
            font-size: 16px;
          }

          .seccionPais h5 {
            font-size: 13px;
          }

          .seccionPais h6 {
            font-size: 10px;
          }

          .seccionPais h7 {
            font-size: 9px;
          }

          .paises img {
            height: 30px;

          }

        }
      </style>

      <div style="text-align: -moz-center;text-align: -webkit-right;">
        <div class="backgroundText">
          With 27 years of experience and regional presence, 
          we are experts in receiving gray works and delivering turnkey office and call center projects.

          <br>

          We advise, design, manufacture, build and implement architectural solutions, office furniture, 
          call centers, and technology under international standards, to deliver world-class projects.
        </div>

        <img src="img/mas/bg/mapa2.png" alt="">
      </div>

      <span class="mainTitleTextFirst">We are Manufacturers
      </span>
      <span class="mainTitleTextSecond">OUR JOB IS TO LISTEN, DESIGN AND CREATE
      </span>
      <div class="lineMainTitleTextSecond">
      </div>

      <div class="row row-30">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-6" style="height: 300px;">
              <article class="booking-card" style="background-color: #EEEEEE;">
                <div class="informations-container" style="flex-direction:row;flex-wrap: wrap;">
                  <img src="img/mas/iconos/mejorTiempo.png" alt="" style="width:100px">
                  <h2 style="font-size: 20px;">Best response time</h2>
                </div>
                <h2 class="titleShow" style="font-size: 20px;margin:-85px 15px 50%">We are manufacturers: we directly produce all the elements that your project requires. We guarantee exact response times.</h2>

              </article>
            </div>
            <div class="col-6" style="height: 300px;">
              <article class="booking-card" style="background-color: #EEEEEE;">
                <div class="informations-container" style="flex-direction:row; flex-wrap: wrap;">
                  <img src="img/mas/iconos/materiaPrima.png" alt="" style="width:100px">

                  <h2 style="font-size: 20px;">Imported Raw Material</h2>
                </div>
                <h2 class="titleShow" style="font-size: 20px;margin:-95px 15px 50%">
                  To offer global quality, it is necessary to have international materials of the best quality.</h2>

              </article>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-6" style="height: 300px;">
              <article class="booking-card" style="background-color: #EEEEEE;">
                <div class="informations-container" style="flex-wrap: wrap;">
                  <img src="img/mas/iconos/tecnología.png" alt="" style="width:100px">

                  <h2 style="font-size: 20px;">Tecnology</h2>
                </div>
                <ol class="titleShow" style="flex-direction: row;font-size: 18px;
    flex-wrap: wrap;margin:-135px 15px 50%;text-align: left;font-weight:900">
                  <li>• 9500 m<sup>2</sup>: The largest plant in Central America.</li>
                  <li>• Powder painting process, electrostatic, prephosphated and baked.</li>
                  <li>• Automated Formica application process: 10-year warranty.</li>
                </ol>



              </article>
            </div>
            <div class="col-6" style="height: 300px;">
              <article class="booking-card" style="background-color: #EEEEEE;">
                <div class="informations-container" style="flex-direction:row;flex-wrap: wrap;">
                  <img src="img/mas/iconos/certificaciones.png" alt="" style="width:100px">
                  <h2 style="font-size: 20px;">International Certifications</h2>
                </div>
                <h2 class="titleShow" style="font-size: 20px;margin:-145px 15px 50%">
                  All our processes are established under a Quality Management System (QMS) ISO 9001-2015. We can LEED certify our construction projects.
                </h2>

              </article>
            </div>
          </div>
        </div>
      </div>


      <span class="mainTitleTextFirst">Equipment
      </span>
      <span class="mainTitleTextSecond">PROFESSIONALS FOR A GREAT RESULT
      </span>
      <div class="lineMainTitleTextSecond">
      </div>

      <div class="paises">

        <img onclick="changePais(this)" pais="Guatemala" class="active" src="img/mas/iconos/guatemalaIcono.png" alt="">

        <img onclick="changePais(this)" pais="Salvador" src="img/mas/iconos/elSalvadorIcono.png" alt="">

        <img onclick="changePais(this)" pais="Honduras" src="img/mas/iconos/hondurasIcono.png" alt="">

        <img onclick="changePais(this)" pais="Nicaragua" src="img/mas/iconos/nicaraguaIcono.png" alt="">

        <img onclick="changePais(this)" pais="CostaRica" src="img/mas/iconos/costaricaIcono.png" alt="">

        <img onclick="changePais(this)" pais="Dominicana" src="img/mas/iconos/repDominicanaIcono.png" alt="">

      </div>


      <div class="seccionPais">

        <div class="row hide mostrar" style="margin-top:50px" id="Guatemala">

          <div class="col-lg-12">
            <div class="row" style="justify-content: center;">
              <div class="col-6" id="mar">
                <div class="img" style="background-image: url(./img/Perfil/gris.jpg);" alt="">
                </div>
                <h4>Francisco Samayoa</h4>
                <h5>Regional President</h5>
                <h6>Guatemala</h6>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/Mariano.jpg);" alt="">
                </div>
                <h4>Mariano Estrada Guevara</h4>
                <h5>Managing Partner</h5>
                <h6>Guatemala</h6>
              </div>
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/Fernando.jpg);" alt="">
                </div>
                <h4>Fernando Portocarrero</h4>
                <h5>Founding Partner</h5>
                <h6>Guatemala</h6>
                <h7 style="display:block">Email: <a href="mailto:fporto@modulares.com"> fporto@modulares.com </a></h7>
              </div>
            </div>
            <div class="row" id="segundos" style="padding-top: 20px;">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/Eduardo.jpg);" alt="">
                </div>
                <h4>Eduardo Chacón</h4>
                <h5>Commercial Manager</h5>
                <h6>Guatemala</h6>
                <h7 style="display:block">Phone: <a href="tel:+50242110059"> +502 4211-0059</a></h7>
                <h7 style="display:block">Email: <a href="mailto:echacon@modulares.com"> echacon@modulares.com </a></h7>
              </div>
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/Ronald.jpg);" alt="">
                </div>
                <h4>Ronald Mendoza </h4>
                <h5>Modular Technology Manager</h5>
                <h6>Guatemala</h6>
                <h7 style="display:block">Phone: <a href="tel:+50230151878"> +502 3015-1878</a></h7>
                <h7 style="display:block">Email: <a href="mailto:rmendoza@modulares.com">rmendoza@modulares.com </a></h7>
              </div>

            </div>
          </div>
        </div>





        <div class="row hide" style="margin-top:50px" id="Salvador">
          <div class="col-lg-12">
            <div class="row" style="justify-content: center;">
              <div class="col-6">

                <div class="img" style="background-image: url(./img/Perfil/jorgeSal.jpg);" alt="">
                </div>
                <h4>Jorge López</h4>
                <h5>Country General Manager</h5>
                <h6>El Salvador</h6>
                <h7 style="display:block">Email: <a href="mailto:jlopez@modulares.com"> jlopez@modulares.com </a></h7>
              </div>
            </div>
          </div>
        </div>






        <div class="row hide" style="margin-top:50px" id="Honduras">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/AleHonduras.jpg);" alt="">
                </div>
                <h4>Alexis Ramírez</h4>
                <h5>Managing Partner</h5>
                <h6>Honduras</h6>
                <h7 style="display:block">Email: <a href="mailto:aramirez@modulares.com"> aramirez@modulares.com </a></h7>
              </div>
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/maradiaga.jpeg);" alt="">
                </div>
                <h4>Luis Fernando Maradiaga</h4>
                <h5>Commercial Manager</h5>
                <h6>Honduras</h6>
                <h7 style="display:block">Email: <a href="mailto:lmaradiaga@modulares.com"> lmaradiaga@modulares.com </a></h7>
              </div>
            </div>
          </div>

        </div>





        <div class="row hide" style="margin-top:50px" id="Nicaragua">
          <div class="col-lg-12">
            <div class="row" style="justify-content: center;">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/gris.jpg);" alt="">
                </div>
                <h4>Carlos Portocarrero</h4>
                <h5>Country Managing Partner</h5>
                <h6>Nicaragua</h6>
                <h7 style="display:block">Email: <a href="mailto:cporto@modulares.com"> cporto@modulares.com </a></h7>
              </div>
            </div>
          </div>
        </div>



        <div class="row hide" style="margin-top:50px" id="CostaRica">
          <div class="col-lg-12">
            <div class="row" style="justify-content: center;">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/ACostarica.jpg);" alt="">
                </div>
                <h4>Anwar Arana</h4>
                <h5>Country General Manager</h5>
                <h6>Costa Rica</h6>
                <h7 style="display:block">Email: <a href="mailto:aarana@modulares.com"> aarana@modulares.com </a></h7>
              </div>
            </div>
          </div>
        </div>








        <div class="row hide" style="margin-top:50px" id="Dominicana">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/gris.jpg);" alt="">
                </div>
                <h4>Sócrates Cuello</h4>
                <h5>Managing Partner</h5>
                <h6>Dominican Republic</h6>
                <h7 style="display:block">Email: <a href="mailto:scuello@modulares.com"> scuello@modulares.com </a></h7>
              </div>
              <div class="col-6">
                <div class="img" style="background-image: url(./img/Perfil/CostaRica.jpg);" alt="">
                </div>
                <h4>Oda García</h4>
                <h5>Country Manager</h5>
                <h6>Dominican Republic</h6>
                <h7 style="display:block">Email: <a href="mailto:o.garcia@Iparradelcaribe.com">o.garcia@Iparradelcaribe.com </a></h7>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="paises" style="margin-top:40px">

        <img onclick="changePais(this)" pais="Guatemala" class="active" src="img//mas/iconos/guatemalaIcono.png" alt="">

        <img onclick="changePais(this)" pais="Salvador" src="img/mas/iconos/elSalvadorIcono.png" alt="">

        <img onclick="changePais(this)" pais="Honduras" src="img/mas/iconos/hondurasIcono.png" alt="">

        <img onclick="changePais(this)" pais="Nicaragua" src="img/mas/iconos/nicaraguaIcono.png" alt="">

        <img onclick="changePais(this)" pais="CostaRica" src="img/mas/iconos/costaricaIcono.png" alt="">

        <img onclick="changePais(this)" pais="Dominicana" src="img/mas/iconos/repDominicanaIcono.png" alt="">

      </div>






    </div>



  </div>
  </div>

</section>
<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a href="#secPais" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/utilidad/contacto/contactMe.png" style="width: 70px"></a>
</div>


<?php
$header = file_get_contents("./template/en-footer.html");
echo $header;
?>

<script>
  function changePais(pais) {



    var primeraLista = document.getElementsByClassName("paises")[0].children;
    var segundaLista = document.getElementsByClassName("paises")[1].children;
    var paises = document.getElementsByClassName("seccionPais")[0].children

    for (let item of primeraLista) {
      if (item.classList.contains("active")) {
        item.classList.remove("active")
      }
      if (item.getAttribute('pais') == pais.getAttribute('pais')) {
        item.classList.add("active")
      }
    }

    for (let item of segundaLista) {
      if (item.classList.contains("active")) {
        item.classList.remove("active")
      }
      if (item.getAttribute('pais') == pais.getAttribute('pais')) {
        item.classList.add("active")
      }
    }


    for (let item of paises) {
      if (item.classList.contains("mostrar")) {
        item.classList.remove("mostrar")
      }


    }
    document.getElementById(pais.getAttribute('pais')).classList.add("mostrar")

  }
</script>