<?php
// This code describes opencage api calling and displays result to the browser


include ( 'openCage/AbstractGeocoder.php' );
include ( 'openCage/Geocoder.php' );

$geocoder = new \OpenCage\Geocoder\ Geocoder ( '4a8e59ae14f44d888ab86477950f293a' );

$result = $geocoder->geocode( '51.952659, 7.632473' , [ 'language' => 'en' ]);

header ( 'Content-Type: application/json; charset=UTF-8' );
echo json_encode ( $result, JSON_UNESCAPED_UNICODE);  

?>