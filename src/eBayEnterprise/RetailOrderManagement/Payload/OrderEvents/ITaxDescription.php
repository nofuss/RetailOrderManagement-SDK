<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace eBayEnterprise\RetailOrderManagement\Payload\OrderEvents;

use eBayEnterprise\RetailOrderManagement\Payload\IPayload;

interface ITaxDescription extends IPayload
{
    const ROOT_NODE = 'TaxesDutiesFeesInformation';

    /**
     * Description of the tax, duty or fee.
     *
     * @return string
     */
    public function getDescription();
    /**
     * @param string
     * @return self
     */
    public function setDescription($description);
    /**
     * Amount charged for the tax, duty or fee.
     *
     * @return float
     */
    public function getAmount();
    /**
     * @param float
     * @return self
     */
    public function setAmount($amount);
}
