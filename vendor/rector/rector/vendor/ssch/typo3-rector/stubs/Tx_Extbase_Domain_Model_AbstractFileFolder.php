<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_Domain_Model_AbstractFileFolder')) {
    return;
}
class Tx_Extbase_Domain_Model_AbstractFileFolder
{
}
\class_alias('Tx_Extbase_Domain_Model_AbstractFileFolder', 'Tx_Extbase_Domain_Model_AbstractFileFolder', \false);
