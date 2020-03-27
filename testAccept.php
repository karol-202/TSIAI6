<?php
var_dump($_SERVER);
echo 'Przeglądarka (zawiera system operacyjny klienta): '.$_SERVER['HTTP_USER_AGENT'].'<br>';
echo 'IP klienta: '.$_SERVER['REMOTE_ADDR'].'<br>';
echo 'Port: '.$_SERVER['SERVER_PORT'].'<br>';
echo 'Protokół: '.$_SERVER['SERVER_PROTOCOL'].'<br>';
echo 'Nazwa pliku: '.basename(__FILE__).'<br>';