<?php

namespace app\model;

use app\interfaces\{IModel};
use app\engine\{Db};
use app\traits\GetterAndSetter;

abstract  class Model implements IModel
{

    use GetterAndSetter;

    abstract static public function getTableName();

    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryOne($sql, ['id' => $id], static::class);
    }

    public static function getAll($fieldName = null, $value = null)
    {
        $tableName = static::getTableName();
        $sql = $fieldName && $value ? "SELECT * FROM {$tableName} WHERE `{$fieldName}`={$value}" : "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public function insert()
    {
        $tableName = static::getTableName();
        $data = $this->getColumnsAndValues($this);
        $sql = "INSERT INTO {$tableName} ({$data['columns']}) VALUES ({$data['values']})";
        Db::getInstance()->execute($sql, get_object_vars($this));
        $this->id = Db::getInstance()->getLastId();
    }



    public static function getColumn($column, $fieldName = null, $value = null)
    {
        $tableName = static::getTableName();
        $sql = $fieldName && $value ? "SELECT $column FROM {$tableName} WHERE `{$fieldName}`={$value}" : "SELECT * FROM {$tableName}";
        $array = [];
        foreach (Db::getInstance()->queryAll($sql) as $id) {
            $array[] = $id[$column];
        }
        return $array;
    }
    public static function getColumnIn($column, $fieldName, $array)
    {
        $tableName = static::getTableName();
        $values = implode(',', $array);
        $sql = "SELECT $column FROM {$tableName} WHERE `{$fieldName}`IN ({$values})";
        $array = [];
        foreach (Db::getInstance()->queryAll($sql) as $id) {
            $array[] = $id[$column];
        }
        return $array;
    }

    protected function getColumnsAndValues($obj)
    {
        $columns = null;
        $values = null;
        $keys = array_keys(get_object_vars($obj));
        $count = 0;
        foreach ($keys as $key) {
            $if = count($keys) - 1 !== $count++;

            $columns .= $if ? '`' . $key . '`, ' : '`' . $key . '`';
            $values .= $if ? ':' . $key . ', ' : ':' . $key;
        }
        return ['columns' => $columns, 'values' => $values];
    }
}
