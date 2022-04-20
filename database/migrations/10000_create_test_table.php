<?php

use Fiks\TextDatabase\Migrations\Migration;
use Fiks\TextDatabase\Schemes\Column;
use Fiks\TextDatabase\Schemes\Scheme;

class CreateTestTable extends Migration
{
    public function run()
    {
        Scheme::create('test', function(Column $column) {

        });
    }
}