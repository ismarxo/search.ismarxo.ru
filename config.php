<?php

return [
    'debug' => [
        'on' => true
    ],
    'database' => [
        'sql' => [
            'name' => 'main',
            'type' => 'mysql',
            'host' => 'localhost',
            'login' => 'login',
            'password' => 'password'            
        ],
        'nosql' => [
            'from' => './db/domain-list.txt',
            'to' => './db/domain-result.txt'
        ]
    ],
    'enviroment' => 'dev'
];
