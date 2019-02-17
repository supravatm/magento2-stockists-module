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

namespace MageS\Stockists\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class Options extends AbstractSource implements ArrayInterface
{
    /**
     * get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->options as $values) {
            $options[] = [
                'value' => $values['value'],
                'label' => __($values['label'])
            ];
        }
        $options[] = [
            1 => 'Hello',
            0 => 'Hello 0'
        ];
        return $options;
    }
}