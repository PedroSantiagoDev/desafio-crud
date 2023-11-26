<?php

namespace app\models;

use app\models\activerecord\Activerecord;

class Task extends Activerecord
{
    protected $table = 'tasks';
}