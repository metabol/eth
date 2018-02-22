<?php


$test = array("jsonrpc"=> "2.0","method"=> "web3_clientVersion", "params"=> [], "id"=> 67);
$data_string = json_encode($test); 

//$data = array("name" => "Hagrid", "age" => "36");     

//$data_string = json_encode($data); 

$data_string='{"jsonrpc":"2.0","method":"eth_syncing","params":[],"id":1}';        



$host = 'http://localhost';  
$port = 8545;

         
$ch = curl_init();
		
curl_setopt($ch, CURLOPT_URL, $host);
curl_setopt($ch, CURLOPT_PORT, $port);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);



var_dump($result);

?>
