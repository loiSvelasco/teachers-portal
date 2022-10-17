<?php

require_once("app/classes/App.php");
$app = new App();

if(isset($_GET['home']) || $_SERVER['REQUEST_URI'] == "/")
{
    $app->render("homepage.php", [
        'app' => $app,
        'current' => 'home'
    ]);
}

if(isset($_GET['work']))
{
    $app->render("work.php", [
        'current' => 'work'
    ]);
}

if(isset($_GET['company']))
{
    $app->render("company.php", [
        'current' => 'company'
    ]);
}
