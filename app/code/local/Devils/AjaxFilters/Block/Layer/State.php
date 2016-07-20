<?php

class Devils_AjaxFilters_Block_Layer_State extends Mage_Catalog_Block_Layer_State
{
    /**
     * Initialize Layer State template
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('devils/ajaxfilters/layer/state.phtml');
    }
}