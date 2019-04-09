<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/modxExtension/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/modxextension')) {
            $cache->deleteTree(
                $dev . 'assets/components/modxextension/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/modxextension/', $dev . 'assets/components/modxextension');
        }
        if (!is_link($dev . 'core/components/modxextension')) {
            $cache->deleteTree(
                $dev . 'core/components/modxextension/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/modxextension/', $dev . 'core/components/modxextension');
        }
    }
}

return true;