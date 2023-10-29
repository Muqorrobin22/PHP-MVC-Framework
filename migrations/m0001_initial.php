<?php

namespace app\migrations;

use app\core\Application;

class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email varchar(255) not null ,
                firstname varchar(255) not null ,
                lastname varchar(255) not null ,
                status TINYINT not null ,
                created_at timestamp default current_timestamp
            ) ENGINE=INNODB;
        ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}