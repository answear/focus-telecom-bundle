<?php

declare(strict_types=1);

namespace Answear\FocusContactCenterBundle\ValueObject;

final class AttributeValue
{
    /**
     * @var string
     */
    private $attribute;

    /**
     * @var string
     */
    private $value;

    public function __construct(string $attribute, string $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;
    }

    public function getAttribute(): string
    {
        return $this->attribute;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
