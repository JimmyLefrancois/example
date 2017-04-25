<?php

$dir = 'albums/';

$domain = $_SERVER[HTTP_HOST];

if ($domain = 'ca-dev.fr') $filePath = 'http://ca-dev.fr/PERSO/example/';

$asRoot = file_exists('albums');

$title = 'Jimmy Lefrancois Photography';

// IF AT PROJECT ROOT
if ($asRoot) {

	foreach (new DirectoryIterator($dir) as $folder) {
		if ($folder->isDir() && $folder->getFilename() != "." && $folder->getFilename() != "..") {
			foreach (new DirectoryIterator($dir . $folder->getFilename()) as $file) {
				if ($file->isFile() && $file->getFilename() != "." && $file->getFilename() != "..") {
					$home = file_get_contents($dir . $folder->getFilename() . '/home.json');
					$folders[$folder->getFilename()]['infos'] = json_decode($home);
					$folders[$folder->getFilename()]['pic'] = $dir . $folder->getFilename() . '/' . $folder->getFilename() . '.jpg';
				}
			}
		}
	}
} else {
	$title = $title .' - ' . getcwd();
}

