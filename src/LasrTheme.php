<?php

declare(strict_types=1);

namespace ErdmannFreunde\LasrTheme;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LasrTheme extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}