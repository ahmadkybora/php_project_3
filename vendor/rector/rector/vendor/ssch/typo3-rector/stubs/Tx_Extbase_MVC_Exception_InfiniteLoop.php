<?php

namespace RectorPrefix20210909;

if (\class_exists('Tx_Extbase_MVC_Exception_InfiniteLoop')) {
    return;
}
class Tx_Extbase_MVC_Exception_InfiniteLoop
{
}
\class_alias('Tx_Extbase_MVC_Exception_InfiniteLoop', 'Tx_Extbase_MVC_Exception_InfiniteLoop', \false);
