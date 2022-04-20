<?php

namespace Fiks\TextDatabase\Console;

use Wujunze\Colors;

class Console
{
    /**
     * Переменная для вывода цветного текста в консоль.
     *
     * @var Colors
     */
    private Colors $colors;

    /**
     * Доступные консольные команды
     *
     * @var array|string[]
     */
    private array $commands = [
        'make:table' => 'Create Table For Database',
        'make:migration' => 'Create Migration Class',
    ];

    /**
     * Команда, которая пришла
     *
     * @var string
     */
    private string $command = '';

    /**
     * Параметры
     *
     * @var array
     */
    private array $params = [];

    public function __construct()
    {
        $this->colors = new Colors();
    }


    public function read(array $argv)
    {
        # Удаляем название PHP файла, который был вызван
        # при помощи php. Убираем console.php из массива
        array_shift($argv);

        # Вносим параметры в объект переменной
        $this->params = $argv;
        # Если нет аргументов, выдаем помощь
        if(!isset($this->params[0])) {

            # Делаем отступы
            echo "\n\n";
            # Выводим текст с доступными командами
            echo $this->colors->getColoredString("Available commands:", 'white', 'purple');
            # Отступаем от текста выше и делаем нумерацию команд
            $text = "\n\n";
            $i = 1;
            # Проходимся по всем доступным командам
            foreach ($this->commands as $command => $description) {
                # Выводим команду и ее описание
                $text .= $i . '. ' . $command . ' | ' . $description . "\n";
                # Увеличиваем счетчик
                $i++;
            }
            # Отступаем от нижних краев
            $text .= "\n\n";

            # Выдаем результат и завершаем скрип
            echo $this->colors->getColoredString($text, 'white');
            exit();
        }

        # Проверяем есть ли такая команда в консоли
        if(!in_array($this->params[0], array_flip($this->commands))) {
            echo "\n\n";
            echo $this->colors->getColoredString(
                'Such a command does not exist. Type "php console-cli" to get a list of available commands.',
                'white',
                'red'
            );
            echo "\n\n";
            exit();
        }

        # Получаем команду
        $this->command = $this->params[0];
        # И удаляем эту команду, оставляя только аргументы
        array_shift($argv);
        $this->params = $argv;
    }

    public function run()
    {

    }
}