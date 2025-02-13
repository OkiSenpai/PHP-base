<?php
// https://weatherstack.com/dashboard
$key="639822b840035b21826219abc932b5e0";
$link = "http://api.weatherstack.com/current?access_key=$key&query=Brussels";
$json = file_get_contents($link);

if(json_validate($json)){
    $array = json_decode($json);
    //var_dump($array);
}

echo "<img src='".$array->current->weather_icons[0]."' alt='".$array->current->weather_descriptions[0]."' title='".$array->current->weather_descriptions[0]."'><br>Il fait ".$array->current->temperature." ° à {$array->location->name} / {$array->location->country} en date du {$array->location->localtime}";