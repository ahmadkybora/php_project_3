<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_Persistence_Session')) {
    return;
}
class Tx_Extbase_Persistence_Session
{
}
\class_alias('Tx_Extbase_Persistence_Session', 'Tx_Extbase_Persistence_Session', \false);
