<?php

class Db
{
    protected $tableName;
    protected $wheres = [];


    public function table($tableName)
    {

        $this->tableName = $tableName;
        return $this;
    }

    public function where($filed, $value)
    {
        $this->wheres[] = [
            'field' => $filed,
            'value' => $value
        ];
        return $this;
    }
    // наверное я неправильно понял, потому что это просто
    public function andWhere($filed, $value)
    {
        return $this->where($filed, $value);
    }
    

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->tableName} ";

        if (!empty($this->wheres)) {
            $sql .= " WHERE ";
        }
        foreach ($this->wheres as $value) {
            $sql .= $value['field'] . " = " . $value['value'];
            if ($value != end($this->wheres)) $sql .= " AND ";
        }
        $this->wheres = [];


        return $sql . "<br>";
    }

    public function getOne($id)
    {
        return "SELECT * FROM {$this->tableName} WHERE id = {$id}" . "<br>";
    }
}

$db = new Db();
echo $db->table('goods')->where('name', 'чай')->andWhere('id', 5)->getAll();
echo $db->table('users')->where('login', 'admin')->andwhere('pass', 123)->getAll();
echo $db->table('users')->getAll();
echo $db->table('users')->getOne(5);
