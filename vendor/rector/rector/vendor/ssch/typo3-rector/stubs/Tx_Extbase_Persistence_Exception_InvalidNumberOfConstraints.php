<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_Persistence_Exception_InvalidNumberOfConstraints')) {
    return;
}
class Tx_Extbase_Persistence_Exception_InvalidNumberOfConstraints
{
}
\class_alias('Tx_Extbase_Persistence_Exception_InvalidNumberOfConstraints', 'Tx_Extbase_Persistence_Exception_InvalidNumberOfConstraints', \false);
