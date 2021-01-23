<?php

namespace app\traits;

trait GetterAndSetter
{
    public function __get($name)
    {
        extract(get_object_vars($this));
        return $$name ? $this->$name :  "This object doesn't has property - {$name}";
    }
    public function __set($name, $values)
    {
        extract(get_object_vars($this));
        if ($$name) {
            $this->$name = $values;
        } else {
            return "This object doesn't has property - {$name}";
        }
    }
}
