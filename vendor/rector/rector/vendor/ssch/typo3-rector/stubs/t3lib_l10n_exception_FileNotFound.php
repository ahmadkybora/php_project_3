<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_l10n_exception_FileNotFound')) {
    return;
}
class t3lib_l10n_exception_FileNotFound
{
}
\class_alias('t3lib_l10n_exception_FileNotFound', 't3lib_l10n_exception_FileNotFound', \false);
