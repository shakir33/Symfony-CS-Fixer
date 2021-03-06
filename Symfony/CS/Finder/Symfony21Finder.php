<?php

/*
 * This file is part of the Symfony CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Finder;

use Symfony\Component\Finder\Finder;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Symfony21Finder extends SymfonyFinder
{
    protected function getFileToExclude()
    {
        return array(
            'Symfony/Component/Yaml/Tests/Fixtures/sfTests.yml',
        );
    }
}
