<?php
/**
 * Created by PhpStorm.
 * User: saltrupiano
 * Date: 1/16/20
 * Time: 10:20 AM
 */

//Sourced from: https://www.geeksforgeeks.org/how-to-delete-a-file-using-php/


session_start();

$fileToDelete = $_GET['getFileName'];

$targetDir = '/var/www/html/videos/';

$fullPath = $targetDir . $fileToDelete;

if (!unlink($fullPath)) {
    echo ("$fullPath cannot be deleted due to an error");
}
else {
    echo ("$fullPath has been deleted");
    header ("Location: /index.php");
}