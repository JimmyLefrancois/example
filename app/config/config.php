<?php

$dir = 'albums/';

$domain = $_SERVER[HTTP_HOST];

if ($domain = 'ca-dev.fr') $filePath = 'http://ca-dev.fr/PERSO/example_outdoor/';
$asRoot = file_exists('albums');
