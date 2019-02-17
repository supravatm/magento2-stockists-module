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

namespace MageS\Stockists\Api\Data;


interface StockistsInterface
{
    /**
     * Return the Stockists ID
     *
     * @return int
     */
    public function getEntityId();
    /**
     * Set Stockists ID
     *
     * @param int $id
     * @return $this
     */
    public function setEntityId($id);
    /**
     * Return the Product ID associated with Quote
     *
     * @return int
     */
    public function getStoreId();
    /**
     * Set the Store Id
     *
     * @param int $productId
     * @return $this
     */
    public function setStoreId($storeId);
    /**
     * Return the StoreName Name
     *
     * @return string
     */
    public function getStoreName();
    /**
     * Set the Customer Name
     *
     * @param string $customerName
     * @return $this
     */
    public function setStoreName($storeName);
    /**
     * Return the addrress_line_1
     *
     * @return string
     */
    public function getAddrressLine1();
    /**
     * Set the Customer Email
     *
     * @param string $customerEmail
     * @return $this
     */
    public function setAddrressLine1($addresLine1);
    /**
     * Return the addrress_line_2
     *
     * @return string
     */
    public function getAddrressLine2();
    /**
     * Set the Customer Comments
     *
     * @param string $customerComments
     * @return $this
     */
    public function setAddrressLine2($addresLine2);
    /**
     * Return the Date and Time of record added
     *
     * @return string
     */
    public function getCity();
    /**
     * Set the Date and Time of record added
     *
     * @param string $date
     * @return $this
     */
    public function setCity($city);

    public function getCountry();
    public function setCountry($country);

    public function getPostcode();
    public function setPostcode($postcode);

    public function getRegion();
    public function setRegion($region);

    public function getEmail();
    public function setEmail($email);

    public function getPhone();
    public function setPhone($phone);

    public function getImage();
    public function setImage($image);

    public function getLatitude();
    public function setLatitude($latitude);

    public function getLongitude();
    public function setLongitude($longitude);

    public function getStatus();
    public function setStatus($status);



    /**
     * Return the Date and Time of record updated
     *
     * @return string
     */
    public function getUpdatedAt();
    /**
     * Set the Date and Time of record updated
     *
     * @param string $date
     * @return $this
     */
    public function setCreatedAt($date);
}