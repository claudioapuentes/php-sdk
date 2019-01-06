<?php
require '../Meli/meli.php';
require '../configApp.php';

$meli = new Meli($appId, $secretKey);

$params = array();

$url = '/sites/' . $siteId;

$result = $meli->get($url, $params);

echo '<pre>';
//print_r($result);
print_r($secretKey);
echo '</pre>';
