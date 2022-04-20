<?php

namespace Fiks\TextDatabase\Schemes\Column;

class _String
{
    /**
     * Колонки, которые создаются
     *
     * @var array
     */
    public array $columns;

    /**
     * Длина строки
     *
     * @var int
     */
    public int $length;

    /**
     * Может быть NULL, если true
     * Иначе по умолчанию обязательно для заполнения
     *
     * @var bool
     */
    public bool $nullable;

    /**
     * Конструктор
     *
     * @param array $columns
     */
    public function __construct(array $columns)
    {
        $this->columns = $columns;
    }

    /**
     * Длина строки
     *
     * @param int $length
     * @return $this
     */
    public function length(int $length = 255): _String
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Может ли быть пустой
     */
    public function nullable(): _String
    {
        $this->nullable = true;

        return $this;
    }
}