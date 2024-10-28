<?php
$module = isset($_GET{'s'}) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view': default:
        include('instruktur/view.php');
        break;
    case 'add': 
        include('instruktur/add.php');
        break;
    case 'save': 
        include('instruktur/save.php');
        break;
    case 'edit': 
        include('instruktur/edit.php');
        break;
    case 'update': 
        include('instruktur/update.php');
        break;
    case 'delete': 
        include('instruktur/delete.php');
        break;
}