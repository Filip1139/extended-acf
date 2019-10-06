<?php

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use WordPlate\Acf\Fields\Attributes\Choices;

class Select extends Text
{
    use Choices;

    protected $type = 'select';
}