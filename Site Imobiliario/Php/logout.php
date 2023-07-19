<?php

if(!isset($_SESSION)){
    $url = 'http://localhost/Site%20Imobiliario/login/indexLogin.html';
    session_start();
}

session_destroy();

header('location: ' . $url);


?>