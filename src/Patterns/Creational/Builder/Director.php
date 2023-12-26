<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Computer\Types\Computer;

class Director
{
    public function __construct(private Builder $builder)
    {
    }

    public function changeBuilder(Builder $builder): void
    {
        $this->builder  = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}