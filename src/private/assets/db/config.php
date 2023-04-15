<?php
define('BASE', dirname(__DIR__));
// print_r(BASE);die();
include_once BASE.'/variable.php';
require_once BASE_PATH.'/Libraray/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(BASE_PATH.'/Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/db_log'
    ));
});
?>