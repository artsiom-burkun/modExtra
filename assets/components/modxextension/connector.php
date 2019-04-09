<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var modxExtension $modxExtension */
$modxExtension = $modx->getService('modxExtension', 'modxExtension', MODX_CORE_PATH . 'components/modxextension/model/');
$modx->lexicon->load('modxextension:default');

// handle request
$corePath = $modx->getOption('modxextension_core_path', null, $modx->getOption('core_path') . 'components/modxextension/');
$path = $modx->getOption('processorsPath', $modxExtension->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);