<?php
if(php_sapi_name() !== 'cli') die();

$json = file_get_contents('http://www.ttss.krakow.pl/internetservice/geoserviceDispatcher/services/stopinfo/stops?left=-648000000&bottom=-324000000&right=648000000&top=324000000');
$elements = json_decode($json, 1);
foreach($elements['stops'] as $element) {
	$stops[$element['shortName']] = $element['name'];
}

asort($stops);
var_export($stops);
