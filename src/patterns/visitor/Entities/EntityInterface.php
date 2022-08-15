<?php

namespace Patterns\Visitor\Entities;

use Patterns\Visitor\Reports\VisitorInterface;

interface EntityInterface
{
    public function visit(VisitorInterface $visitor);
}
