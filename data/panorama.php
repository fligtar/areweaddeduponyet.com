<?php
$file = dirname(dirname(dirname(__FILE__))).'/panorama-drop/goals-2011.json';

$remote_data = json_decode(file_get_contents($file), true);
//print_r($remote_data);

function php2series($data) {
    $return = "";
    
    foreach ($data as $key => $values) {
        $return .= "{name: '{$key}', data: [".implode(',', $values)."]},";
    }
    
    return "[{$return}]";
}
?>