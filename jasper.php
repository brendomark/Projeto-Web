<?php
require __DIR__ . '/jasper/autoload.php';

use PHPJasper\PHPJasper;

$input = __DIR__ . 'vendor/copam/phpjasper7/exemplos/hello_world.jrxml';   

$jasper = new PHPJasper;
$jasper->compile($input)->execute();

$input = __DIR__ . 'jasper/exemplos/hello_world.jasper';  
$output = __DIR__ . '/jasper/exemplos';    
$options = [ 
    'format' => ['pdf', 'rtf'] 
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();
?>