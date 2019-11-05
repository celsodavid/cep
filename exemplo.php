<?php

require 'vendor/autoload.php';

use \Cesantos\Cep\Search;

$busca = new Search;
    
$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);