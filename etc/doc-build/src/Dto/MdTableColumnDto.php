<?php

namespace Oft\Generator\Dto;

use Oft\Generator\Enums\MdTableColumnAlignEnum;

class MdTableColumnDto extends BaseDto
{
    /** @var MdTableColumnAlignEnum */
    public $align;

    /** @var string */
    public $key;

    /** @var callable */
    public $setTemplate;
}