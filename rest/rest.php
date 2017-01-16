<?php

// A sample to output JSON data in a REST like service

ini_set('display_errors', '1');

// GET request
// The name of the service will be ?service=myservice&rmethod=list
if (!empty($_GET)) {

	if (!empty($_GET['method'])) {
		sendJson('200', 'ok', [ 'name' => 'myservice', 'description' => 'this is my default service' ]);
	}
	else {
		die('you must provide a method to invoke');

	}
}
else {
	die('Service is up, please provide parameters');
}

function sendJson($httpCode, $applicativeCode, $data) {
	header("HTTP/1.0 200 OK");                                                                                                                                                        
	// To allow cross site scripting
	header("Access-Control-Allow-Origin: *");
	header("Content-type: text/javascript");                                                                                                                                          
	echo json_encode(array('http' => $httpCode, 'code' => $applicativeCode, 'data' => $data));                                                                                        
	exit();                                                                                                   
}
