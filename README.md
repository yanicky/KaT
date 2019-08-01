# KaT
Key access Terminal: a customizable functional PHP framework structure for API.

For the moment, this is only a place holder for the future publication of a bootstrap code for the KaT framework.

While it's being written again(last version is from 2006), 

I got inspired while contributing on pirl-php-api, so i included all feature in a smaller footprint.

inspiration: https://github.com/yanicky/pirl-php-api

Since the pirl-php-api code was forked, after just a few commits, i felt that a refactoring had to be done before getting into cool modular structure. Then i understood, that i cannot ignore that roaring KaT anymore. 

So a bootstrap version is being created here, for future public usage. 

For now please use these examples until documentation is being managed within KaT.

How to run this version? install php-cli and php-curl if needed. you can then run it with command line client using wallet argument.

$php index.php --wallet=yourwalletaddresshere [--chain=Pirl, Ethereum, local] [--CMD=web3_clientVersion, net_version, getBalance, blockNumber, peerCount, help] [--id=integer]

You can also run the test-api.sh like this.

from Browser
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

Please come back later.
