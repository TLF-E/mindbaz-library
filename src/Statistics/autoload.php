<?php


 function autoload_180f0ece0b024e0a1e3811bcfc3aadbd($class)
{
    $classes = array(
        'mbzStatistics\StatisticsWebService' => __DIR__ .'/StatisticsWebService.php',
        'mbzStatistics\GetSentStatistics' => __DIR__ .'/GetSentStatistics.php',
        'mbzStatistics\GetSentStatisticsResponse' => __DIR__ .'/GetSentStatisticsResponse.php',
        'mbzStatistics\GetSentStatisticsResult' => __DIR__ .'/GetSentStatisticsResult.php',
        'mbzStatistics\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzStatistics\GetSentStatistics2' => __DIR__ .'/GetSentStatistics2.php',
        'mbzStatistics\GetSentStatistics2Response' => __DIR__ .'/GetSentStatistics2Response.php',
        'mbzStatistics\SentStatistics' => __DIR__ .'/SentStatistics.php',
        'mbzStatistics\GetSentsStatistics' => __DIR__ .'/GetSentsStatistics.php',
        'mbzStatistics\GetSentsStatisticsResponse' => __DIR__ .'/GetSentsStatisticsResponse.php',
        'mbzStatistics\GetSentsStatisticsResult' => __DIR__ .'/GetSentsStatisticsResult.php',
        'mbzStatistics\GetSentsStatistics2' => __DIR__ .'/GetSentsStatistics2.php',
        'mbzStatistics\GetSentsStatistics2Response' => __DIR__ .'/GetSentsStatistics2Response.php',
        'mbzStatistics\ArrayOfSentStatistics' => __DIR__ .'/ArrayOfSentStatistics.php',
        'mbzStatistics\GetSentsStatistics3' => __DIR__ .'/GetSentsStatistics3.php',
        'mbzStatistics\GetSentsStatistics3Response' => __DIR__ .'/GetSentsStatistics3Response.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_180f0ece0b024e0a1e3811bcfc3aadbd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
