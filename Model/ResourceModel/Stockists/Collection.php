<?php
/**
 * MageS_Stockists extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  MageS
 * @package   MageS_Stockists
 * @copyright 2019 @ MageS
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Supravat Mondal
 */

namespace MageS\Stockists\Model\ResourceModel\Stockists;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'stockist_id';
    protected $_eventPrefix = 'ms_stockists_stores_collection';
    protected $_eventObject = 'ms_stockists_collection';

    protected function _construct()
    {
        $this->_init('MageS\Stockists\Model\Stockists', 'MageS\Stockists\Model\ResourceModel\Stockists');
    }
}