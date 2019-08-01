<?php
// Tested with php-cli and php-fpm
//
// require php-curl to be installed/enabled.

// Set Error Level
error_reporting(0);

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

// To be used with php-cli in console (ie: php index.php --wallet=yourwalletaddresshere)
foreach( $argv as $argument ) {
        if( $argument == $argv[ 0 ] ) continue;

        $pair = explode( "=", $argument );
        $variableName = substr( $pair[ 0 ], 2 );
        $variableValue = $pair[ 1 ];
        //echo $variableName . " = " . $variableValue . "\n";
        // Optionally store the variable in $_REQUEST
        $_REQUEST[ $variableName ] = $variableValue;
}

// Create NewLine variable based on usage
if ($argc > 0) {$NL = "\n";} else {$NL = "</br>";}

//if requested, setup variables
$ID = $_REQUEST['id'];
$addr = $_REQUEST['wallet'];
$CMD = $_REQUEST['CMD'];
$CHAIN = $_REQUEST['chain'];
$RPCHOST = $_REQUEST['rpchost'];
$RPCPORT = $_REQUEST['rpcport'];
$BLOCK = $_REQUEST['block'];

// If Required uncomment/force some parameters here
//$addr = "yourwallethere";
//$CMD = "getBalance";
//$CHAIN = "local";
// The RPCHOST and RPCPORT only override settings if($CHAIN == "local").
//$RPCHOST = "localhost";
//$RPCPORT = 6588;

//pass some simple sanity checks
if (!$CMD){ $CMD = "getDecodedBalance";}
if (!$ID){ $ID = 1;}


switch($CHAIN){
 case "Pirl":
	//pirls official rpc server, made for things like this
	$url = 'https://wallrpc.pirl.io';
	break;

 case "Ethereum":
	//use --chain=Ethereum to connect to the cloudFlare Ethereum RPC Gateway
	$url = 'https://cloudflare-eth.com';
	break;
 case "local":
	//use this if your running a local pirl node (be sure to start it up with --rpc after the command)
	if(!$RPCHOST){ $RPCHOST = "localhost";}
	if(!$RPCPORT){ $RPCPORT = "6588";}	
	$url = 'http://' . $RPCHOST . ':' . $RPCPORT;
	break;

default:
	
	$CHAIN="Pirl";
        $url = 'https://wallrpc.pirl.io';
	break;
}

switch($CMD)
	{
	case "web3_clientVersion":
        $method = "web3_clientVersion";
	$params = [];
	//setup request to send json via POST
	$data = array();
	$data['jsonrpc'] = "2.0";
	$data['id'] = $ID;
	$data['method'] = $method;
	$data['params'] = $params;
	$payload = json_encode($data);
	//do the call
	$jsondata = jsonCurl($url, $method, $payload);

        break;
		
	case "net_version":
        $method = "net_version";
        $params = [];
        //setup request to send json via POST
        $data = array();
        $data['jsonrpc'] = "2.0";
        $data['id'] = $ID;
        $data['method'] = $method;
        $data['params'] = $params;
        $payload = json_encode($data);
        //do the call
        $jsondata = jsonCurl($url, $method, $payload);

        break;
	
	case "blockNumber":
	$method = "eth_blockNumber";
        $params = [];
        //setup request to send json via POST
        $data = array();
        $data['jsonrpc'] = "2.0";
        $data['id'] = $ID;
        $data['method'] = $method;
        $data['params'] = $params;
        $payload = json_encode($data);
        //do the call
        $jsondata = jsonCurl($url, $method, $payload);
	break;
		
		
	case "peerCount":
        $method = "net_peerCount";
        $params = [];
        //setup request to send json via POST
        $data = array();
        $data['jsonrpc'] = "2.0";
        $data['id'] = $ID;
        $data['method'] = $method;
        $data['params'] = $params;
        $payload = json_encode($data);
        //do the call
        $jsondata = jsonCurl($url, $method, $payload);
        break;
		
	case "getBalance":
	// verify validity of the required variables
	if ( $addr == "" ) {echo "url should be in format 'http(s)://hostname/path/to/index.php?wallet=youraddresshere' or using --wallet=yourwallethere from php-cli" . $NL; exit;}
	if ( strlen($addr) != "42" ) { echo "wallet should be 42 char, including the 0x beginning" . $NL; exit;}
	$method = "eth_getBalance";
	$params = array($addr, "latest");
	//setup request to send json via POST
        $data = array();
        $data['jsonrpc'] = "2.0";
        $data['id'] = $ID;
        $data['method'] = $method;
        $data['params'] = $params;
        $payload = json_encode($data);
        //do the call
        $jsondata = jsonCurl($url, $method, $payload);

	break;
	
	case "getDecodedBalance":
        // verify validity of the required variables
        if ( $addr == "" ) {echo "url should be in format 'http(s)://hostname/path/to/index.php?wallet=youraddresshere' or using --wallet=yourwallethere from php-cli" . $NL; exit;}
        if ( strlen($addr) != "42" ) { echo "wallet should be 42 char, including the 0x beginning" . $NL; exit;}
        $method = "eth_getBalance";
        $params = array($addr, "latest");
        //setup request to send json via POST
        $data = array();
        $data['jsonrpc'] = "2.0";
        $data['id'] = $ID;
        $data['method'] = $method;
        $data['params'] = $params;
        $payload = json_encode($data);
        //do the call
        $jsondata1 = json_decode(jsonCurl($url, $method, $payload), true);
	$myarray = explode(",", implode(",",$jsondata1));
	$pirl = number_format((hexdec($myarray[2])/1000000000000000000), 10, ".", "");
	$assocArray = array();
	$assocArray['wallet'] = ''.$addr.'';
	$assocArray['balance'] = ''.$pirl.'';
	//encode in json format
	$jsondata = json_encode($assocArray);

        break;

	case "help":
	echo "********************" . $NL;
	echo "Printing Help" . $NL. $NL;
	echo "options are CMD=[net_version, getBalance, blockNumber, peerCount], chain=[Pirl, Ethereum, local], [rpchost=IP, Hostname] and [rpcport=PortNum]" . $NL;
	echo "ie: php index.php --CMD=blockNumber --chain=Pirl" . $NL;
	echo "url syntax examples when using a web server:" . $NL;
	echo "http(s)://hostname/path/to/index.php?chain=Pirl&CMD=blockNumber" . $NL;
	echo "http(s)://hostname/path/to/index.php?wallet=youraddresshere" . $NL;
	echo "http(s)://hostname/path/to/index.php?wallet=youraddresshere&chain=local&rpchost=localhost&rpcport=6588" . $NL;
	echo "http(s)://hostname/path/to/index.php?CMD=help" . $NL;
	break;
	
	case "test":
	echo shell_exec("sh ./test-api.sh");
	break;

	default: 
	echo "********************" . $NL;
	echo "Error: CMD value is invalid." . $NL; 
	echo "please use --CMD=help for more details" . $NL;
	break;
}
//finally, echo result of the work.
if($jsondata!=""){echo $jsondata;}
?>