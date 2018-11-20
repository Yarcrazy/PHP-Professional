<?php

require '../vendor/autoload.php';

use App\View\Page;

$page = new Page('gallery');

echo $page->render([
  'images' => [
    [
      'path' => 'img/small/1.jpg',
      'alt' => '1'
    ],
    [
      'path' => 'img/small/2.jpg',
      'alt' => '2'
    ],
    [
      'path' => 'img/small/3.jpg',
      'alt' => '3'
    ],
    [
      'path' => 'img/small/4.jpg',
      'alt' => '4'
    ],
  ]
]);