<?php

class Devils_AjaxFilters_Block_Layer_Filter_Attribute extends Mage_Catalog_Block_Layer_Filter_Attribute
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('devils/ajaxfilters/layer/filter.phtml');
    }
}
