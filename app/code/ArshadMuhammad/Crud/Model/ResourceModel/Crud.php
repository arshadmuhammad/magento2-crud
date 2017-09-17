<?php

namespace ArshadMuhammad\Crud\Model\ResourceModel;

class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('custom_table','custom_id');
    }
}