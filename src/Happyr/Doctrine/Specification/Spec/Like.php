<?php

namespace Happyr\Doctrine\Specification\Spec;

class Like extends Comparison
{
    const CONTAINS = "%%%s%%";
    const ENDS_WITH = "%%%s";
    const STARTS_WITH = "%s%%";

    public function __construct($field, $value, $format, $dqlAlias = null)
    {
        $formattedValue = $this->formatValue($format, $value);
        parent::__construct(self::LIKE, $field, $formattedValue, $dqlAlias);
    }

    private function formatValue($format, $value)
    {
        return sprintf($format, $value);
    }
}
