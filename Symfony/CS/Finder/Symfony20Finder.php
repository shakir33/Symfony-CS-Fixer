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
class Symfony20Finder extends SymfonyFinder
{
    public function __construct($dir)
    {
        parent::__construct($dir);

        $this->in($dir.'/tests');
    }

    protected function getFileToExclude()
    {
        return array(
            'Symfony/Tests/Component/ClassLoader/ClassCollectionLoaderTest.php',
            'Symfony/Tests/Component/DependencyInjection/Fixtures/containers/container9.php',
            'Symfony/Tests/Component/DependencyInjection/Fixtures/includes/foo.php',
            'Symfony/Tests/Component/DependencyInjection/Fixtures/php/services9.php',
            'Symfony/Tests/Component/DependencyInjection/Fixtures/yaml/services9.yml',
            'Symfony/Tests/Component/Routing/Fixtures/dumper/url_matcher1.php',
            'Symfony/Tests/Component/Routing/Fixtures/dumper/url_matcher2.php',
            'Symfony/Tests/Component/Yaml/Fixtures/sfTests.yml',
        );
    }
}
