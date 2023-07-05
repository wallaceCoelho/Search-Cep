<?php

require_once "vendor/autoload.php";

use Wallace\SearchCep\Search;

$search = new Search();

$result = $search->getAdressFromZipCode('01001000');

print_r($result);

?>