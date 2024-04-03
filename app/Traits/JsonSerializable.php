<?php

namespace App\Traits;

trait JsonSerializable
{
    public function getJsonInfo()
    {
        return json_encode($this->toArray());
    }
}