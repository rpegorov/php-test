<?php

namespace App;
use Library\SmsService;

class Notification {

    private $smsService;
    private $smsTo; 

    public function __construct(SmsService $smsService) {
        $this->smsService = $smsService;
    }

    public function notify(string $message, string $smsTo) {
        $this->smsService->send($smsTo, $message);
    }
}
?>