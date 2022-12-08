<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once __DIR__ . '/../../common/includeCommon.php';
include_once __DIR__ . '/../../common/headerPOST.php';
include_once __DIR__ . '/../../common/mail.php';


if (
    $common->validateInput($data, "Nombre,Email,Pais")
) {
    $word = array();
    $word["Nombre"] = $data->Nombre;
    $word["Email"] = $data->Email;
    $word["Empresa"] = $data->Empresa;
    $word["Telefono"] = $data->Telefono;
    $word["Pais"] = $data->Pais;
    $word["Mensaje"] = $data->Mensaje;


    try {
        if ($data->Pais == 1) {
            $word["Pais"] = "Guatemala";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "echacon@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "rmendoza@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 2) {
            $word["Pais"] = "El Salvador";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "jlopez@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 3) {
            $word["Pais"] = "Honduras";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "lmaradiaga@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "aramirez@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 4) {
            $word["Pais"] = "Nicaragua";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "cporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 5) {
            $word["Pais"] = "Costa Rica";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "aarana@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 6) {
            $word["Pais"] = "Republica Dominicana";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "o.garcia@iparradelcaribe.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "scuello@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }
        if ($data->Pais == 7) {
            $word["Pais"] = "Otro";
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "echacon@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "rmendoza@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "jlopez@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "lmaradiaga@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "aramirez@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "cporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "aarana@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "o.garcia@iparradelcaribe.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "scuello@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "fporto@modulares.com", "Contacto Grupo Modular" . $data->Nombre);
            $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/contactenos.html", $word,  "grupomodulares@fenixmedia.org", "Contacto Grupo Modular" . $data->Nombre);
        }




        $responseEmail = sendMailFunction(__DIR__ . "/htmlTemplate/respuesta.html", $word,  $data->Email, "Grupo Modular" . $data->Nombre);

        if ($common->validateStatus($responseEmail)) {
            $common->response200($responseEmail);
        }
    } catch (Exception $e) {
        $responseEmail = false;
        $common->response503("No se pudo mandar el correo.");
    }
} else {
    $common->response404("Datos incompletos.");
}
