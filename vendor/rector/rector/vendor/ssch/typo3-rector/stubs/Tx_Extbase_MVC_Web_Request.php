<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_MVC_Web_Request')) {
    return;
}
class Tx_Extbase_MVC_Web_Request
{
}
\class_alias('Tx_Extbase_MVC_Web_Request', 'Tx_Extbase_MVC_Web_Request', \false);
