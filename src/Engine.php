<?php

namespace Fiks\TextDatabase;

class Engine
{
    /**
     * Настройки базы данной
     *
     * @var array|string[]
     */
    private array $config;

    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        # Устанавливаем значение по умолчанию
        $this->config = [
            'path' => __DIR__ . '../db'
        ];

        # Если есть заданный конфиг.


        if(!empty($config)) {
            # Объединяем со значениями по умолчанию
            $this->config = array_merge($this->config, $config);
        }
    }
}