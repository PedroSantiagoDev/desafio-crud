<?php

namespace app\models\activerecord;

use app\interfaces\ActiveRecordExecuteInterface;
use app\interfaces\ActiveRecordInterface;
use ReflectionClass;


abstract class Activerecord implements ActiveRecordInterface
{
    protected $table = null;
    protected $attributes = [];

    public function __construct()
    {
        if (!$this->table) {
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
        }
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function __set($attributes, $value)
    {
        $this->attributes[$attributes] = $value;
    }

    public function __get($attributes)
    {
        return $this->attributes[$attributes];
    }

    public function execute(ActiveRecordExecuteInterface $activeRecordExecuteInterface)
    {
        return $activeRecordExecuteInterface->execute($this);
    }
}
