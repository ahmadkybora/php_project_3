<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_MVC_CLI_Request')) {
    return;
}
class Tx_Extbase_MVC_CLI_Request
{
}
\class_alias('Tx_Extbase_MVC_CLI_Request', 'Tx_Extbase_MVC_CLI_Request', \false);
