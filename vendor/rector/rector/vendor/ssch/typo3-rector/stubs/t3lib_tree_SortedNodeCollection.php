<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_tree_SortedNodeCollection')) {
    return;
}
class t3lib_tree_SortedNodeCollection
{
}
\class_alias('t3lib_tree_SortedNodeCollection', 't3lib_tree_SortedNodeCollection', \false);
