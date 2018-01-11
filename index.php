<!DOCTYPE html>
<html lang="en">
<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth Kanzler
 * Date: 1/11/2018
 * Time: 1:36 PM
 */
require_once('vendor/autoload.php');
$f3 = Base::instance();
    $f3->route('GET /', function() {
        $view = new View;    echo $view->render
        ('views/home.html');
    });
$f3->run();
?>
