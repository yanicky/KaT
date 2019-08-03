# KaT
Key access Terminal: a customizable functional PHP framework structure for API.

For the moment, this is a place holder for the publication of a bootstrap code for the KaT framework.

While the KaT_base is being written again(last version is from 2006), i will update this repository as a demo for the framework structure. 

I got inspired while contributing on pirl-php-api, so i included the original usage and all my contributed features in a smaller footprint.

Link for the pirl-php-api: https://github.com/yanicky/pirl-php-api

Since the pirl-php-api code was forked, after just a few commits, i felt that a refactoring had to be done before getting into cool modular structure. Then i understood, that i could not ignore that roaring KaT anymore. 

So a new bootstrap version is being created here, for public usage against contemporary Web3.0 DATA. Datastores will be added once a KaT_base(SQLite) is completed to handle modularity. 

The most basic concepts around KaT are:

1. A condition tree that is populated/validated in a non-blocking manner.

2. Input and Output are managed in KaT/ 

3. Data processing and functions are processed in KaT_base/.

4. A configurable minimalist approach allowing branches to be enabled/disabled easily.


Until documentation/reorganization is being managed within KaT, please use these examples for now.
(While some CMD names might change in the future, they will be properly transitioned)

## HOW-TO:

How to run this version? install php-cli and php-curl if needed. you can then run it with command line client using wallet argument or served by a webserver of your choice.
```
php index.php --wallet=yourwalletaddresshere [--chain=Pirl, Ethereum, local] [--CMD=web3_clientVersion, net_version, getBalance, blockNumber, peerCount,test, help] [--id=integer]
```
## Running Test

You can also run the test-api.sh like this.

from Browser(not tested in cloud environement, but its tested(nginx/php-fpm)

http(s)://hostname/path/to/index.php?CMD=test

From shell
```
php index.php --CMD=test;
```
or
```
/bin/sh test-api.sh;
```
#### The test should result an output similar to this:
>
> Testing without parameters
> url should be in format 'http(s)://hostname/path/to/index.php?wallet=youraddresshere' or using --wallet=yourwallethere from php-cli
> ***
> Testing with bad wallet only parameters
> wallet should be 42 char, including the 0x beginning
> ***
> Testing with good wallet parameters only with default parameter
> {"wallet":"0x256b2b26Fe8eCAd201103946F8C603b401cE16EC","balance":"15760000.0000000000"}***
> Testing getBalance with Ethereum chain
> {"jsonrpc":"2.0","id":"1","result":"0x0"}
> ***
> Testing getBalance with bad chain parameter
> {"jsonrpc":"2.0","id":"2","result":"0xd094f4fd9e5595a000000"}
> ***
> Testing blockNumber with Pirl chain
> {"jsonrpc":"2.0","id":"3","result":"0x423a87"}
> ***
> Testing blockNumber with Ethereum chain
> {"jsonrpc":"2.0","id":"4","result":"0x7e3e24"}
> ***
> Testing peerCount with default chain
> {"jsonrpc":"2.0","id":"5","result":"0x160"}
> ***
> Testing peerCount with Ethereum chain
> {"jsonrpc":"2.0","id":"6","result":"0xb"}
> ***
> Testing net_version with default chain
> {"jsonrpc":"2.0","id":"7","result":"3125659152"}
> ***
> Testing net_version with Ethereum chain
> {"jsonrpc":"2.0","id":"8","result":"1"}
> ***
> Testing client_version with Default chain
> {"jsonrpc":"2.0","id":"9","result":"Pirl/v1.8.27-v6-masternode-content-damocles-4aa88705/linux-amd64/go1.12"}
> ***
> Testing client_version with Ethereum chain
> {"jsonrpc":"2.0","id":"10","result":"cloudflare-geth"}***

Also...

This version Default on the Pirl Network(https://wallrpc.pirl.io:443) but Cloudflare's Ethereum Gateway(https://cloudflare-eth.com:443) or any other json-rpc server using --chain=[Pirl, Ethereum, local] optional parameter.

If you want to have it served by a webserver, put the files into the webroot directory and try a url syntax like these:

http(s)://hostname/path/to/index.php?chain=Pirl&CMD=blockNumber

http(s)://hostname/path/to/index.php?wallet=youraddresshere

http(s)://hostname/path/to/index.php?wallet=youraddresshere&chain=local&rpchost=localhost&rpcport=6588

http(s)://hostname/path/to/index.php?CMD=help

Feel free to add pull requests or fork it for your own usage.

### Still asking yourself what's a KaT? 
Well think of it as a simple application, flexible and agile as a Cat, but faithful and predictable as a dog.

Enjoy!

Please come back later.

yanicky

*/

