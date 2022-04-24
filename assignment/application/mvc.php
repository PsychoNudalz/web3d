<?php
$controller = null;
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI = $_SERVER['REQUEST_URI'];
//echo "<script>console.log('Found URL: " . $pageURI . "' );</script>";

$pageURI = substr($pageURI, strrpos($pageURI, 'index.php') + 10);
//echo "<script>console.log('Found method: " . $pageURI . "' );</script>";

if (!$pageURI)
    $controller = new Controller('home');
else
    $controller = new Controller($pageURI);
