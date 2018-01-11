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
->route('GET /', function() {
        echo '<h1>Pets Home</h1>';
    });
$f3->run();
?>
