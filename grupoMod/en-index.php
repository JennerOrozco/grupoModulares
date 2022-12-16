<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Grupo Modular - Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="./img/utilidad/header/Logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    h3 {
      font-size: 30px;
    }

    .visible {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: visible;
      opacity: 1;
      animation: fadeIn 4s;
    }

    .hidden {
      display: none;
      transition: opacity 4s linear;
    }

    h3:hover {
      translate: 0px -2px;
    }



    .hiA {
      animation: example 4s;
    }


    @keyframes example {
      0% {
        transform: translateX(-300px);
        transform: scale(.5);
        opacity: 0;
      }

      3% {
        transform: translateX(-300px);
        transform: scale(.5);
        opacity: 0;
      }

      85% {
        transform: translateX(150px);
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .showLine {
      animation: showLineK 5s;
    }


    @keyframes showLineK {


      0% {

        opacity: 0;
      }

      70% {

        opacity: 0;
      }


      80% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }


    @keyframes moveSlide {
      0% {
        transform: translateX(-500px);
        opacity: 0;
      }

      50% {
        opacity: 0.5;


      }

      100% {
        transform: translateX(0px);
        opacity: 1;
      }
    }


    .moveit {
      transform: translateX(0px);
      animation: moveSlide 10s;
    }



    .showLine1 {
      animation: showLineK 6s;
    }

    .showLine2 {
      animation: showLineK 7s;
    }

    .showLine3 {
      animation: showLineK 8s;
    }

    .showLine4 {
      animation: showLineK 9s;
    }

    .showLine5 {
      animation: showLineK 10s;
    }
  </style>
</head>

<body>
  <div id="showPC" class="hidden" style="height: 100vh">
    <div class="hiA" style=" width: 300px;margin-right: 80px; height: 250px;text-align: -webkit-center">
      <img src="./img/utilidad/header/Logo.png" style="    width: 250px;    height: 200px;" />
    </div>
    <div class="showLine" style="width: 10px;    height: 150px;    border-left: solid;    margin-bottom: 50px">
    </div>
    <div style="margin-left: 80px;    display: block;margin-bottom: 10px;">
      <a href="./en-arquitectura.php" class="showLine1">
        <h3>architecture</h3>
      </a>
      <a href="./en-mobiliario.php" class="showLine2">
        <h3>furniture</h3>
      </a>
      <a href="./en-tecnologia.php" class="showLine3">
        <h3>technology</h3>
      </a>
      <br>
      <a href="./en-portafolio.php" class="showLine4">
        <h3>portfolio</h3>
      </a>
      <a href="./en-mas.php" class="showLine5">
        <h3 style="color: #C7D818;">+</h3>
      </a>
    </div>
  </div>
  <div id="showMobile" class="visible" style="align-items: normal;flex-direction: column;">
    <div style="    display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;margin-top: 20px;
            ">
      <div style="border-bottom: solid;    width: 50%;    padding-bottom: 20px;    text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
        <img class="" src="./img/utilidad/header/Logo.png" style=" width: 170px;    height: 140px" />
      </div>
      <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">
        <style>
          .col-6 {
            width: 200px;
            height: 210px;
            padding: 20px;
            margin-bottom: 20px;

          }

          .col-6 div {
            width: 100%;
            height: 210px;
            padding-top: 35px;
          }

          .col-6 img {
            height: 90px;
          }

          .texto {
            font-size: 80px;
          }

          @media only screen and (max-width: 600px) {
            .col-6 {
              width: 200px;
              height: 160px;
              padding: 20px;
              margin-bottom: 20px;
            }

            .col-6 div {
              width: 100%;
              height: 160px;
            }

            .col-6 img {

              height: 60px;
            }

            h3 {
              font-size: 15px;
            }
          }
        </style>
        <div class="row" style="width: 90%;display: flex;
                  flex-wrap: wrap;
                  margin-right: -15px;
                  margin-left: -15px;
                  align-content: flex-start;
                  justify-content: center;
                  ">
          <div class="col-6">
            <a href="./en-arquitectura.php">
              <div style="background-color: #EEE;">
                <img src="./img/index/homeMobileGrupoModulares-07.png" alt="">
                <h3>Architecture</h3>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="./en-mobiliario.php">
              <div style="background-color: #EEE;">
                <img src="./img/index/homeMobileGrupoModulares-08.png" alt="">
                <h3>Furniture</h3>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="./en-tecnologia.php">
              <div style="background-color: #EEE;">
                <img src="./img/index/homeMobileGrupoModulares-11.png" alt="">
                <h3>technology</h3>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="./en-portafolio.php">
              <div style="background-color: #EEE;">
                <img src="./img/index/homeMobileGrupoModulares-12.png" alt="">
                <h3>Portfolio</h3>
              </div>
            </a>
          </div>
          <div class="col-6">
            <a href="./en-mas.php">
              <div style="background-color: #EEE;">
                <img src="./img/index/homeMobileGrupoModulares-15.png" alt="">
                <h3 class="texto" style="color:#C7D818;line-height: .8;">+</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  function myFunction(x) {

    var showPC = document.getElementById("showPC")
    var showMobile = document.getElementById("showMobile")

    if (x.matches) {
      showMobile.classList.replace("hidden", "visible")
      showPC.classList.replace("visible", "hidden")

    } else {
      if (showMobile.classList.contains("visible")) {
        showMobile.classList.replace("visible", "hidden")
      }
      showPC.classList.replace("hidden", "visible")
    }
  }
  var x = window.matchMedia("(max-width: 990px)")
  myFunction(x)
  x.addListener(myFunction)
</script>

</html>