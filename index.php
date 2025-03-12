<?php

include 'header.php';

$pagina = $_GET['pagina'];

switch ($pagina) {
    case 'home': include 'view/home.php'; break;
    case 'contatos': include 'view/contacts.php'; break;
    case 'sobrenos': include 'view/aboutus.php'; break;
    case 'institucional': include 'view/institutional.php'; break;
    default: include 'view/home.php'; break;
}

include 'footer.php';

