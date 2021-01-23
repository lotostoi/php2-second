<?php
namespace app\config;
use app\traits\GetterAndSetter;
class Config
{
    protected $db = [
        'driver' => 'mysql',
        'host' => 'localhost:3306',
        'user' => 'lotos',
        'password' => 'XrTA2B2Igm3AzBPR',
        'dbname' => 'my_portfolio'
    ];

    Use GetterAndSetter;
}
