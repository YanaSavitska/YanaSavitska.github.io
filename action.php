<?php
if ($_POST) {
	$string = serialize($_POST);
	$f = fopen('buy.txt', 'a');
	fwrite($f, $string . PHP_EOL);
	fclose($f);
}
include 'thank.php';