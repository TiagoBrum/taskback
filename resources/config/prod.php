<?php
$app['log.level'] = Monolog\Logger::ERROR;
$app['api.version'] = "v1";
$app['api.endpoint'] = "/api";


/**
 * MySQL
 */
$app['db.options'] = array(
 "driver" => "pdo_mysql",
 "charset" => "utf8",
 "user" => "root",
 "password" => "root",
 "dbname" => "tasklist",
 "host" => "localhost",
);
