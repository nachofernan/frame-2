<?php

namespace App\Config;

use Opis\Database\Database;
use Opis\Database\Connection;

class Model
{
    public $db = null;

    public $table;

    public function __construct()
    {
        try {
            self::openDatabaseConnection();
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    protected function openDatabaseConnection()
    {
        $connection = new Connection(
            'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'].';charset=utf8',
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        );

        $this->db = new Database($connection);
    }

    public function getAll($columnas = array())
    {
        return $this->db->from($this->table)
                ->select($columnas)
                ->all();
    }

    public function searchById(int $id, $columnas = array())
    {
        return $this->db->from($this->table)
                ->where('id')->is($id)
                ->select($columnas)
                ->first();
    }
}
