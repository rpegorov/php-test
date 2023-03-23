<?php

namespace App;
use Library\SmsService;

class Notification {

    // в конструкторе оставляем только номер для отправки
    private $smsTo;     
    public function __construct(string $smsTo) {
        $this->smsTo = $smsTo;
    }
    
    // логика отправки сообщения переносится в метод notify, где в случае необходимости можно поменять используемую библиотеку SmsService
    // на другую с минимальными исправлениями 
    public function notify(SmsService $smsService, string $message) {
        $smsService->send($this->smsTo, $message);
    }
}

?>