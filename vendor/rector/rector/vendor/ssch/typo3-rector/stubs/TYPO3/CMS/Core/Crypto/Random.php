<?php

namespace RectorPrefix20210909\TYPO3\CMS\Core\Crypto;

if (\class_exists('TYPO3\\CMS\\Core\\Crypto\\Random')) {
    return;
}
class Random
{
    /**
     * @return string
     */
    public function generateRandomBytes()
    {
        return 'bytes';
    }
    /**
     * @return string
     */
    public function generateRandomHexString()
    {
        return 'hex';
    }
}
