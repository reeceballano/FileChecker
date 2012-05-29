<?php
include('autoload.php');

$filereader = new Filereader();

$folder = 'files/';

$files = $filereader->reader($folder);

foreach($files as $list) {
	$fileex = $filereader->explodeArray(' ', $list);
	$fileex = $filereader->fileName($fileex[2]);
	echo $list . " => " . $fileex . '<hr>';
}
?>