<?php
require("config.php");
session_start();
$procedure = isset( $_GET['procedure'] ) ? $_GET['procedure'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $procedure != "login" && $procedure != "logout" && !$username ) {
    login();
    exit;
}

switch ( $procedure ) 
{

    case 'login':
        login();
    break;

    case 'logout':
        logout();
    break;

    case 'newEvent':
        newEvent();
    break;

    case 'editEvent':
        existingEvent();
    break;

    case 'deleteEvent':
        deleteEvent();
    break;

    default: 
    dashboard();
}











?>