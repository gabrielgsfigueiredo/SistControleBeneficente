<?php

$jsonResponsavel = array();

$jsonResponsavel['comando'] = 'consultarPorId';

$jsonResponsavel['idresp'] = '1';
//$jsonResponsavel['endereco'] = 'gravar';
//$jsonResponsavel['nome'] = 'Gabi';
//$jsonResponsavel['representante'] = 'beneficente';
//$jsonResponsavel['telefone'] = 'password';
//$jsonResponsavel['nis'] = 'password';
//$jsonResponsavel['cpf'] = 'password';
//$jsonResponsavel['email'] = 'password';

$json = json_encode($jsonResponsavel);

$url = "http://127.0.0.1/projeto_faculdade/control/ControlerResponsavel.php";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

print $json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($status != 200) {
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}

curl_close($curl);
