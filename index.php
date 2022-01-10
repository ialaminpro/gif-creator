<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'src/GifCreator/GifCreator.php';
// Create an array containing file paths, resource var (initialized with imagecreatefromXXX), 
// image URLs or even binary code from image files.
// All sorted in order to appear.
$frames = array(
    imagecreatefrompng("images/qudb.png"), // Resource var
    "images/pic1.jpg", // Image file path
    //file_get_contents("./images/pic3.jpg"), // Binary source code
    //'http://thisisafakedomain.com/images/pic4.jpg', // URL,
);

// Create an array containing the duration (in millisecond) of each frames (in order too)
$durations = array(40, 80, 40, 20);

// Initialize and create the GIF !
$gc = new GifCreator();
$gc->create($frames, $durations, 5);

$gifBinary = $gc->getGif();
// header('Content-type: image/gif');
// header('Content-Disposition: filename="butterfly.gif"');
// echo $gifBinary;
// exit;

file_put_contents('animated_picture.gif', $gifBinary);