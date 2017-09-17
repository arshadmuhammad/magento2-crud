<?php

namespace ArshadMuhammad\Crud\Model;

class Crud extends \Magento\Framework\Model\AbstractModel {

    public function _construct() {
        $this->_init('ArshadMuhammad\Crud\Model\ResourceModel\Crud');
    }

}