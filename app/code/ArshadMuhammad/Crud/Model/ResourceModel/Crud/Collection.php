<?php

namespace ArshadMuhammad\Crud\Model\ResourceModel\Crud;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    /**
     * Initialize resource Colleciton
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ArshadMuhammad\Crud\Model\Crud','\ArshadMuhammad\Crud\Model\ResourceModel\Crud');
    }
}