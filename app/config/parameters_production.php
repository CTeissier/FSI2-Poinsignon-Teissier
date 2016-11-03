<?php
    //URL : postgres://uiaqhfymvkcjih:BjntgdkrZIII1yi5b7BshOXPlT@ec2-184-73-199-29.compute-1.amazonaws.com:5432/dd684rt9crc2om
    //$db = parse_url(getenv('CLEARDB_DATABASE_URL')); If MySQL is chosen
	$db = parse_url(getenv('HEROKU_POSTGRESQL_IVORY_URL'));

    

    $container->setParameter('database_driver', 'pdo_mysql');
    $container->setParameter('database_host', $db['host']);
    $container->setParameter('database_port', $db['port']);
    $container->setParameter('database_name', substr($db["path"], 1));
    $container->setParameter('database_user', $db['user']);
    $container->setParameter('database_password', $db['pass']);
    $container->setParameter('secret', getenv('SECRET'));
    $container->setParameter('locale', 'en');
    

    $container->setParameter('mailer_transport', null);
    $container->setParameter('mailer_host', null);
    $container->setParameter('mailer_user', null);
    $container->setParameter('mailer_password', null);