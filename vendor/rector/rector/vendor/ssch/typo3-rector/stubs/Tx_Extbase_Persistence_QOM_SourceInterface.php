<?php

namespace RectorPrefix20210909;

if (\interface_exists('Tx_Extbase_Persistence_QOM_SourceInterface')) {
    return;
}
interface Tx_Extbase_Persistence_QOM_SourceInterface
{
}
\class_alias('Tx_Extbase_Persistence_QOM_SourceInterface', 'Tx_Extbase_Persistence_QOM_SourceInterface', \false);
