<?php

namespace RectorPrefix20210909;

if (\interface_exists('Tx_Extbase_Persistence_QOM_NotInterface')) {
    return;
}
interface Tx_Extbase_Persistence_QOM_NotInterface
{
}
\class_alias('Tx_Extbase_Persistence_QOM_NotInterface', 'Tx_Extbase_Persistence_QOM_NotInterface', \false);
