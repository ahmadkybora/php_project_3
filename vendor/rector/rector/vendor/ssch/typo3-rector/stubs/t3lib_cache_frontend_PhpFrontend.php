<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_cache_frontend_PhpFrontend')) {
    return;
}
class t3lib_cache_frontend_PhpFrontend
{
}
\class_alias('t3lib_cache_frontend_PhpFrontend', 't3lib_cache_frontend_PhpFrontend', \false);
