# KaT
Key access Terminal: a customizable functional PHP framework structure for API.

For the moment, this is a place holder for the publication of a bootstrap code for the KaT framework.

While the KaT_base is being written again(last version is from 2006), i will update this repository as a demo for the framework structure. 

I got inspired while contributing on pirl-php-api, so i included the original usage and all my contributed features in a smaller footprint.

inspiration: https://github.com/yanicky/pirl-php-api

Since the pirl-php-api code was forked, after just a few commits, i felt that a refactoring had to be done before getting into cool modular structure. Then i understood, that i could not ignore that roaring KaT anymore. 

So a new bootstrap version is being created here, for public usage against contemporary Web3.0 DATA. Datastores will be added once a KaT_base(SQLite) is completed to handle modularity. 

The most basic concepts around KaT are:

---A condition tree that is populated/validated in a non-blocking manner.

---Input and Output are managed in KaT/ 

---Data processing and functions are processed in KaT_base/.

---A configurable minimalist approach allowing branches to be enabled/disabled easily.


Until documentation/reorganization is being managed within KaT, please use these examples for now.
(While some CMD names might change in the future, they will be properly transitioned)

HOW-TO:

How to run this version? install php-cli and php-curl if needed. you can then run it with command line client using wallet argument or served by a webserver of your choice.

$php index.php --wallet=yourwalletaddresshere [--chain=Pirl, Ethereum, local] [--CMD=web3_clientVersion, net_version, getBalance, blockNumber, peerCount,test, help] [--id=integer]

You can also run the test-api.sh like this.

from Browser(not tested in cloud environement, but its tested(nginx/php-fpm)

http(s)://hostname/path/to/index.php?CMD=test

From shell

php index.php --CMD=test;

or

/bin/sh test-api.sh;

or

chmod +x test-api.sh;

./test-api.sh;

This version Default on the Pirl(https://wallrpc.pirl.io:443) but Cloudflare's Ethereum Gateway(https://cloudflare-eth.com:443) or any other json-rpc server using --chain=[Pirl, Ethereum, local] optional parameter.

If you want to have it served by a webserver, put the files into the webroot directory and try a url syntax like these:

http(s)://hostname/path/to/index.php?chain=Pirl&CMD=blockNumber

http(s)://hostname/path/to/index.php?wallet=youraddresshere

http(s)://hostname/path/to/index.php?wallet=youraddresshere&chain=local&rpchost=localhost&rpcport=6588

http(s)://hostname/path/to/index.php?CMD=help

Feel free to add pull requests or fork it for your own usage.

/*

Still asking yourself what's a KaT? 
Well think of it as a simple application, flexible and agile as a Cat, but faithful and predictable as a dog.

Enjoy!

Please come back later.

yanicky

*/

