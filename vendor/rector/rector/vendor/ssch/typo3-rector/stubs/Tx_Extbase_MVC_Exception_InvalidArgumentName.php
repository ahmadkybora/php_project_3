<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_MVC_Exception_InvalidArgumentName')) {
    return;
}
class Tx_Extbase_MVC_Exception_InvalidArgumentName
{
}
\class_alias('Tx_Extbase_MVC_Exception_InvalidArgumentName', 'Tx_Extbase_MVC_Exception_InvalidArgumentName', \false);
