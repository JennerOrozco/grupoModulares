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
<section class="section bg-default section-md">
  <div class="container">
    <div style="text-align: -webkit-center;text-align: -moz-center;text-align: -webkit-center;">

      <span class="mainTitleTextFirst" id="titulo">
      </span>


      <style>
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


      <style>
        .row {
          margin-top: 90px;
        }

        .card {
          width: 100%;
          height: auto;
          display: inline-block;
          margin-top: 10px;
          border: 0;
          background-color: #EEEEEE;
          height: auto;
          padding: 50px;
          font-size: 18px;
          color: black;
          text-align: justify;
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


      <style>
        #galleryContainer {
          height: 800px;
          width: 100%;
          background: transparent;
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          box-sizing: border-box;
          position: relative;
        }

        #linkTag {
          height: 70%;
        }

        #mainView {
          height: 100%;
          width: 90%;
          border-radius: 5px;
          background-color: #C7D818;
          margin-left: 10px;
          margin-right: 10px;
          z-index: 1;
          transition: all 1s;
        }

        #mainView:hover {
          transform: scale(1.2);
          transition: all 1s;
        }

        #leftView {
          height: 70%;
          width: 19%;
          opacity: 0.5;
          border-radius: 5px;
          transform: skewy(5deg);
          transform-origin: top right;
          background-color: #C7D818;
          display: flex;
          justify-content: center;
          align-items: center;
          transition: all 1s;
        }

        #leftView:hover {
          opacity: 1;
          transition: all 1s;
        }

        #rightView {
          height: 70%;
          width: 19%;
          opacity: 0.5;
          border-radius: 5px;
          transform: skewy(-5deg);
          transform-origin: top left;
          background-color: #C7D818;
          display: flex;
          justify-content: center;
          align-items: center;
          transition: all 1s;
        }

        #rightView:hover {
          opacity: 1;
          transition: all 1s;
        }

        .navBtns {
          width: 80px;
          height: 80px;
          border-radius: 50%;
          border: none;
          position: absolute;
          opacity: 0.8;
          background-color: transparent;
          cursor: pointer;
          color: white;
          background-color: #C7D818;
        }

        .navBtns:hover {
          opacity: 1;
          transition: all 1s;
          background-color: #C7D818;
        }

        #navLeft {
          left: 50px;
        }

        #navRight {
          right: 50px;
        }

        #linkTag {
          cursor: pointer;
          width: 60%;
          z-index: 1;
          box-sizing: border-box;
        }


        @media only screen and (max-width: 990px) {
          #galleryContainer {
            height: 400px;

          }

          .mainTitleTextFirst {
            font-size: 40px;
          }
        }
      </style>



      <div id="galleryView">
        <div id="galleryContainer">
          <div id="leftView"></div>
          <button id="navLeft" class="navBtns"><i class="fas fa-arrow-left fa-3x"></i></button>
          <a id="linkTag">
            <div id="mainView"></div>
          </a>
          <div id="rightView"></div>
          <button id="navRight" class="navBtns"><i class="fas fa-arrow-right fa-3x"></i></button>
        </div>
      </div>


</section>
<div class="udemy-course" style="position: fixed;top: 15px;right: 25px;margin-bottom: 0px;z-index: 150;background: rgb(219, 219, 219);border-radius: 50%;width: 70px;height: 70px;text-align: center;display: flex;align-content: stretch;justify-content: center;flex-direction: column;flex-wrap: nowrap;z-index: 123111;">
  <a href="#secPais" style="z-index: 10!important; cursor: pointer!important; "><img src="./img/contactMe.png" style="width: 70px"></a>
</div>
</div>
</div>

<?php
$header = file_get_contents("./template/footer.html");
echo $header;
?>

<script>
  let imgObject = [];


  function getQueryStringValue(key) {
    var string = unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"))
    if (string == "") {
      string = "1"
    }
    return string
  }


  let mainImg = 0;
  let prevImg = 0;
  let nextImg = 1;

  $.getJSON("portafolio.json", function(data) {
    var bandera = true
    var dato = data.Items
    dato.forEach(element => {
      if (element.id == (getQueryStringValue("data"))) {
        var bandera = false
        document.getElementById("titulo").innerHTML = element.prop.title

        element.prop.image.forEach((item) => {
          imgObject.push(item)
        })

        console.log(imgObject)
        mainImg = 0;
        prevImg = imgObject.length - 1;
        nextImg = 1;


        loadGallery();
      }
    });


  });






  function loadGallery() {

    let mainView = document.getElementById("mainView");
    mainView.style.background = "url('" + imgObject[mainImg] + "')";
    mainView.style.backgroundSize = "cover"

    let leftView = document.getElementById("leftView");
    leftView.style.background = "url('" + imgObject[prevImg] + "')";
    leftView.style.backgroundSize = "cover"

    let rightView = document.getElementById("rightView");
    rightView.style.background = "url('" + imgObject[nextImg] + "')";
    rightView.style.backgroundSize = "cover"

    let linkTag = document.getElementById("linkTag")
    linkTag.href = imgObject[mainImg];

  };

  function scrollRight() {

    prevImg = mainImg;
    mainImg = nextImg;
    if (nextImg >= (imgObject.length - 1)) {
      nextImg = 0;
    } else {
      nextImg++;
    };
    loadGallery();
  };

  function scrollLeft() {
    nextImg = mainImg
    mainImg = prevImg;

    if (prevImg === 0) {
      prevImg = imgObject.length - 1;
    } else {
      prevImg--;
    };
    loadGallery();
  };


  document.getElementById("navRight").addEventListener("click", scrollRight);
  document.getElementById("navLeft").addEventListener("click", scrollLeft);

  document.addEventListener('keyup', function(e) {
    if (e.keyCode === 37) {
      scrollLeft();
    } else if (e.keyCode === 39) {
      scrollRight();
    }
  });
</script>