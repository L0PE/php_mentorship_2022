<?php
require_once __DIR__ . "/../boot/bootDoctrine.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
