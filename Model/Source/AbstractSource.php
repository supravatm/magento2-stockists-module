<?php
declare(strict_types=1);
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

abstract class AbstractSource implements ArrayInterface
{
    /**
     * @var array
     */
    public $options;

    /**
     * @param array $options
     */
    public function __construct(
        array $options = []
    ) {
        $this->options = $options;
    }

    /**
     * @return array
     */
    abstract public function toOptionArray();

    /**
     * @param $value
     * @return string
     */
    public function getOptionText($value)
    {
        $options = $this->getOptions();
        if (!is_array($value)) {
            $value = explode(',', $value);
        }
        $texts = [];
        foreach ($value as $v) {
            if (isset($options[$v])) {
                $texts[] = $options[$v];
            }
        }
        return implode(', ', $texts);
    }
    /**
     * get options as key value pair
     *
     * @return array
     */
    public function getOptions()
    {
        $options = [];
        foreach ($this->toOptionArray() as $values) {
            $options[$values['value']] = __($values['label']);
        }
        return $options;
    }
}
