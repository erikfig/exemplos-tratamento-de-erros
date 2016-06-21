<?php

try {
	$con = new PDO("mysql:host=localhost;dbname=nao_existe", "root", "errado"); 
} catch (PDOException $e) {
	echo $e->getMessage().PHP_EOL;
	echo $e->getTraceAsString().PHP_EOL;
}
