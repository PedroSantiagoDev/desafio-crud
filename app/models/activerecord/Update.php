<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordExecuteInterface;
use app\interfaces\ActiveRecordInterface;

class Update implements ActiveRecordExecuteInterface
{
    public function __construct(private string $field, private string|int $value)
    {
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);
            $connection = Connection::connect();

            $attributes = array_merge($activeRecordInterface->getAttributes(), [
                $this->field => $this->value
            ]);

            $prepare = $connection->prepare($query);
            $prepare->execute($attributes);

            return $prepare->rowCount();
        } catch (\Throwable $throw) {
            var_dump($throw->getMessage());
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        if (array_key_exists("id", $activeRecordInterface->getAttributes())) {
            throw new \Exception("O campo id não pode ser passado para o update");
        }
        $sql = "update {$activeRecordInterface->getTable()} set";
        foreach ($activeRecordInterface->getAttributes() as $key => $value) {
            $sql .= " {$key}=:{$key},";
        }
        $sql = rtrim($sql, ",");
        $sql .= " where {$this->field} = :{$this->field}";
        return $sql;
    }
}
