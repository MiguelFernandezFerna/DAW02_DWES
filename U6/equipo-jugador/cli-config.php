<?php
//carga tu fichero project bootstrap
require_once("bootstrap.php");

use Doctrine\ORM\Tools\Console\ConsoleRunner;

//obtiene el entity manager se lo pasa a la consola

return ConsoleRunner::createHelperSet($entityManager);