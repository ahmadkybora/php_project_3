<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_Domain_Repository_BackendUserRepository')) {
    return;
}
class Tx_Extbase_Domain_Repository_BackendUserRepository
{
}
\class_alias('Tx_Extbase_Domain_Repository_BackendUserRepository', 'Tx_Extbase_Domain_Repository_BackendUserRepository', \false);
