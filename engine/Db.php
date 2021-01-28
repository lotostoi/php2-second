<?php

namespace app\engine;

use app\config\Config;
use app\traits\TSingletone;

class Db
{
    protected $connection =  null;
    private $config = null;
    private static $instance = null;

    use TSingletone;

    public function getConnection()
    {
        if (is_null($this->connection)) {
            $this->config = (new Config)->db;
            $this->connection = new \PDO(
                $this->prepareDsnString(),
                $this->config['user'],
                $this->config['password']
            );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDsnString()
    {
        return sprintf(
            "%s:host=%s;dbname=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['dbname']
        );
    }

    protected function query($sql, $params)
    {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }


    public function queryOne($sql, $params, $class = null)
    {
        if (!$class) {
            return $this->query($sql, $params)->fetch();
        } else {
            $stmt = $this->query($sql, $params);
            $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
            return $stmt->fetch();
        }
    }

    public function queryAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }

    public function execute($sql, $params)
    {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
    }

    public function getLastId()
    {
        return $this->getConnection()->lastInsertId();
    }


}
