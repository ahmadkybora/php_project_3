<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_collection_RecordCollectionRepository')) {
    return;
}
class t3lib_collection_RecordCollectionRepository
{
}
\class_alias('t3lib_collection_RecordCollectionRepository', 't3lib_collection_RecordCollectionRepository', \false);
