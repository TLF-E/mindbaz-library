<?php


 function autoload_a17d16dd14e4bd30813040570f443f63($class)
{
    $classes = array(
        'mbzConfig\ConfigWebService' => __DIR__ .'/ConfigWebService.php',
        'mbzConfig\GetConfig' => __DIR__ .'/GetConfig.php',
        'mbzConfig\GetConfigResponse' => __DIR__ .'/GetConfigResponse.php',
        'mbzConfig\Config' => __DIR__ .'/Config.php',
        'mbzConfig\ConfigParameters' => __DIR__ .'/ConfigParameters.php',
        'mbzConfig\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzConfig\ListCustom' => __DIR__ .'/ListCustom.php',
        'mbzConfig\ESortDir' => __DIR__ .'/ESortDir.php',
        'mbzConfig\ListResponse' => __DIR__ .'/ListResponse.php',
        'mbzConfig\ConfigListResult' => __DIR__ .'/ConfigListResult.php',
        'mbzConfig\ArrayOfConfigListRecords' => __DIR__ .'/ArrayOfConfigListRecords.php',
        'mbzConfig\ConfigListRecords' => __DIR__ .'/ConfigListRecords.php',
        'mbzConfig\CreateConfig' => __DIR__ .'/CreateConfig.php',
        'mbzConfig\CreateConfigResponse' => __DIR__ .'/CreateConfigResponse.php',
        'mbzConfig\UpdateConfig' => __DIR__ .'/UpdateConfig.php',
        'mbzConfig\UpdateConfigResponse' => __DIR__ .'/UpdateConfigResponse.php',
        'mbzConfig\DeleteConfig' => __DIR__ .'/DeleteConfig.php',
        'mbzConfig\DeleteConfigResponse' => __DIR__ .'/DeleteConfigResponse.php',
        'mbzConfig\ArchiveConfig' => __DIR__ .'/ArchiveConfig.php',
        'mbzConfig\ArchiveConfigResponse' => __DIR__ .'/ArchiveConfigResponse.php',
        'mbzConfig\DuplicateConfig' => __DIR__ .'/DuplicateConfig.php',
        'mbzConfig\DuplicateConfigResponse' => __DIR__ .'/DuplicateConfigResponse.php',
        'mbzConfig\ListSenderDomains' => __DIR__ .'/ListSenderDomains.php',
        'mbzConfig\ListSenderDomainsResponse' => __DIR__ .'/ListSenderDomainsResponse.php',
        'mbzConfig\ArrayOfString' => __DIR__ .'/ArrayOfString.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a17d16dd14e4bd30813040570f443f63');

// Do nothing. The rest is just leftovers from the code generation.
{
}
