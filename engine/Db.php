<?php
namespace app\engine;

include_once "../config/config.php";

class Db
{
    public static $db =  null;

    public function __construct()
    {
        if (is_null($this->db)) {
            $this->db = new \mysqli(HOST, USER, PASS, DB_NAME) or die("Connection's error" . mysqli_connect_error());
        }
    }

    public function queryAll($request)
    {
        $result = $this->db->query($request) or $this->db->connect_error;
        $array_result = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $array_result[] = $row;
        }
        return $array_result;
    }

    public function execute($request)
    {
        $this->db->query($request) or $this->db->connect_error;
        return mysqli_affected_rows($this->link);
    }

    public function queryOne($request)
    {
        $result = $this->db->query($request)[0] or $this->db->connect_error;
        return $result;
    }

    function protect($val)
    {
        return strip_tags(htmlspecialchars(mysqli_real_escape_string($this->db, $val)));
    }
}
