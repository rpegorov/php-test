<?php

namespace App;
use Library\SmsService;

class Notification {

    private $smsService;
    private $smsTo; //нехватало ; можно еще явно определить тип string
    public function __construct(string $smsApiKey, string $smsFrom, string $smsTo) {
        // не понятная расстановка брейсеров, может так и прнято, но не удобно читать
        // не знаю на сколько корректно использовать разное наименование функций в одном коде __
        $this->smsService = new SmsService($smsApiKey, $smsFrom);
        $this->smsTo = $smsTo;
    }

    public function notify(string $message) {
        $this->smsService->send($this->smsTo, $message);
    }
}

// пропущен закрывающий тег 
?>