<?php

// variables generales
include 'adminlte.php';

//cabeza de la pplantilla
include 'modules/AdminHead.php';


if (isset($_SESSION["admin"])) {
    //menu supererior
    include 'modules/AdminMenu.php';

    //menu lateral
    include 'modules/AdminMenuLateral.php';

    //cuerpo en blanco
    include 'modules/paginaWhite.php';

    //footer
    include 'modules/AdminFooter.php';
} else {
    //login
    include 'modules/login.php';
}

//login
include 'modules/AdminScript.php';
