<?php

class modxExtensionOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'modxExtensionItem';
    public $classKey = 'modxExtensionItem';
    public $languageTopics = ['modxextension'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('modxextension_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('modxextension_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'modxExtensionOfficeItemCreateProcessor';