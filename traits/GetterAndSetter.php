<?php

namespace app\traits;

trait GetterAndSetter
{
    public function __get($name)
    {
        return property_exists($this,$name) ? $this->$name :  "This object doesn't has property - {$name}";
    }
    public function __set($name, $values)
    {
        if (property_exists($this,$name)) {
            $this->$name = $values;
        } else {
            return "This object doesn't has property - {$name}";
        }
    }
}
