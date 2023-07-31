<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\FileUploader;

return static function (ContainerConfigurator $container) : void {
    $services = $container->services();

    $services->set(FileUploader::class)
        ->arg('$targetDirectory', '%kernel.project_dir%/public/uploads/images')
    ;
};