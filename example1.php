<?php

try {
	throw new Exception('Explicando o que deu errado', 100);
} catch (Exception $e) {
	echo $e->getMessage(). ' - '. $e->getCode();
}

