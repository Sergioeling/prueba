<?php
$pokemon = '1';

$api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon"); //para la comunicación 
curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($api);
curl_close($api);

if($pokemon)

$json = json_decode($response);

echo '<h2>HABILIDADES</h2>';
foreach($json->abilities as $k => $variable) {
    echo $variable->ability->name.'<br>';
}

echo '<h2>TIPOS</h2>';
echo $json->types[0]->type->name;

echo '<h2>FOTOS</h2>';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<img src="'.$json->sprites->front_default.'" width="200">';

?>
