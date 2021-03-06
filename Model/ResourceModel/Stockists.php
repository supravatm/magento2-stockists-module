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

namespace MageS\Stockists\Model\ResourceModel;


class Stockists extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_idFieldName = 'stockist_id';

    protected function _construct()
    {
        $this->_init('ms_stockists_stores','stockist_id');
    }
}