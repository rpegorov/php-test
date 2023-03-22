<?php

class Test {
    private $params = [];

    public function __call($name, $arguments) {
        $prefix = substr($name, 0, 3);
        $paramName = lcfirst(substr($name, 3));

        if ($prefix === 'set') {
            $this->params[$paramName] = $arguments[0];
        } elseif ($prefix === 'get') {
            return $this->params[$paramName];
        }
    }
}
?>