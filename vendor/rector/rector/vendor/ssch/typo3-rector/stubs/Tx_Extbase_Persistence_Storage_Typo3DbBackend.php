<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_Persistence_Storage_Typo3DbBackend')) {
    return;
}
class Tx_Extbase_Persistence_Storage_Typo3DbBackend
{
}
\class_alias('Tx_Extbase_Persistence_Storage_Typo3DbBackend', 'Tx_Extbase_Persistence_Storage_Typo3DbBackend', \false);
