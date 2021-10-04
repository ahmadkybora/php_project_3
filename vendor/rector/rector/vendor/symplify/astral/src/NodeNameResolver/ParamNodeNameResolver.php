<?php

declare (strict_types=1);
namespace RectorPrefix20210909\Symplify\Astral\NodeNameResolver;

use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Param;
use RectorPrefix20210909\Symplify\Astral\Contract\NodeNameResolverInterface;
final class ParamNodeNameResolver implements \RectorPrefix20210909\Symplify\Astral\Contract\NodeNameResolverInterface
{
    /**
     * @param \PhpParser\Node $node
     */
    public function match($node) : bool
    {
        return $node instanceof \PhpParser\Node\Param;
    }
    /**
     * @param \PhpParser\Node $node
     */
    public function resolve($node) : ?string
    {
        $paramName = $node->var->name;
        if ($paramName instanceof \PhpParser\Node\Expr) {
            return null;
        }
        return $paramName;
    }
}
