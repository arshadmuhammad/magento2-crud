<?php

namespace ArshadMuhammad\Crud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action{

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $crudObj = $this->_objectManager->create('ArshadMuhammad\Crud\Model\Crud');

        // get collection
        $coll = $crudObj->getCollection();

        print_r($coll->getData());


        // save into table
        $crudObj->setCustomName("hello");

        $crudObj->save();
    }
}