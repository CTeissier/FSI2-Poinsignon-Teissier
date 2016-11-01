<?php
$db = parse_url(getenv('CLEARDB_DATABASE_URL'));

$container->setParameter('database.driver', getenv('SYMFONY_BD_DRIVER'));
$container->setParameter('database.host', getenv('SYMFONY_BD_HOST'));
$container->setParameter('database.port', getenv('SYMFONY_BD_PORT'));
$container->setParameter('database.name', getenv('SYMFONY_BD_NAME'));
$container->setParameter('database.user', getenv('SYMFONY_BD_USER'));
$container->setParameter('database.password', getenv('SYMFONY_BD_PASS'));