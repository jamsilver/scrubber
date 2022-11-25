<?php

namespace ClntDev\Scrubber\Handlers;

use ClntDev\Scrubber\Contracts\DataHandler;
use Faker\Factory as Faker;
use Faker\Generator;

abstract class Handler implements DataHandler
{
    public string $table;

    public string $field;

    public mixed $input;

    public string $primaryKey;

    public ?string $type;

    public Generator $faker;

    public function __construct(
        string $table,
        string $field,
        mixed $input,
        string $primaryKey = 'id',
        ?string $type = null,
        string $seed = 'scrubber'
    ) {
        $this->table = $table;
        $this->field = $field;
        $this->input = $input;
        $this->primaryKey = $primaryKey;
        $this->type = $type;
        $this->faker = Faker::create();
        $this->faker->seed($seed);
    }

    abstract public static function detect(mixed $value): bool;

    public function getTable(): string
    {
        return $this->table;
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
