<?php

class modxExtensionOfficeItemGetProcessor extends modObjectGetProcessor
{
    public $objectType = 'modxExtensionItem';
    public $classKey = 'modxExtensionItem';
    public $languageTopics = ['modxextension:default'];
    //public $permission = 'view';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }

}

return 'modxExtensionOfficeItemGetProcessor';