<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_collection_Editable')) {
    return;
}
class t3lib_collection_Editable
{
}
\class_alias('t3lib_collection_Editable', 't3lib_collection_Editable', \false);
