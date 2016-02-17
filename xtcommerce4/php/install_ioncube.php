<?php

$string = exec("php -i | grep extension_dir");


echo getExtDirFromString($string);


function getExtDirFromString($string)
{
	$array = explode("=>", $string);
	$dir = trim($array[2]);
	return $dir;
}
?>