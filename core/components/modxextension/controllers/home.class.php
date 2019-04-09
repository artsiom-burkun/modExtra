<?php

/**
 * The home manager controller for modxExtension.
 *
 */
class modxExtensionHomeManagerController extends modExtraManagerController
{
    /** @var modxExtension $modxExtension */
    public $modxExtension;


    /**
     *
     */
    public function initialize()
    {
        $this->modxExtension = $this->modx->getService('modxExtension', 'modxExtension', MODX_CORE_PATH . 'components/modxextension/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['modxextension:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('modxextension');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->modxExtension->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/modxextension.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->modxExtension->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        modxExtension.config = ' . json_encode($this->modxExtension->config) . ';
        modxExtension.config.connector_url = "' . $this->modxExtension->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "modxextension-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="modxextension-panel-home-div"></div>';

        return '';
    }
}