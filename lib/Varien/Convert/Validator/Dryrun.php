<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition End User License Agreement
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magento.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Varien
 * @package     Varien_Convert
 * @copyright Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license http://www.magento.com/license/enterprise-edition
 */


/**
 * Convert dry run validator
 *
 * Insert where you want to step profile execution if dry run flag is set
 *
 * @category   Varien
 * @package    Varien_Convert
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Varien_Convert_Validator_Dryrun extends Varien_Convert_Validator_Abstract
{
    public function validate()
    {
        if ($this->getVar('dry_run') || $this->getProfile()->getDryRun()) {
            $this->addException('Dry run set, stopping execution', Varien_Convert_Exceptin::FATAL);
        }
        return $this;
    }
}
