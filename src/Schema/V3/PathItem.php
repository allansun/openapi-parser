<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class PathItem extends AbstractObject
{
    /**
     * Allows for an external definition of this path item. The referenced structure MUST be in the format of a Path
     * Item Object. In case a Path Item Object field appears both in the defined object and the referenced object, the
     * behavior is undefined.
     *
     * @var string|null
     */
    public ?string $_ref = null;

    /**
     * An optional, string summary, intended to apply to all operations in this path.
     *
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * An optional, string summary, intended to apply to all operations in this path.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * A definition of a GET operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $get = null;

    /**
     * A definition of a PUT operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $put = null;

    /**
     * A definition of a POST operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $post = null;

    /**
     * A definition of a DELETE operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $delete = null;

    /**
     * A definition of a OPTIONS operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $options = null;

    /**
     * A definition of a HEAD operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $head = null;

    /**
     * A definition of a PATCH operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $patch = null;

    /**
     * A definition of a TRACE operation on this path.
     *
     * @var Operation|null
     */
    public ?Operation $trace = null;

    /**
     * An alternative server array to service all operations in this path.
     *
     * @var Server[]|null
     */
    public ?array $servers = null;

    /**
     * A list of parameters that are applicable for all the operations described under this path. These parameters can
     * be overridden at the operation level, but cannot be removed there. The list MUST NOT include duplicated
     * parameters. A unique parameter is defined by a combination of a name and location. The list can use the
     * Reference Object to link to parameters that are defined at the OpenAPI Object’s components/parameters.
     *
     * @var Parameter[]|Reference[]|null
     */
    public ?array $parameters = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
