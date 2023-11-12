<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_NewsletterPopup
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\NewsletterPopup\Model\Config;

/**
 * Class for Enabling option
 */
class Enable implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label' => __('Disable')],
            ['value' => '1', 'label' => __('Enable on Homepage Only')],
            ['value' => '2', 'label' => __('Enable on All Pages')]
        ];
    }
}
