<?php
require_once __DIR__.'/libs/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Symfony\\Component\\EventDispatcher' => __DIR__.'/libs/symfony/event-dispatcher',
    'Symfony\\Component\\ClassLoader' => __DIR__.'/libs/symfony/class-loader',
    'Aliyun' => __DIR__.'/src',
));

$loader->register();
