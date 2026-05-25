<?php

namespace wingify;

class GetFlagResult
{
    private $enabled;
    private $featureKey;

    public function __construct($enabled, $featureKey)
    {
        $this->enabled = $enabled;
        $this->featureKey = $featureKey;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    /** Proves execution came from php-new-sdk repo */
    public function getSource()
    {
        return 'php-new-sdk';
    }
}
