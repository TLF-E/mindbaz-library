<?php


 function autoload_bfa1b6d9d52423d508d4f42fdf3910a6($class)
{
    $classes = array(
        'mbzTarget\TargetWebService' => __DIR__ .'/TargetWebService.php',
        'mbzTarget\ListCustom' => __DIR__ .'/ListCustom.php',
        'mbzTarget\ESortDir' => __DIR__ .'/ESortDir.php',
        'mbzTarget\ListResponse' => __DIR__ .'/ListResponse.php',
        'mbzTarget\TargetListResult' => __DIR__ .'/TargetListResult.php',
        'mbzTarget\ArrayOfTargetListRecords' => __DIR__ .'/ArrayOfTargetListRecords.php',
        'mbzTarget\TargetListRecords' => __DIR__ .'/TargetListRecords.php',
        'mbzTarget\ETargetType' => __DIR__ .'/ETargetType.php',
        'mbzTarget\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzTarget\GetTarget' => __DIR__ .'/GetTarget.php',
        'mbzTarget\GetTargetResponse' => __DIR__ .'/GetTargetResponse.php',
        'mbzTarget\Target' => __DIR__ .'/Target.php',
        'mbzTarget\TargetParameters' => __DIR__ .'/TargetParameters.php',
        'mbzTarget\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'mbzTarget\GetTargetFieldFilter' => __DIR__ .'/GetTargetFieldFilter.php',
        'mbzTarget\GetTargetFieldFilterResponse' => __DIR__ .'/GetTargetFieldFilterResponse.php',
        'mbzTarget\TargetFieldFilter' => __DIR__ .'/TargetFieldFilter.php',
        'mbzTarget\ArrayOfFieldFilter' => __DIR__ .'/ArrayOfFieldFilter.php',
        'mbzTarget\FieldFilter' => __DIR__ .'/FieldFilter.php',
        'mbzTarget\EOperator' => __DIR__ .'/EOperator.php',
        'mbzTarget\GetTargetSqlFilter' => __DIR__ .'/GetTargetSqlFilter.php',
        'mbzTarget\GetTargetSqlFilterResponse' => __DIR__ .'/GetTargetSqlFilterResponse.php',
        'mbzTarget\TargetSqlFilter' => __DIR__ .'/TargetSqlFilter.php',
        'mbzTarget\GetTargetSendingFilter' => __DIR__ .'/GetTargetSendingFilter.php',
        'mbzTarget\GetTargetSendingFilterResponse' => __DIR__ .'/GetTargetSendingFilterResponse.php',
        'mbzTarget\TargetSendingFilter' => __DIR__ .'/TargetSendingFilter.php',
        'mbzTarget\ECombinaisonMode' => __DIR__ .'/ECombinaisonMode.php',
        'mbzTarget\GetTargetFileFilter' => __DIR__ .'/GetTargetFileFilter.php',
        'mbzTarget\GetTargetFileFilterResponse' => __DIR__ .'/GetTargetFileFilterResponse.php',
        'mbzTarget\TargetFileFilter' => __DIR__ .'/TargetFileFilter.php',
        'mbzTarget\GetTargetBehaviourFilter' => __DIR__ .'/GetTargetBehaviourFilter.php',
        'mbzTarget\GetTargetBehaviourFilterResponse' => __DIR__ .'/GetTargetBehaviourFilterResponse.php',
        'mbzTarget\TargetBehaviourFilter' => __DIR__ .'/TargetBehaviourFilter.php',
        'mbzTarget\EActionType' => __DIR__ .'/EActionType.php',
        'mbzTarget\EBehaviourType' => __DIR__ .'/EBehaviourType.php',
        'mbzTarget\CreateTarget' => __DIR__ .'/CreateTarget.php',
        'mbzTarget\CreateTargetResponse' => __DIR__ .'/CreateTargetResponse.php',
        'mbzTarget\UpdateTarget' => __DIR__ .'/UpdateTarget.php',
        'mbzTarget\UpdateTargetResponse' => __DIR__ .'/UpdateTargetResponse.php',
        'mbzTarget\SetTargetFieldFilter' => __DIR__ .'/SetTargetFieldFilter.php',
        'mbzTarget\SetTargetFieldFilterResponse' => __DIR__ .'/SetTargetFieldFilterResponse.php',
        'mbzTarget\SetTargetSqlFilter' => __DIR__ .'/SetTargetSqlFilter.php',
        'mbzTarget\SetTargetSqlFilterResponse' => __DIR__ .'/SetTargetSqlFilterResponse.php',
        'mbzTarget\SetTargetBehaviourFilter' => __DIR__ .'/SetTargetBehaviourFilter.php',
        'mbzTarget\SetTargetBehaviourFilterResponse' => __DIR__ .'/SetTargetBehaviourFilterResponse.php',
        'mbzTarget\SetTargetSendingFilter' => __DIR__ .'/SetTargetSendingFilter.php',
        'mbzTarget\SetTargetSendingFilterResponse' => __DIR__ .'/SetTargetSendingFilterResponse.php',
        'mbzTarget\SetTargetFileFilter' => __DIR__ .'/SetTargetFileFilter.php',
        'mbzTarget\SetTargetFileFilterResponse' => __DIR__ .'/SetTargetFileFilterResponse.php',
        'mbzTarget\GetTargetDesc' => __DIR__ .'/GetTargetDesc.php',
        'mbzTarget\GetTargetDescResponse' => __DIR__ .'/GetTargetDescResponse.php',
        'mbzTarget\DuplicateTarget' => __DIR__ .'/DuplicateTarget.php',
        'mbzTarget\DuplicateTargetResponse' => __DIR__ .'/DuplicateTargetResponse.php',
        'mbzTarget\Count' => __DIR__ .'/Count.php',
        'mbzTarget\CountResponse' => __DIR__ .'/CountResponse.php',
        'mbzTarget\DeleteTarget' => __DIR__ .'/DeleteTarget.php',
        'mbzTarget\DeleteTargetResponse' => __DIR__ .'/DeleteTargetResponse.php',
        'mbzTarget\ArchiveTarget' => __DIR__ .'/ArchiveTarget.php',
        'mbzTarget\ArchiveTargetResponse' => __DIR__ .'/ArchiveTargetResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

f('autoload_bfa1b6d9d52423d508d4f42fdf3910a6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
