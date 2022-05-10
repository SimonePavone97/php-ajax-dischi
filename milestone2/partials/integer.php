<?php

require __DIR__ . '/../../milestone1/partials/integer.php';
//var_dump ($database);

header( 'Content-Type: application/json' );
echo json_encode( $database );
?>
