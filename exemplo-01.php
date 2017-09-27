<?php

$cep = "01310100";
$link = "http://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //espera retorno por isso 1
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //se nao colocar isso a chamada acima nao funciona se ela nao fosse https

$response = curl_exec($ch); //executa o acesso

curl_close($ch);
//echo $response;

$data = json_decode($response, true); //transforma json em array

print_r($data);
//print_r($data['localidade']);

?>