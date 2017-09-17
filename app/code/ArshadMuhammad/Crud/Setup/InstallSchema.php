<?php

namespace ArshadMuhammad\Crud\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            'custom_table'
        )->addColumn(
            'custom_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ]
        )->addColumn(
            'custom_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Custom Name'
        )->setComment(
            'Custom Table Comment'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}