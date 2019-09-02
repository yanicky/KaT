<?php
// Tested with php-cli and php-fpm
//
// require php-curl to be installed/enabled.


$inithack = file_get_contents('initmini.hack');
eval($inithack);
?>
