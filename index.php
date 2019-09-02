<?php
// Tested with php-cli and php-fpm
//
// require php-curl to be installed/enabled.
function jsonCurl($myurl, $mymethod, $mypayload) 
        {
	//create a new cURL resource
	$ch = curl_init($myurl);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	//attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $mypayload);
	//set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	//return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//execute the POST request
	$res = curl_exec($ch);
	//close cURL resource
	curl_close($ch);
	//return the result
	return $res;
	}

$initmini = 'initmini.php';
include($initmini);
