<?php
$arr = file('buy.txt');
echo "List of participants: <br> --------------- <br>";
foreach ($arr as $v) {
	$v = unserialize($v);
	echo 'Name: ' . $v['name'] . '<br>';
	echo 'Name: ' . $v['art'] . '<br>';
	echo 'Email: ' . $v['email'] . '<br>';
	echo 'Phone: ' . $v['phone'] . '<br>';
	echo 'Name: ' . $v['add'] . '<br>';
	echo '--------------- <br>';
}
