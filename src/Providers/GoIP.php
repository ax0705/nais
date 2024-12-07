<?php

namespace Nais\Providers;

class GoIP
{

    public string $url;
    public string $login;
    public string $password;

    public function __construct($url, $login, $password)
    {
        $this->url = $url;
        $this->login = $login;
        $this->password = $password;
        echo "Hello";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}