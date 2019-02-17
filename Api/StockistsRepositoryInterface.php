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

namespace MageS\Stockists\Api;


interface StockistsRepositoryInterface
{
    /**
     * @api
     * @param \MageS\Stockists\Api\Data\StockistsInterface $model
     * @return \MageS\Stockists\Api\Data\StockistslInterface
     */
    public function save(StockistsInterface $model);
}