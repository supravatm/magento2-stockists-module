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

namespace MageS\Stockists\Model;

use MageS\Stockists\Api\Data\StockistsInterface;

class Stockists extends \Magento\Framework\Model\AbstractModel implements
    \MageS\Stockists\Api\Data\StockistsInterface
{
    protected function _construct()
    {
        $this->_init('MageS\Stockists\Model\ResourceModel\Stockists');
    }

    /**
     * Return the Stockists ID
     *
     * @return int
     */
    public function getEntityId(){
        return $this->_getData('stockist_id');
    }
    /**
     * Set Stockists ID
     *
     * @param int $id
     * @return $this
     */
    public function setEntityId($id){
        $this->setData('stockist_id', $id);
    }


    /**
     * @inheritDoc
     */
    public function getStoreId()
    {
        return $this->_getData('store_id');
    }

    /**
     * @inheritDoc
     */
    public function setStoreId($storeId)
    {
        $this->setData('stockist_id', $storeId);
    }

    /**
     * @inheritDoc
     */
    public function getStoreName()
    {
        return $this->_getData('store_id');
    }

    /**
     * @inheritDoc
     */
    public function setStoreName($storeName)
    {
        $this->setData('StoreName', $storeName);
    }

    /**
     * @inheritDoc
     */
    public function getAddrressLine1()
    {
        return $this->_getData('addrress_line_1');
    }

    /**
     * @inheritDoc
     */
    public function setAddrressLine1($addresLine1)
    {
        $this->setData('addrress_line_1', $addresLine1);
    }

    /**
     * @inheritDoc
     */
    public function getAddrressLine2()
    {
        return $this->_getData('addrress_line_2');
    }

    /**
     * @inheritDoc
     */
    public function setAddrressLine2($addresLine2)
    {

        $this->setData('stockist_id_id', $addresLine2);
    }

    /**
     * @inheritDoc
     */
    public function getCity()
    {
        return $this->_getData('city');
    }

    /**
     * @inheritDoc
     */
    public function setCity($city)
    {
        $this->setData('city', $city);
    }

    public function getCountry()
    {
        return $this->_getData('store_id');
    }

    public function setCountry($country)
    {
        $this->setData('country', $country);
    }

    public function getPostcode()
    {
        return $this->_getData('postcode');
    }

    public function setPostcode($postcode)
    {
        $this->setData('postcode', $postcode);
    }

    public function getRegion()
    {
        return $this->_getData('region');
    }

    public function setRegion($region)
    {
        $this->setData('region', $region);
    }

    public function getEmail()
    {
        return $this->_getData('email');
    }

    public function setEmail($email)
    {
        $this->setData('email', $email);
    }

    public function getPhone()
    {
        return $this->_getData('phone');
    }

    public function setPhone($phone)
    {
        $this->setData('phone', $phone);
    }

    public function getImage()
    {
        return $this->_getData('image');
    }

    public function setImage($image)
    {
        $this->setData('image', $image);
    }

    public function getLatitude()
    {
        return $this->_getData('latitude');
    }

    public function setLatitude($latitude)
    {
        $this->setData('latitude', $latitude);
    }

    public function getLongitude()
    {
        return $this->_getData('longitude');
    }

    public function setLongitude($longitude)
    {
        $this->setData('longitude', $longitude);
    }

    public function getStatus()
    {
        return $this->_getData('status');
    }

    public function setStatus($status)
    {
        $this->setData('status', $status);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->_getData('updated_at');
    }

    public function setUpdatedAt($date)
    {
        $this->setData('updated_at', $date);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt($date)
    {
        return $this->_getData('created_at');
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($date)
    {
        $this->setData('created_at', $date);
    }
}