<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_cli')) {
    return;
}
class t3lib_cli
{
}
\class_alias('t3lib_cli', 't3lib_cli', \false);
