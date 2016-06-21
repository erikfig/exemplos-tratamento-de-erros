<?php

class NotFoundException extends \Exception
{

}


try {
	if (!isset($argv)) {
		throw new \Exception("Não foi executado pelo PHP CLI");
	}
	if (@$argv[1] != 'home') {
		throw new \NotFoundException("Página não encontrada");
	}
	echo 'Bem vindo ao meu site';
} catch (\NotFoundException $e) {
	echo 'NotFoundException: '.$e->getMessage().PHP_EOL;
	echo $e->getTraceAsString().PHP_EOL;
} catch (\Exception $e) {
	echo 'Exception: '.$e->getMessage();
}

