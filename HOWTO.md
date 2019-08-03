## HOW-TO:

How to run this version? install php-cli and php-curl if needed. you can then run it with command line client using wallet argument or served by a webserver of your choice.
```
php index.php --wallet=yourwalletaddresshere [--chain=Pirl, Ethereum, local] [--CMD=web3_clientVersion, net_version, getBalance, blockNumber, peerCount,test,howto, help] [--id=integer]
```
## Running Test

You can also run the test-api.sh like this.

From shell(external test with php-cli)
```
sh test-api.sh;
```

From your browser(new tests will soon be there)

http(s)://hostname/path/to/index.php?CMD=test

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
