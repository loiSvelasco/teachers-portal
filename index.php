<?php

require_once("app/classes/App.php");
$app = new App();

if(isset($_GET['home']) || $_SERVER['REQUEST_URI'] == "/")
{
    $app->render("homepage.php", [
        'app' => $app
    ]);
}
if(isset($_GET['work']))
{
    $app->render("work.php");
}
if(isset($_GET['test']))
{
    $app->render("test.php");
}
