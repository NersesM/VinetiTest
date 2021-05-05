<?php

/**
 * Class Entitys
 */
abstract class Entity
{
    protected $fields = array();

    public final function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }

    public final function __get($name)
    {
        return $this->fields[$name];
    }
}