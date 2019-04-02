<?php

namespace App\Wcs;

class Hello
{

    public function talk()
    {
        return 'Hello World !';
    }
}

function age($date)
{
    return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
}