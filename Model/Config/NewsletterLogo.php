<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_NewsletterPopup
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\NewsletterPopup\Model\Config;

use Magento\Config\Model\Config\Backend\Image;

/**
 * Class for Newsletter popup logo
 */
class NewsletterLogo extends Image
{
    const UPLOAD_DIR = 'newsletter/logo';

    /**
     * @return string
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }

    /**
     * @return true
     */
    protected function _addWhetherScopeInfo()
    {
        return true;
    }

    /**
     * @return string[]
     */
    protected function _getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }
}
