<?php

class Devils_AjaxFilters_Block_Layer_Filter_Category extends Mage_Catalog_Block_Layer_Filter_Category
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('devils/ajaxfilters/layer/filter.phtml');
    }
}
