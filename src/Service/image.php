<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\FileUploader;
use Faker\Core\File;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(FileUploader::class)
        ->arg('$targetDirectory', '%images_directory%')
    ;
};