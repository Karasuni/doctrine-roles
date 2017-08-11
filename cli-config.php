<?php

require_once __DIR__ . '/src/EntityManager.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(GetEntityManager());