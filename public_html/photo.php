<?php

require '../vendor/autoload.php';

use App\View\Page;

$page = new Page('photo');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
echo $page->render([
  'photo' => [
    'alt' => $id,
    'path' => "img/big/{$id}.jpg"
  ]
]);