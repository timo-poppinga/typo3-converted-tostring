<?php

declare(strict_types=1);


use Z3\Statistics\Controller\TestController;

defined('TYPO3') or die();

return [
    'statistics' => [
        'labels' => 'LLL:EXT:statistics/Resources/Private/Language/ModuleStatistics.xlf',
        'iconIdentifier' => 'modulegroup-tools',
        'position' => [
            'after' => 'web'
        ],
    ],
    'test' => [
        'parent' => 'statistics',
        'position' => [
            'after' => 'continuous_upgrading'
        ],
        'iconIdentifier' => 'module-install-upgrade',
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/statistics/test',
        'labels' => 'LLL:EXT:statistics/Resources/Private/Language/ModuleStatisticsTest.xlf',
        'extensionName' => 'Statistics',
        'controllerActions' => [
            TestController::class => [
                'index',
            ],
        ],
    ],
];
