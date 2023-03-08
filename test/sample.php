<?php

require '../src/VWCache.php';

$vwCache = new \Vinaweber\VWCache\VWCache();
$vwCache->setUrlPrefix('http://localhost/proje');
$vwCache->start();


//start your output code
echo ' line 1 <br/>';

echo ' line 2 <br/>';

// end your output code


$vwCache->end();
