<?php
$file = dirname(dirname(dirname(__FILE__))).'/panorama-drop/goals-2011.json';

$remote_data = json_decode(file_get_contents($file), true);
//print_r($remote_data);

?>