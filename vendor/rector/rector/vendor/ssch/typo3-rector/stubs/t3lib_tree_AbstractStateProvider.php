<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_tree_AbstractStateProvider')) {
    return;
}
class t3lib_tree_AbstractStateProvider
{
}
\class_alias('t3lib_tree_AbstractStateProvider', 't3lib_tree_AbstractStateProvider', \false);
