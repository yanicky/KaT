# KaT
Key access Terminal: a customizable functional PHP framework structure for API.

I will update this repository as a demo for the framework structure. Please check HOWTO.md for usage details.

I got inspired while contributing on pirl-php-api, so i included the original usage(wallet=0xANYPIRLWALLET) and all my contributed features in a different packaging so i could use it to connect to other CHAINS and APIs.

Here is the link my fork of the pirl-php-api: <https://github.com/yanicky/pirl-php-api>

For the moment, this repository(KaT) is a place holder for the publication of a bootstrap code for the KaT framework while the KaT_base is being written and documented again(last version is from 2006). 

This code is intended to be working without modification on at least PHP-CLI, PHP-FPM(PHP_VERSION <= 7.0) and HHVM. It is tested with yanicky/[HHVM-LIVE](https://github.com/yanicky/HHVM-LIVE). Check [KaT.HH](https://github.com/yanicky/KaT.HH) and [HHVM-LIVE](https://github.com/yanicky/HHVM-LIVE) for more hacklang implementation and tools.
 
This new bootstrap version for the KaT framework is being created here, for public usage against multiple contemporary Web3.0 APIs & DATASET. Enjoy!

Datastores will be added once a KaT_base(SQLite) is completed to handle modularity.

The master branch might not be 24/7 stable, simply because most edits are done directly on github web interface before re-testing the whole install/test sequence, please use lastest released version instead. 

##### This application is written and distributed as a DEMO for the KaT framework. It's neither considered(yet) optimized or secured in my perspective of things. Please use with care and considerations.

### Requirement 
* Require PHP.
* Require composer available in PATH for dependencies installation.


### Optionally 
* NGINX Web Server
* HipHop Virtual Machine : [HHVM](https://hhvm.com).

For a complete development environment please check yanicky/[HHVM-LIVE](https://github.com/yanicky/HHVM-LIVE): a live-build config to create a bootable ISO image for web  development/deployment with [HHVM](https://hhvm.com), [NGINX](https://nginx.com) and [PHP-FPM](https://php.net) among other daemons/tools.

### How to
Check the HOWTO.md or use CMD=howto for usage examples.

(While some CMD and/or OPTION names might change in the future, they will be properly transitioned.)

Feel free to add pull requests or fork it for your own usage.

1. ``` git clone https://github.com/yanicky/KaT;```

2. ``` cd KaT; ```

3. ``` composer.phar install; ```

4. ``` php index.php --CMD=howto; ```

### Still asking yourself what's a KaT? 
Well think of it as a simple application, flexible and agile as a Cat, but faithful and predictable as a dog.

The most basic concepts around KaT are:

1. A condition tree that is populated/validated in a non-blocking manner.

2. Input and Output are managed in KaT/ 

3. Data processing and functions are processed in KaT_base/.(not implemented)

4. A configurable minimalist approach allowing branches to be enabled/disabled easily.

Enjoy!

Please come back later.

yanicky
