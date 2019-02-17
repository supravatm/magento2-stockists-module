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

namespace MageS\Stockists\Controller\Adminhtml\Stores;

use \MageS\Stockists\Controller\Adminhtml\StockistAbstruct as StockistController;

class Index extends StockistController
{
    /**
     * Stockists Grid.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('MageS_Stockists::stores_manage');
        $resultPage->getConfig()->getTitle()->prepend(__('Stockists'));
        $resultPage->addBreadcrumb(__('Stockists'), __('Stockists'));
        return $resultPage;
    }

    /**
     * Is the user allowed to view grid.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MageS_Stockists::stores_manage');

    }
}