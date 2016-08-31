<?php


 function autoload_f4ce944e31f2c7e625aa9b6e97454c05($class)
{
    $classes = array(
        'mbzImport\ImportWebService' => __DIR__ .'/ImportWebService.php',
        'mbzImport\GetImport' => __DIR__ .'/GetImport.php',
        'mbzImport\GetImportResponse' => __DIR__ .'/GetImportResponse.php',
        'mbzImport\Import' => __DIR__ .'/Import.php',
        'mbzImport\ImportParameters' => __DIR__ .'/ImportParameters.php',
        'mbzImport\ArrayOfImportMapping' => __DIR__ .'/ArrayOfImportMapping.php',
        'mbzImport\ImportMapping' => __DIR__ .'/ImportMapping.php',
        'mbzImport\SchedulingInfos' => __DIR__ .'/SchedulingInfos.php',
        'mbzImport\RecurringInfos' => __DIR__ .'/RecurringInfos.php',
        'mbzImport\ImportLog' => __DIR__ .'/ImportLog.php',
        'mbzImport\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzImport\ScheduleImportNow' => __DIR__ .'/ScheduleImportNow.php',
        'mbzImport\ScheduleImportNowResponse' => __DIR__ .'/ScheduleImportNowResponse.php',
        'mbzImport\ScheduleImportOneTime' => __DIR__ .'/ScheduleImportOneTime.php',
        'mbzImport\ScheduleImportOneTimeResponse' => __DIR__ .'/ScheduleImportOneTimeResponse.php',
        'mbzImport\StopImport' => __DIR__ .'/StopImport.php',
        'mbzImport\StopImportResponse' => __DIR__ .'/StopImportResponse.php',
        'mbzImport\ListCustom' => __DIR__ .'/ListCustom.php',
        'mbzImport\ESortDir' => __DIR__ .'/ESortDir.php',
        'mbzImport\ListResponse' => __DIR__ .'/ListResponse.php',
        'mbzImport\ImportListResult' => __DIR__ .'/ImportListResult.php',
        'mbzImport\ArrayOfImportListRecords' => __DIR__ .'/ArrayOfImportListRecords.php',
        'mbzImport\ImportListRecords' => __DIR__ .'/ImportListRecords.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f4ce944e31f2c7e625aa9b6e97454c05');

// Do nothing. The rest is just leftovers from the code generation.
{
}
