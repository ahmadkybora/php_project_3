<?php

namespace RectorPrefix20210909;

if (\class_exists('t3lib_tree_pagetree_Node')) {
    return;
}
class t3lib_tree_pagetree_Node
{
}
\class_alias('t3lib_tree_pagetree_Node', 't3lib_tree_pagetree_Node', \false);
