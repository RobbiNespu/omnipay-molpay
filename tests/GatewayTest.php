<?php namespace Omnipay\MolPay;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway();
    }

    public function testPurchase()
    {
    }
}
