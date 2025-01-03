<?php

/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Sales
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2020-2022 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Sales_Model_Entity_Setup $installer */
$installer = $this;

$installer->getConnection()->addKey($installer->getTable('sales_flat_order'), 'IDX_UPDATED_AT', 'updated_at');
$installer->getConnection()->addKey($installer->getTable('sales_flat_shipment'), 'IDX_CREATED_AT', 'created_at');
$installer->getConnection()->addKey($installer->getTable('sales_flat_shipment'), 'IDX_UPDATED_AT', 'updated_at');
