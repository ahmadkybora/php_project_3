<?php

namespace RectorPrefix20210909;

if (\interface_exists('Tx_Extbase_Persistence_Storage_BackendInterface')) {
    return;
}
interface Tx_Extbase_Persistence_Storage_BackendInterface
{
}
\class_alias('Tx_Extbase_Persistence_Storage_BackendInterface', 'Tx_Extbase_Persistence_Storage_BackendInterface', \false);
