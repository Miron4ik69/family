<?php 

return [   
        'database' => [
            'connection' => 'mysql:host=localhost',
            'dbname' => 'family',
            'username' => 'root',
            'password' => 'dfhbrfg58758',
            'options' => [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]  
        ]
 ];

  