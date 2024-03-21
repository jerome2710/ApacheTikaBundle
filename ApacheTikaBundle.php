<?php

/*
 * This file is part of the ApacheTikaBundle Project.
 *
 * (c) Mathieu Santo Stefano--Féron <mathieu.santostefano@gmail.com>
 */

namespace Joli\ApacheTikaBundle;

use Joli\ApacheTikaBundle\DependencyInjection\ApacheTikaExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApacheTikaBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ApacheTikaExtension();
    }
}
