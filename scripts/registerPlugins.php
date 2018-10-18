<?php

// From Tutorial at https://hub.taotesting.com/techdocs/tao-testqti/test-runner-plugins#tools-plugins

use oat\taoTests\models\runner\plugins\PluginRegistry;
use oat\oatbox\service\ServiceManager;
use oat\taoTests\models\runner\plugins\TestPluginService;

$registry = PluginRegistry::getRegistry();
$registry->register(TestPlugin::fromArray([
    'id' => 'inverter',
    'name' => 'inverter',
    'module' => 'taoDocs2/runner/plugins/tools/inverter/inverter',
    'description' => 'Inverts colors',
    'category' => 'tools',
    'active' => true,
    'tags' => [ ]
]));

$serviceManager = ServiceManager::getServiceManager();
$pluginService = $serviceManager->get(TestPluginService::CONFIG_ID);
$allPlugins = $pluginService->getAllPlugins();
common_Logger::i($allPlugins[0]);