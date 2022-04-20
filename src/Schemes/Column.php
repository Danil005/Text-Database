<?php

namespace Fiks\TextDatabase\Schemes;


use Fiks\TextDatabase\Schemes\Column\_String;

class Column
{
    public array $columns = [];

    public function string(string $columnName): _String
    {
        $this->columns[$columnName] = [];

        return new _String($this->columns);
    }

    public function integer()
    {

    }

    public function float()
    {

    }

    public function boolean()
    {

    }

    public function timestamps()
    {

    }


    public function id()
    {

    }


}