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

namespace eBayEnterprise\RetailOrderManagement\Payload\Payment;

trait TToken
{
    /** @var string **/
    protected $token;

    /**
     * The timestamped token value that was returned by PayPalSetExpressCheckoutReply and
     * passed on PayPalGetExpressCheckoutRequest.
     * Character length and limitations: 20 single-byte characters
     *
     * @return string
     */
    public function getToken()
    {
        // As from eBayEnterprise\RetailOrderManagement\Payload\Payment\IPayPalGetExpressCheckoutRequest
        return $this->token;
    }
    /**
     * According to the XSD comments, the token is 20 characaters
     * @param string
     * @return self
     */
    public function setToken($token)
    {
        // As from eBayEnterprise\RetailOrderManagement\Payload\Payment\IPayPalGetExpressCheckoutRequest
        $this->token = $this->cleanString($token, 20);
        return $this;
    }
    /**
     * Serialize the Token
     * return string
     */
    protected function serializeToken()
    {
        return "<Token>{$this->getToken()}</Token>";
    }

    /**
     * Trim any white space and return the resulting string truncating to $maxLength.
     *
     * Return null if the result is an empty string or not a string
     *
     * @param string $string
     * @param int $maxLength
     * @return string or null
     */
    abstract protected function cleanString($string, $maxLength);
}