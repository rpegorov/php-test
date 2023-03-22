<b>Тестовые задания на понимание php</b>

Для работы с БД:

запустить docker-compose.yml

запустить скрипты в следующей последовательности:
1. create
2. insert
3. для получения результата из задания 3 - select.sql


Задания:

<b>Задание 1:</b> Написать результаты вызова функций и объяснить почему

    a) 	$m = "hello";
            $say = function () { 
    echo $m;
    }; 
    $say(); //Результат вызова

    b)	$m = "hello";
    $say = function () use ($m) {
    echo $m;
    };
    $say(); //Результат вызова

    c)	$m = "hello";
    $say = function () use ($m) {
    echo $m;
    };

    $m = "how are you?"; 
    $say(); //Результат вызова

	d)	$m = "hello";
    $say = function () use (&$m) {
    echo $m;
    };
    $m = "how are you?";
    $say(); //Результат вызова

<b>Задание 2:</b> Спроектировать схему БД для хранения информации о шахматных турнирах и их участниках.

<b>Задание 3:</b> Написать SQL который вернет участников с 2-мя победами в текущем году. Результат запроса должен содержать колонки: Имя участника, Количество побед
Решение может быть представлено в виде ссылки на http://sqlfiddle.com/. 

<b>Задание 4:</b> Проведите Оптимизацию кода ниже. Нужно написать с чем не согласны и почему. Напишите свой вариант.

    <?php

    namespace App;

    use Library\SmsService;

    class Notification
    {
    private $smsService;
    private $smsTo
    public function __construct(string $smsApiKey, string $smsFrom,  string $smsTo)
    {
            $this->smsService = new SmsService($smsApiKey, $smsFrom);
    $this->smsTo = $smsTo;
    }

    public function notify(string $message)
    {
        $this->smsService->send($this->smsTo, $message);
    } 

    }

<b>Задание 5:</b> Необходимо написать класс, экземпляр которого при вызове у него произвольной функции  начинающийся  на “set” сохранял бы  в себе значение параметра этой функции, а при вызове аналогичного метода начинающегося с “get” возвращал бы этот параметр
Пример:

    <?
    $obj = new Test();
    $anyParam = "Test";
    $obj->setAnyParamer($anyParam);
    print_r($obj->getAnyParamer()); // Test
