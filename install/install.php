<?php

require "vendor/autoload.php";

use TexLab\MyDB\Runner;
use TexLab\MyDB\DB;
use Core\Config;

$runner = new Runner(
    DB::Link([
        'host' => Config::MYSQL_HOST,
        'username' => Config::MYSQL_USER_NAME,
        'password' => Config::MYSQL_PASSWORD
    ]));

foreach (explode(";", file_get_contents('install/parnership.sql')) as $value) {
    try {
        if (!empty($value)) {
            $runner->runSQL($value);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
