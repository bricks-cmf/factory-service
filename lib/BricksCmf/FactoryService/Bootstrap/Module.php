<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/namespace BricksCmf\FactoryService\Bootstrap;

use BricksCmf\FactoryService\Bootstrap\Initializer\FactoryServiceInitializer;
use BricksFramework\Bootstrap\Module\AbstractModule;

class Module extends AbstractModule
{
    public function getInitializerClasses(): array
    {
        return [
            FactoryServiceInitializer::class
        ];
    }
}
