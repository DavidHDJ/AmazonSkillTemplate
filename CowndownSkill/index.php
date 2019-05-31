<?php
// Get the request from Amazon 
$jsonRequest = file_get_contents('php://input');
// Decode the JSON 
$data        = json_decode($jsonRequest, true);
// When the JSON is empty close the request
if( empty($data) || (!isset($data) ) ) {
	die('Bad Request');
}
//Falls kein Intent exestiert wird default aufgerufen
require("getcountdown.php");
$text = "Noch ".$noch;
$responseArray = [ 'version' => '1.0',
		    'response' => [
		          'outputSpeech' => [
		                'type' => 'PlainText',
		                'text' => $text,
		                'ssml' => null
		          ],
              'shouldEndSession' => false
		    ]
];

//Set the Content-Type to JSON
header ( 'Content-Type: application/json' );
//Show the JSON
echo json_encode ( $responseArray );
//Close the file
die();
?>
