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

use eBayEnterprise\RetailOrderManagement\Payload\TPayloadTest;
use eBayEnterprise\RetailOrderManagement\Payload\ValidatorIterator;

class MailingAddressTest extends \PHPUnit_Framework_TestCase
{
    use TPayloadTest;

    const FULL_FIXTURE_FILE = 'MailingAddress.xml';
    /**
     * Setup a stub validator and validator iterator for each payload to use
     */
    public function setUp()
    {
        // use stub to allow validation success/failure to be scripted.
        $this->stubValidator = $this->getMock('\eBayEnterprise\RetailOrderManagement\Payload\IValidator');
        $this->validatorIterator = new ValidatorIterator([$this->stubValidator]);

        $this->fullPayload = $this->buildPayload([
            'setHonorificName' => 'Mr.',
            'setFirstName' => 'James',
            'setLastName' => 'Jones',
            'setMiddleName' => 'Earl',
            'setLines' => '123 Main St',
            'setCity' => 'King of Prussia',
            'setMainDivision' => 'PA',
            'setCountryCode' => 'US',
            'setPostalCode' => '19406'
            ]);
    }

    protected function createNewPayload()
    {
        return new MailingAddress($this->validatorIterator);
    }

    protected function getCompleteFixtureFile()
    {
        return __DIR__ . '/Fixtures/' . static::FULL_FIXTURE_FILE;
    }
}
