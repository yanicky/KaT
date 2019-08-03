<?php
        $test = "Starting Web test file_get_contents on URI.". $NL;
	$test.= "Testing Wallet Only parameter".$NL; 
        $command = "?wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
        $test.= "Testing getBalance with Pirl chain".$NL; 
        $command = "?CMD=getBalance&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Pirl&id=0";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
	$test.= "Testing getBalance with Ethereum chain".$NL; 
        $command = "?CMD=getBalance&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Ethereum&id=1";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
	$test.= file_get_contents($actual_link);
        $test.= $NL;

	$test.= "Testing blockNumber with Pirl chain".$NL; 
        $command = "?CMD=blockNumber&chain=Pirl&id=2";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $pirl_last_res = file_get_contents($actual_link);
	$test.= $pirl_last_res;
	$pirl_lastblock_array = json_decode($pirl_last_res, false);
        $pirl_lastblock = $pirl_lastblock_array->result;
        $test.= $NL;

	$test.= "Testing getting lastblock with Pirl chain".$NL; 
        $command = "?CMD=eth_getBlockByNumber&chain=Pirl&id=21";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;

        $test.= "Testing blockNumber with Ethereum chain".$NL; 
        $command = "?CMD=blockNumber&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Ethereum&id=3";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
        
	$test.= "Testing peerCount with Pirl chain".$NL; 
        $command = "?CMD=peerCount&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Pirl&id=4";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
        $test.= "Testing peerCount with Ethereum chain".$NL; 
        $command = "?CMD=peerCount&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Ethereum&id=5";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
	$test.= "Testing net_version with Pirl chain".$NL; 
        $command = "?CMD=net_version&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Pirl&id=6";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
        $test.= "Testing net_version with Ethereum chain".$NL; 
        $command = "?CMD=net_version&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Ethereum&id=7";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
	
	$test.= "Testing web3_clientVersion with Pirl chain".$NL; 
        $command = "?CMD=web3_clientVersion&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Pirl&id=8";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
        $test.= "Testing web3_clientVersion with Ethereum chain".$NL; 
        $command = "?CMD=web3_clientVersion&wallet=0x256b2b26Fe8eCAd201103946F8C603b401cE16EC&chain=Ethereum&id=9";
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$command;
        $test.= file_get_contents($actual_link);
        $test.= $NL;
?>
