<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/namespace BricksCmf\FactoryService\Bootstrap\Initializer;

use BricksCmf\FactoryService\FactoryService;
use BricksFramework\Bootstrap\Initializer\AbstractInitializer;
use BricksCmf\LazyLoaderService\LazyLoaderService;
use BricksFramework\Bootstrap\BootstrapInterface;

class FactoryServiceInitializer extends AbstractInitializer
{
    public function initialize(BootstrapInterface $bootstrap): void
    {
        if (in_array(FactoryService::SERVICE_NAME, $bootstrap->getServices())) {
            return;
        }

        $factoryService = $bootstrap->getInstance('BricksCmf\\FactoryService\\FactoryService');
        $bootstrap->setService(FactoryService::SERVICE_NAME, $factoryService);
    }

    public function getPriority(): int
    {
        return -9400;
    }
}
