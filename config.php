<?php

require_once 'vendor/autoload.php';

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_connections(array('development' => 
        'pgsql://vinicius:123456A@10.11.0.2/phpcrudorm'));
});