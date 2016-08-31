<?php


 function autoload_d1964628bd6c3e449e331c1fc9a6b183($class)
{
    $classes = array(
        'mbzOneshot\OneshotWebService' => __DIR__ .'/OneshotWebService.php',
        'mbzOneshot\SendToMD5' => __DIR__ .'/SendToMD5.php',
        'mbzOneshot\SendToMD5Response' => __DIR__ .'/SendToMD5Response.php',
        'mbzOneshot\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzOneshot\SendToIdClient' => __DIR__ .'/SendToIdClient.php',
        'mbzOneshot\SendToIdClientResponse' => __DIR__ .'/SendToIdClientResponse.php',
        'mbzOneshot\Send' => __DIR__ .'/Send.php',
        'mbzOneshot\SendResponse' => __DIR__ .'/SendResponse.php',
        'mbzOneshot\SendFromCampaign' => __DIR__ .'/SendFromCampaign.php',
        'mbzOneshot\SendFromCampaignResponse' => __DIR__ .'/SendFromCampaignResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d1964628bd6c3e449e331c1fc9a6b183');

// Do nothing. The rest is just leftovers from the code generation.
{
}
