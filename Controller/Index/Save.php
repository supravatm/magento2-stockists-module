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

namespace MageS\Stockists\Controller\Index;

use \Magento\Framework\Controller\Result\RawFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * Index resultPageFactory
     * @var PageFactory
     */
    private $resultPageFactory;
    /**
     * @var
     */
    private $stockistsFactory;
    /**
     * @var
     */
    private $stockitsRepository;
    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \MageS\Stockists\Model\stockistsFactory $stockistsFactory
     * @param \MageS\Stockists\Model\stockistsRepository $stockistsRepository
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \MageS\Stockists\Model\StockistsFactory $stockistsFactory,
        \MageS\Stockists\Model\StockistsRepository $stockistsRepository
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->stockistsFactory = $stockistsFactory;
        $this->stockistsRepository = $stockistsRepository;
        return parent::__construct($context);
    }
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = [
            "store_id" => 201,
            "StoreName" => "Heather T. Whisler",
            "addrress_line_1" => "513 State Street",
            "addrress_line_2" => "",
            "city" => "Dearborn",
            "country" => "US",
            "postcode" => "48126",
            "region" => "MI",
            "email" => "karina@kapoor.com",
            "latitude" => 1,
            "longitude" => 1,
            "status" => 1,
            "created_at" => date('Y-m-d h:i:s')
        ];

        $obj = $this->stockistsFactory->create();

        for($i=1; $i <= 300; $i++) {

            $this->stockistsRepository->save($obj->addData($data)); // Service Contract
            $i++;
        }
        //$obj->addData($data)->save(); // Model / Resource Model
        $this->resultFactory->create("raw");
    }
}