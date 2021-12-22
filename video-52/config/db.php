<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=curso_yii2',
    'username' => 'cursos',
    'password' => 'Cursos@blonder413',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',

    'on afterOpen' => function($event) {
        // $event->sender se refiere a la conexión DB
        // $event->sender->createCommand("SET TIME ZONE 'America/Bogota'")->execute(); // postgreSQL
        $event->sender->createCommand("SET time_zone = '-5:00'")->execute(); // MySQL
    }
];
