<?php

namespace wingify;

class WingifyClient
{
    public function getFlag($featureKey, $context)
    {
        return new GetFlagResult(true, $featureKey);
    }
}
