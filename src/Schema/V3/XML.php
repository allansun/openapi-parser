<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class XML extends AbstractObject
{

    /**
     * Replaces the name of the element/attribute used for the described schema property. When defined within items, it
     * will affect the name of the individual XML elements within the list. When defined alongside type being array
     * (outside the items), it will affect the wrapping element and only if wrapped is true. If wrapped is false, it
     * will be ignored.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * The URI of the namespace definition. Value MUST be in the form of an absolute URI.
     *
     * @var string|null
     */
    public ?string $namespace = null;

    /**
     * The prefix to be used for the name.
     *
     * @var string|null
     */
    public ?string $prefix = null;

    /**
     * Declares whether the property definition translates to an attribute instead of an element. Default value is
     * false.
     *
     * @var bool|null
     */
    public ?bool $attribute = false;

    /**
     * MAY be used only for an array definition. Signifies whether the array is wrapped (for example,
     * <books><book/><book/></books>) or unwrapped (<book/><book/>). Default value is false. The definition takes
     * effect only when defined alongside type being array (outside the items).
     *
     * @var bool|null
     */
    public ?bool $wrapped = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
