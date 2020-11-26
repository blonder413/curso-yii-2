<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=cursoyii2',
    'username' => 'cursos',
    'password' => '123456',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',

    'on afterOpen' => function($event) {
        // $event->sender se refiere a la conexión DB
        $event->sender->createCommand("SET TIME ZONE 'America/Bogota'")->execute();
    }
];
