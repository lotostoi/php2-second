<?php

namespace app\model;

use app\interfaces\{IModel};
use app\engine\{Db};
use app\traits\GetterAndSetter;

abstract class Model implements IModel
{

    use GetterAndSetter;

    protected $props = null;

    abstract static public function getTableName();

    public function __construct()
    {
        $this->props = $this->setProps();
    }

    public function setProps()
    {
        $props = [];
        foreach (get_object_vars($this) as $key => $value) {
            $props["$key"] = false;
        }
        return $props;
    }

    public function getTrueProps()
    {
        $props = [];
        foreach ($this->props as $key => $value) {
            if ($value) {
                $props["$key"] = $value;
            }
        }
        var_dump($props);
        return $props;
    }

    public function setFalseAllProps()
    {
        foreach ($this->props as $key => $value) {
            $this->props[$key] = false;
        }
    }

    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOne($sql, ['id' => $id], static::class);
    }

    public static function getOneByField($field, $value)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE {$field} = :{$field}";
        return Db::getInstance()->queryOne($sql, ["{$field}" => $value], static::class);
    }

    public static function getAll($fieldName = null, $value = null)
    {
        $tableName = static::getTableName();
        $sql = $fieldName && $value ? "SELECT * FROM {$tableName} WHERE `{$fieldName}`={$value}" : "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }
    public static function getAllRevert($fieldName = null, $value = null)
    {
        $tableName = static::getTableName();
        $sql = $fieldName && $value ? "SELECT * FROM {$tableName} WHERE `{$fieldName}`={$value} ORDER BY id DESC" : "SELECT * FROM {$tableName} ORDER BY id DESC";
        return Db::getInstance()->queryAll($sql);
    }

    public static function getLimit($from, $to)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT ?, ?";
        return Db::getInstance()->queryLimit($sql, $from, $to);
    }
    public static function getLimitRevert($from, $to)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} ORDER BY id DESC LIMIT ?, ?";
        return Db::getInstance()->queryLimit($sql, $from, $to);
    }

    public function insert()
    {
        $tableName = static::getTableName();
        $data = $this->getColumnsAndValues($this);
        $sql = "INSERT INTO {$tableName} ({$data['columns']}) VALUES ({$data['values']})";
        Db::getInstance()->execute($sql, $data['params']);
        $this->id = Db::getInstance()->getLastId();
    }

    public function delete()
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id=:id";
        return Db::getInstance()->execute($sql, [':id' => $this->id]);
    }

    public function update()
    {
        $params = [];
        $colums = [];
        foreach ($this->getTrueProps() as $key => $val) {
            $params[":{$key}"] = $this->$key;
            $colums[] = "`{$key}` = :{$key}";
        }
        $colums = implode(", ", $colums);
        $tableName = static::getTableName();
        $params['id'] = $this->id;
        $sql = "UPDATE `{$tableName}` SET {$colums} WHERE `id`=:id";
        Db::getInstance()->execute($sql, $params);
        $this->setFalseAllProps();
        return $this;
    }


    protected function getColumnsAndValues($obj)
    {
        $colums = null;
        $values = null;
        $params = [];
        foreach (get_object_vars($obj) as $key => $value) {
            if ($key === "props") continue;
            $params[$key] = $value;
        }
        $keys = array_keys($params);
        $count = 0;
        foreach ($keys as $key) {
            $if = count($keys) - 1 !== $count++;

            $colums .= $if ? '`' . $key . '`, ' : '`' . $key . '`';
            $values .= $if ? ':' . "{$key}" . ', ' : ':' . "{$key}";
        }
        return ['columns' => $colums, 'values' => $values, 'params' => $params];
    }

    public function showEverything()
    {
        return get_object_vars($this);
    }
}
