<?php

$dir = 'albums/';

$domain = $_SERVER[HTTP_HOST];

if ($domain = 'ca-dev.fr') $filePath = 'http://ca-dev.fr/PERSO/example/';
$asRoot = file_exists('albums');
