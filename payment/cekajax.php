<?php
$name = $_GET['username'];

if ($name == 'jokowi'){
	$name = 'Presidenku';
}
echo json_encode([
	'available' => false,
	'nama' => $name
	]);