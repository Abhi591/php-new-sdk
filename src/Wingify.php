<?php

namespace wingify;

class Wingify
{
    public static function init(array $options = [])
    {
        return new WingifyClient();
    }
}
