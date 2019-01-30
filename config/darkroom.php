<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    |
    */

    'disk_name' => 'spaces',

    // Use custom implementations
    'path_generator' => Dresing\Darkroom\PathGenerator\BasePathGenerator::class,
    'file_manager' => Dresing\Darkroom\FileManagers\BaseFileManager::class,
    'image_generator' => Dresing\Darkroom\ImageGenerators\BaseImageGenerator::class,




];