<?php

$isHome = TRUE;
return $isHome? [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=atlas',
        'username' => 'gfl',
        'password' => 'gfl',
        'charset' => 'utf8',
    ]: [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=10.202.4.252;port=4215;dbname=DB_BK',
        'username' => 'DB_BK',
        'password' => '1e0c01741d490fff',
        'charset' => 'utf8',
    ];